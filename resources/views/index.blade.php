@extends('layouts.master')
@section('title','Начало')
@section('content')

<!-- Jumbotron Header -->

<header class="jumbotron my-4">
    <h1 class="display-3">Добре дошли!</h1>
    <p class="lead">Може да разгледате нашия каталог и да изпратите заявка за наем на желания от Вас автомобил.</p>
    <a href="{{route('listAll')}}" class="btn btn-success">Всички автомобили</a>
</header>




@endsection