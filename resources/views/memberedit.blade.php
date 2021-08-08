@extends('layouts.master')
@section('title','Редактирай данни')
@section('content')

<!-- Jumbotron Header -->
<br>
<br>
<!-- Page Features -->
<div class="row container-fluid align-self-center">
    <div class="col d-flex justify-content-center">

        <div class="card col-md-8">
            <br>
            <br>
            <form action="{{route('memberStore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>Парола</label>
                    <input type="password" name="password" class="form-control" placeholder="Нова Парола">
                </div>
                <div class="form-group">
                    <label>Имена</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Телефонен номер</label>
                    <input type="text" name="phone" class="form-control" value="{{$user->user_phone}}">
                </div>

                <br>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Редактирай</button>

                </div>
            </form>



        </div>

    </div>



</div>

<!-- /.row -->


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection