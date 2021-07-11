@extends('admin.layouts.master')
@section('title','Списък с автомобили')
@section('content')
<div class="container-fluid">
    <br>
    <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Коли
            <a href="{{route('backend.deletedCarList')}}" class="btn btn-warning float-lg-right">Деактивирани коли</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Снимка</th>
                            <th width="100">Марка</th>
                            <th width="100">Модел</th>
                            <th width="300">Детайли</th>
                            <th width="30">Места</th>
                            <th>Скоростна кутия</th>
                            <th width="100">Гориво</th>
                            <th width="100">Цена/Ден</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Снимка</th>
                            <th width="100">Марка</th>
                            <th width="100">Модел</th>
                            <th width="300">Детайли</th>
                            <th width="30">Места</th>
                            <th>Скоростна кутия</th>
                            <th width="100">Гориво</th>
                            <th width="100">Цена/Ден</th>
                            <th>Действие</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data['cars'] as $item)
                        <tr>
                            <td><img src="/images/{{$item->image}}" width="50"></td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->model}}</td>
                            <td>{{$item->details}}</td>
                            <td>{{$item->seats}}</td>
                            <td>{{$item->isAutomatic==1 ? "Автоматична" : "Ръчна"}}</td>
                            <td>{{$item->isElectric==1 ? "Електрическа" : "Бензин"}}</td>
                            <td>{{$item->dailyPrice}}</td>
                            <td><a href="{{route('backend.carEdit',['id' => $item->id])}}" class="btn btn-outline-success"> Редактирай</a> <a href="{{route('backend.carPassive',['id' => $item->id])}}" class="btn btn-outline-warning">Деактивирай</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('#table_1').dataTable({
        "responsive": true,
        "dom": '<"html5buttons"B>lTfgitp',
        "language": {
            "emptyTable": "Няма данни за показване.",
            "processing": "Данните се зареждат",
            "sDecimal": ".",
            "sInfo": "От общо _TOTAL_ се показват _START_ - _END_",
            "sInfoFiltered": "( От общо _MAX_ са намерени:)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Покажи _MENU_ на страница",
            "sLoadingRecords": "Зарежда се...",
            "sSearch": "Търси:",
            "sZeroRecords": "Няма резултат",
            "oPaginate": {
                "sFirst": "Първи",
                "sLast": "Последен",
                "sNext": "Следващ",
                "sPrevious": "Предишен"
            },
            "oAria": {
                "sSortAscending": ": Входящо соритране",
                "sSortDescending": ": Низходящо сортиране"
            },
            "select": {
                "rows": {
                    "_": "%d избрани",
                    "0": "",
                    "1": "1 избран"
                }
            }
        }
    });
</script>
@endsection