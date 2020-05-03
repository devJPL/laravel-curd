@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col">
        <span class="page-title">[[model_uc]]</span> &#187; Create 
    </div>   
</div>
@endsection

@section('content')


<div class="bvscard">
    <div class="bvscard-body">        
        <form action="{{ route('[[route_path]].store') }}" method="POST">
            {{ csrf_field() }}

            [[foreach:columns]]
            [[if:i.type !='id']]  
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="[[i.name]]">[[i.display]]</label>
                    <input type="text" name="[[i.name]]" id="[[i.name]]" class="form-control" value="">
                </div>                
            </div>
            [[endif]]
            [[endforeach]]

            <div class="form-row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <a class="btn btn-dark" href="{{ url('/[[route_path]]') }}"><i
                            class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>           
        </form>

    </div>
</div>
@endsection