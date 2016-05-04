@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center" style="margin-top: -20px">
                <h3>Create Product</h3>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(array('url'=>'product')) !!}
                {!! Form::label('name', 'Product Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, array('class'=> 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null, array('class'=> 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                <div style="text-align: right">
                    {!! Form::submit('Save', array('class' => 'btn btn-primary', 'style' => 'margin-top: 10px;')) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection