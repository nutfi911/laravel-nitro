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
                    <label for="exampleInputEmail1">Marka</label>
                    <input type="text" name="brand" class="form-control" placeholder="Aracın Markasını Giriniz">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Model</label>
                    <input type="text" name="model" class="form-control" placeholder="Aracın Modelini Giriniz">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Detay</label>
                    <textarea name="detail" class="form-control" placeholder="Aracın Açıklamasını Giriniz"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Места Sayısı Giriniz</label>
                    <input type="number" name="seats" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="automatic">
                    <label class="form-check-label">Автоматична</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="diesel">
                    <label class="form-check-label">Електрическа</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Günlük Fiyat</label>
                    <input type="number" name="dailyprice" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Görsel yükleyiniz</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-success">Oluştur</button>
            </form>
        </div>
    </div>
</div>

@endsection