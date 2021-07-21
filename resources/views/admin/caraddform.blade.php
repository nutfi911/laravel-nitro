@extends('admin.layouts.master')
@section('title','Добави кола')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Добави кола</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-car mr-1"></i>
            Добави кола
        </div>
        <div class="card-body">
            <form action="{{route('backend.carStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Марка</label>
                    <input type="text" name="brand" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Модел</label>
                    <input type="text" name="model" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Детайли</label>
                    <textarea name="detail" class="form-control" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Брой места</label>
                    <input type="number" min="1" max="12" step="1" name="seats" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="automatic">
                    <label class="form-check-label">Автоматична</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="electric">
                    <label class="form-check-label">Електрическа</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Цена за ден</label>
                    <input type="number" name="dailyprice" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Качете изображение</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-outline-success">Създай нов автомобил</button>
            </form>
        </div>
    </div>
</div>

@endsection