@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col">
        <span class="page-title">[[model_uc]]</span> &#187; Edit 
    </div>   
</div>
@endsection

@section('content')

<div class="bvscard">
    <div class="bvscard-body">              

        <form action="{{ route('[[route_path]].update',$model->id) }}" method="POST">       
        @csrf
         @method('PATCH')

         [[foreach:columns]]          
            [[if:i.type !='id']]  
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="[[i.name]]">[[i.display]]</label>
                    <input type="text" name="[[i.name]]" id="[[i.name]]" class="form-control" value="{{$model->[[i.name]]}}">
                </div>                
            </div>
            [[endif]]
            [[endforeach]]

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Save
                    </button>
                    <a class="btn btn-dark" href="{{ url('/[[route_path]]') }}"><i
                            class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>







@endsection