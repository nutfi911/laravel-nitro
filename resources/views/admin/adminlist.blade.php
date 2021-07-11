@extends('admin.layouts.master')
@section('title','Управители')
@section('content')
<div class="container-fluid">
    <br>
    <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Управители
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Акаунт</th>
                            <th width="150">Действие</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Акаунт</th>
                            <th width="150">Действие</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($admins as $item)
                        <tr>
                            <td>{{$item->email}}</td>

                            <td><a href="{{route('backend.adminAdd',['id' => $item->id])}}" class="btn btn-warning"> Редактирай</a> <a href="{{route('backend.adminDelete',['id' => $item->id])}}" class="btn btn-danger">Премахни</a></td>
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