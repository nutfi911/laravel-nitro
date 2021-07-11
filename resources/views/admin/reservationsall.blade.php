@extends('admin.layouts.master')
@section('title','Резервации')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Резеравции</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Всички резеравции
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Начална дата</th>
                            <th>Крайна дата</th>
                            <th>Кола</th>
                            <th>Клиент</th>
                            <th>Сума</th>
                            <th>Обработка</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Начална дата</th>
                            <th>Крайна дата</th>
                            <th>Кола</th>
                            <th>Клиент</th>
                            <th>Сума</th>
                            <th>Обработка</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($reservations as $item)
                        <tr>
                            <td>{{date('d-m-Y H:i:s', strtotime($item->reservationStartDate))}}</td>
                            <td>{{date('d-m-Y H:i:s', strtotime($item->reservationEndDate))}}</td>
                            <td>{{$item->brand}} {{$item->model}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            @if(!$item->isConfirmed)
                            <td><a class="btn btn-outline-success" href="{{route('backend.reservation',['id'=> $item->resid])}}">Одобри</a></td>
                            @else
                            <td><img src="/verified.png"> Одобрена </td>
                            @endif
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