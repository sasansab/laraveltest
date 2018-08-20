@extends('layouts.layouts')

@section('content')


    {!! Form::open(['method' => "POST" , 'action'=>'RegisterMotor@store','files'=>true ]) !!}

        <div class="form-group">
            {!! Form::label('make' , 'Make:') !!}

            {!! Form::text('Make',null,['class' => 'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('model' , 'Model:') !!}

        {!! Form::text('model',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('color' , 'Color:') !!}

        {!! Form::text('color',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('weight' , 'Weight:') !!}

        {!! Form::text('weight',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price' , 'Price:') !!}

        {!! Form::text('price',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('path' , 'Image:') !!}

        {!! Form::file('path',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">


        {!! Form::submit('Register',null,['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}





    @endsection

