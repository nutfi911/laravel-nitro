@extends('layouts.master')
@section('title','Всички автомобили')
@section('content')

<!-- Jumbotron Header -->

<br>
<br>
<div class="row text-center">
    <div class="col md-2">
        {{ $cars->links() }}
    </div>
</div>
<br>
<!-- Page Features -->
<div class="row text-center">
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
                <li class="list-group-item"><img src="/gear-stick.png" width="24"> {{$item->isAutomatic ? ' Автоматична' : ' Ръчна'}}

                </li>
                <li class="list-group-item"><img src="/fuel.png"> {{$item->isElectric ? ' Електрическа' : 'Бензин'}}</li>
                <li class="list-group-item"><img src="/price-tag.png"> {{$item->dailyPrice }} Лв/ден</li>
                <li class="list-group-item"><img src="/price-tag.png"> {{$item->dailyPrice*30 - ($item->dailyPrice*30*0.40)}} Лв/Месец(-40%)</li>
            </ul>
            <div class="card-footer">
                <a href="{{route('rent',['id' => $item->id])}}" class="btn btn-success">Наеми</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class=" row text-center">
    <div class="col md-2">
        {{ $cars->links() }}
    </div>
</div>
<br>
<br>


@endsection