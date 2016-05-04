@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center">
                <h3>Create User</h3>
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
            {!! Form::open(array('url'=>'user')) !!}
                {!! Form::label('name', 'User Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, array('class'=> 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', array('class'=> 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                {!! Form::label('repassword', 'Repeat Password') !!}
                {!! Form::password('repassword', array('class'=> 'form-control', 'style' => 'margin-bottom: 10px;')) !!}
                <div style="text-align: right">
                    {!! Form::submit('Save', array('class' => 'btn btn-primary', 'style' => 'margin-top: 10px;')) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection