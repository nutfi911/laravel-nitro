@extends('guest.layout')
@section('title','Регистрация')
@section('content')

<!-- Jumbotron Header -->
<br>
<br>
<!-- Page Features -->
<div class="row container-fluid align-self-center">
    <div class="col d-flex justify-content-center">

        <div class="card col-md-4 fs-1 ">
            <br>
            <a href="{{route('login')}}" class="btn btn-warning">Вход, ако имате акаунт</a>
            <br>
            <form action="{{route('registerStore')}}" method="post">
                @if ($errors->any())

                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @csrf
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Електронна поща">
                </div>
                <div class="form-group">
                    <label>Парола</label>
                    <input type="password" name="password" class="form-control" placeholder="Паролата Ви">
                </div>
                <div class="form-group">
                    <label>Имена</label>
                    <input type="text" name="name" class="form-control" placeholder="Име, фамилия">
                </div>
                <div class="form-group">
                    <label>Телефонен номер</label>
                    <input type="text" name="phone" class="form-control" placeholder="Телефонен номер">
                </div>


                <div class="form-group">
                    <label>Година на раждане</label>
                    <input type="number" name="birthyear" min="1960" max="2003" class="form-control" placeholder="Година на раждане">
                    <!-- <select class="form-control" name="birthyear">
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                    </select> -->
                </div>

                <br>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Регистрация</button>

                </div>

                <br>
            </form>
        </div>
    </div>




</div>

<!-- /.row -->


@endsection