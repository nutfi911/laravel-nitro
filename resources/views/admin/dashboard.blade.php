@extends('admin.layouts.master')
@section('title','Админ панел')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4 mb-4">Админ панел</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-header">Активни клиенти</div>
                <div class="card-body text-center">
                    <h3>{{$data['userCount']}}</h3>
                </div>


                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('backend.userlist.page')}}">Детайли</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-header">Активни коли</div>
                <div class="card-body text-center">
                    <h3>{{$data['carCount']}}</h3>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('backend.carList')}}">Детайли</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-header">Общ брой резервации</div>
                <div class="card-body text-center">
                    <h3>{{$data['reservationsCount']}}</h3>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('backend.reservation.page')}}">Детайли</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-header">Чакащи резеравции</div>
                <div class="card-body text-center">
                    <h3>{{$data['pendingReservationsCount']}}</h3>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('backend.reservation.page')}}">Детайли</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Резервации чакащи одобрение
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
                    <tbody>
                        @foreach($pendingReservations as $item)
                        <tr>
                            <td>{{date('d-m-Y H:i:s', strtotime($item->reservationStartDate))}}</td>
                            <td>{{date('d-m-Y H:i:s', strtotime($item->reservationEndDate))}}</td>
                            <td>{{$item->brand}} {{$item->model}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td><a class="btn btn-outline-success" href="{{route('backend.reservation',['id'=> $item->resid])}}">Одобри</a></td>
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