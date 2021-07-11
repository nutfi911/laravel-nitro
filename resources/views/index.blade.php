@extends('layouts.master')
@section('title','Anasayfa')
@section('content')

<!-- Jumbotron Header -->

<header class="jumbotron my-4">
    <h1 class="display-3">Добре дошли!</h1>
    <p class="lead">Може да разгледате нашия каталог и да изпратите заявка за наем на желания от Вас автомобил.</p>
    <a href="{{route('listAll')}}" class="btn btn-success">Всички автомобили</a>
</header>

<!-- Page Features -->
<div class=" row text-center">
    @foreach($cars as $item)
    <div class="col-lg-3 col-md-6 mb-4 h-250">
        <div class="card h-200" style="height:600px">
            <img class="card-img-top" src="/images/{{$item->image}}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$item->brand .' '. $item->model}}</h4>
                <p class="card-text">{{$item->details}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="/car-seat.png"> {{$item->seats}} Места</li>
                <li class="list-group-item"><img src="/gear-stick.png" width="24"> {{$item->isAutomatic ? ' Автоматична' : ' Ръчна'}}</li>
                <li class="list-group-item"><img src="/fuel.png"> {{$item->isElectric ? ' Електрическа' : 'Бензин'}}</li>
                <li class="list-group-item"><img src="/price-tag.png"> {{$item->dailyPrice }} Лв/ден</li>
            </ul>
            <div class="card-footer">
                <a href="{{route('rent',['id' => $item->id])}}" class="btn btn-success">Наеми</a>
            </div>
        </div>
    </div>
    @endforeach







</div>
<!-- /.row -->


@endsection