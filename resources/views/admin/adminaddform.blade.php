@extends('admin.layouts.master')
@section('title','Управители')
@section('content')
@php
if($errors->any()){
alert()->error('Грешка','Грешка');
}

@endphp


<div class="container-fluid">
    <h1 class="mt-4"> {{$admin? 'Редакция' : 'Добавяне'}} на управител</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-cog"></i>
            {{$admin? 'Редакция' : 'Добавяне'}} на управител
        </div>
        <div class="card-body">
            <form action="{{$admin ? route('backend.adminUpdate') : route('backend.adminStore')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{$admin? $admin->email : "" }}" placeholder="Email адрес">
                </div>
                <div class="form-group">
                    <label>Парола</label>
                    <input type="password" name="password" class="form-control" placeholder="Парола">
                </div>
                <input type="hidden" name="id" class="form-control" value="{{$admin? $admin->id : ''}}">

                <button type="submit" class="btn btn-outline-success">{{ $admin ? "Редактирай" : "Добави" }}</button>
            </form>
        </div>
    </div>
</div>

@endsection