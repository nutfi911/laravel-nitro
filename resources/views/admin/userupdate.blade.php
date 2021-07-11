@extends('admin.layouts.master')
@section('title','Редактирай клиент')
@section('content')
@php
if($errors->any()){
alert()->error('Грешка','Грешка');
}

@endphp
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container-fluid">
    <h1 class="mt-4">Редактирай клиент</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-cog"></i>
            Редактирай клиент
        </div>
        <div class="card-body">
            <form action="{{route('backend.userupdate',['id' => $user->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Име</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" name="user_phone" class="form-control" value="{{$user->user_phone}}">
                </div>

                <button type="submit" class="btn btn-outline-success">Редактирай</button>
            </form>
        </div>
    </div>
</div>

@endsection