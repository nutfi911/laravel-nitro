<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        // $cars = Car::all()->where('isHighligted', 1);
        // return view('index')->with('cars', $cars);

        return view('guest.welcome');
    }

    public function listAll()
    {
        $cars = DB::table('cars')->where('isActive', 1)->simplePaginate(8);
        return view('listall')->with('cars', $cars);
    }

    public function rent($id)
    {
        $car = Car::find($id);
        return view('rent')->with('car', $car);
    }

    public function rentRequest(Request $request, $id)
    {
        $request->validate([
            'day' => 'required'
        ]);

        $days = $request->day;

        $car = Car::find($id);

        $price = $car['dailyPrice'];

        $totalAmount = 0;

        if ($days == 30) {
            $totalAmount = $price * $days - ($price * $days * 0.4);
        } else {
            $totalAmount = $price * $days;
        }


        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->car_id = $id;
        $reservation->reservationStartDate = Carbon::now();
        $reservation->reservationEndDate = Carbon::now()->addDays($request->day);
        $reservation->price = $totalAmount;
        $reservation->isConfirmed = 0;
        if ($reservation->save()) {
            Alert::alert('Success!', 'New reservation created successfully!', 'success');
            return redirect(route('memberSettings'));
        }
        Alert::alert('Error', 'Reservation could not be made', 'error');
    }

    public function login()
    {
        return view('guest.login');
    }

    public function loginAttempt(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->rememberme)) {
            alert()->success('Logged In', 'Welcome');
            return redirect()->intended(route('loggedIn'));
        } else {

            alert()->error('Error Loggin In', 'Check your Credentials');
            return redirect()->route('login');
        }
    }

    public function loggedIn()
    {
        // $cars = Car::all()->where('isHighligted', 1);
        // return view('index')->with('cars', $cars);
        return view('index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(route('index'));
    }

    public function register()
    {
        return view('guest.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6',
            'name' => 'required',
            'phone' => 'required',
            'birthyear' => 'required',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->user_phone = $request->phone;
        $user->user_birthyear = $request->birthyear;

        if ($user->save()) {
            alert()->success('Registered.', 'Registration Successful!');
            return redirect()->intended(route('login'));
        }

        alert()->error('Error', 'Error Registering');
        return back();
    }

    public function memberSettings()
    {
        $reservations = DB::table('reservations')
            ->select('*')
            ->join('cars', 'reservations.car_id', '=', 'cars.id')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->where('reservations.user_id', '=', Auth::id())
            ->orderBy('reservations.reservationStartDate', 'DESC')
            ->get();

        return view('membersettings')->with('reservations', $reservations);
    }

    public function memberEdit()
    {
        $user = DB::table('users')->where('id', '=', Auth::id())->first();
        return view('memberedit')->with('user', $user);
    }

    public function memberStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|max:255',
            'phone' => 'required:max:15'
        ]);

        $user = User::find(Auth::id());
        $user->email = $request->email;
        $user->name = $request->name;
        $user->user_phone = $request->phone;

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($user->save()) {
            alert()->success('Edit Success', 'Edited successfully');
            return back();
        } else {

            alert()->error('Error Editing', 'Could not edit');
            return back();
        }
    }
}
