@extends('layouts.app')

@section('title')

<div class="row">
    <div class="col">
        <span class="page-title">[[model_uc]]</span> &#187; List
    </div>
    <div class="col text-right"> <button onclick="location.href='{{url('[[route_path]]/create')}}'"
            class="btn-primary">New </button>
    </div>
</div>
@endsection

@section('content')

<div class="bvscard">
    <div class="bvscard-body">
        <table class="table table-striped" id="thegrid">
            <thead>
                <tr>
                    <th><input type="checkbox" name="select_all" value="all" id="select-all"></th>
                    [[foreach:columns]]
                    <th>[[i.display]]</th>
                    [[endforeach]]
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <a href="{{url('[[route_path]]/create')}}" class="btn btn-primary" role="button">Add [[model_singular]]</a>
</div>
</div>
@endsection



@section('scripts')
<script type="text/javascript">
var theGrid = null;
$(document).ready(function() {
    theGrid = $('#thegrid').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "responsive": true,
        "ajax": "{{url('[[route_path]]/viewdata')}}",
        "dom": "<'row'<'col-md-6'i><'col-md-6'f>> rt<'row'<'col-md-4'l><'col-md-8'p>>",
        "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "render": function(data, type, row) {
                    return '<input type="checkbox" class="SelectAllCheck" name="id[]" value="' +
                        data + '">';
                },
                "targets": 0
            },
            {
                "render": function(data, type, row) {
                    return '<a href="{{ url('/[[route_path]]') }}/' + row[0] + '">' + data + '</a>';
                },
                "targets": 1
            },
        ]
    });

    $('#select-all').on('click', function() {
        $('.SelectAllCheck').prop('checked', this.checked);
    });
});
</script>
@endsection