@extends('admin.layouts.master')
@section('title','Редактирай колата')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Редактирай колата</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-car mr-1"></i>
            Редактирай колата
        </div>
        <div class="card-body">
            <form action="{{route('backend.carUpdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Снимка</label>
                <div class="form-group">

                    <img src="/images/{{$car->image}}" width="150">
                </div>
                <div class="form-group">
                    <label>Марка</label>
                    <input type="text" name="brand" class="form-control" value="{{$car->brand}}" placeholder="Aracın Markasını Giriniz">
                </div>
                <div class="form-group">
                    <label>Модел</label>
                    <input type="text" name="model" class="form-control" value="{{$car->model}}" placeholder="Aracın Modelini Giriniz">
                </div>
                <div class="form-group">
                    <label>Детайли</label>
                    <textarea name="detail" class="form-control" placeholder="Aracın Açıklamasını Giriniz">{{$car->details}}</textarea>
                </div>
                <div class="form-group">
                    <label>Брой места</label>
                    <input type="number" name="seats" class="form-control" value="{{$car->seats}}">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="automatic" {{$car->isAutomatic ? 'checked' : ''}}>
                    <label class="form-check-label">Автоматична</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="diesel" {{$car->isElectric ? 'checked' : ''}}>
                    <label class="form-check-label">Електрическа</label>
                </div>
                <div class="form-group">
                    <label>Цена/Ден</label>
                    <input type="number" name="dailyprice" class="form-control" value="{{$car->dailyPrice}}">
                </div>
                <div class="form-group">
                    <label>Качете снимка</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <input name="carid" type="hidden" value="{{$car->id}}">
                <button type="submit" class="btn btn-success">Редактирай</button>
            </form>
        </div>
    </div>
</div>

@endsection