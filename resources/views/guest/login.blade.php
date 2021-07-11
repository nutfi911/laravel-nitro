@extends('guest.layout')
@section('title','Вход')
@section('content')

<!-- Jumbotron Header -->
<br>
<br>
<!-- Page Features -->
<div class="row container-fluid align-self-center">
    <div class="col d-flex justify-content-center">

        <div class="card col-md-4">
            <br>
            <a href="{{route('register')}}" class="btn btn-warning">Регистрация, ако нямате акаунт</a>
            <br>
            <form action="{{route('loginAttempt')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Въведете E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Електронна поща">

                </div>
                <div class="form-group">
                    <label>Въведете парола</label>
                    <input type="password" name="password" class="form-control" placeholder="Парола">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="rememberme" class="form-check-input">
                    <label class="form-check-label">Запомни ме</label>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Вход</button>

                </div>

                <br>
            </form>
        </div>
    </div>






</div>
<br>
<br>
<!-- /.row -->


@endsection