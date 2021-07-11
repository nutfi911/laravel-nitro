@extends('layouts.master')
@section('title','Kirala')
@section('content')

<!-- Jumbotron Header -->


<br>
<br>
<!-- Page Features -->
<div class="row">
    <div class="col-lg-3 col-md-6 mb-4 h-250">
        <div class="card h-200" style="height:600px">
            <img class="card-img-top" src="/images/{{$car['image']}}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$car['brand'] .' '. $car['model']}}</h4>
                <p class="card-text">{{$car['details']}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="/car-seat.png"> {{$car['seats']}} Места</li>
                <li class="list-group-item"><img src="/gear-stick.png" width="24"> {{$car['isAutomatic'] ? ' Автоматична' : ' Ръчна'}}
                </li>
                <li class="list-group-item"><img src="/fuel.png"> {{$car['isElectric'] ? ' Електрическа' : 'Бензин'}}</li>
                <li class="list-group-item"><img src="/price-tag.png"> {{$car['dailyPrice'] }} Лв/ден</li>
                <li class="list-group-item"><img src="/price-tag.png"> {{$car['dailyPrice']*30 - ($car['dailyPrice']*30*0.40)}} Лв/Месец(-40%)</li>
            </ul>

        </div>
    </div>

    <div class="col-lg-9 col-md-6 mb-4 h-250">
        <div class="card h-200">

            <div class="card-body">
                <form action="{{route('rent.request',['id' => $car['id']])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Потребител</label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Телефонен номер</label>
                        <input type="text" class="form-control" value="{{Auth::user()->user_phone}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Брой дни (-40% при 30 дни)</label>
                        <input type="number" min="1" max="30" class="form-control" name="day">
                    </div>

                    <button type="submit" class="btn btn-outline-success">Заяви наем</button>
                </form>
            </div>


        </div>
    </div>


</div>
<!-- /.row -->


@endsection
@section('scripts')

@endsection