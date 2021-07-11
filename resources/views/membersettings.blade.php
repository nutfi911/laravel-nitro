@extends('layouts.master')
@section('title','Müşteri Paneli')
@section('content')

<br>
<br>

<div class="row container-fluid align-self-center">
    <div class="col d-flex justify-content-center">

        <div class="card col-md-12">
            <br>
            <div class="card-header-pills text-right">
                <a href="{{route('memberEdit')}}" class="btn btn-success"> Редактирай потребителски данни</a>
            </div>
            <br>
            <table class=" table">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Кола</th>
                        <th scope="col">Начална дата</th>
                        <th scope="col">Крайна дата</th>
                        <th scope="col">Сума</th>
                        <th scope="col">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $key => $value)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$value->brand . ' ' .$value->model}}</td>
                        <td>{{$value->reservationStartDate}}</td>
                        <td>{{$value->reservationEndDate}}</td>
                        <td>{{$value->price}}</td>
                        @if($value->isConfirmed)
                        <td><img src="verified.png"> Одобрена </td>
                        @else
                        <td><img src="pending.png"> Обработва се </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>



@endsection