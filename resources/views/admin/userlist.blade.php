@extends('admin.layouts.master')
@section('title','Клиенти')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Всички клиенти</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Списък с клиенти
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Име</th>
                            <th>E-mail</th>
                            <th>Телефон</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Име</th>
                            <th>E-mail</th>
                            <th>Телефон</th>
                            <th>Действие</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->user_phone}}</td>
                            <td><a class="btn btn-outline-warning" href="{{route('backend.useredit.page',['id' => $item->id])}}">Редактирай</a></td>

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