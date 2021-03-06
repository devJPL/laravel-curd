@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col">
        <span class="page-title">[[model_uc]]</span> &#187; view 
    </div>   
</div>
@endsection

@section('content')

<div class="bvscard">
    <div class="bvscard-body">
        [[foreach:columns]]           
            [[if:i.type !='id']]  
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="[[i.name]]">[[i.display]]</label>
                    <input type="text" name="[[i.name]]" id="[[i.name]]" class="form-control" value="{{$model->[[i.name]]}}" readonly="readonly">
                </div>                
            </div>
            [[endif]]
            [[endforeach]]        
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">                    
                    <a class="btn btn-dark" href="{{ url('/[[route_path]]') }}"><i
                            class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
    </div>
</div>
@endsection