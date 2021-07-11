<?php

namespace Database\Seeders;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\URL;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'brand' => 'Mercedes',
            'model' => 'G63',
            'details' => 'Ergonomic, fast',
            'seats' => 5,
            'isAutomatic' => 1,
            'isElectric' => 0,
            'dailyPrice' => 160,
            'isActive' => 1,
            'image' => 'g63.png',
        ]);
        Car::create([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'brand' => 'Range Rover',
            'model' => 'Vogue',
            'details' => 'Luxirious, compact',
            'seats' => 5,
            'isAutomatic' => 1,
            'isElectric' => 0,
            'dailyPrice' => 115,
            'isActive' => 1,
            'image' => 'vogue.png',
        ]);
        Car::create([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'brand' => 'Audi',
            'model' => 'E-tron',
            'details' => 'Fast, SUV',
            'seats' => 5,
            'isAutomatic' => 1,
            'isElectric' => 1,
            'dailyPrice' => 60,
            'isActive' => 1,
            'image' => 'e-tron.png',
        ]);
        Car::create([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'brand' => 'Mini Cooper',
            'model' => 'S',
            'details' => 'Compact, beautiful',
            'seats' => 5,
            'isAutomatic' => 0,
            'isElectric' => 0,
            'dailyPrice' => 45,
            'isActive' => 1,
            'image' => 'cooper.png',
        ]);
    }
}
