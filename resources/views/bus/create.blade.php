@extends('layouts.app')
@include('partials.nav')

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
input[type='text']{
    border: solid lightgreen 4px; 
}
    </style>

</head>
<body style="color: lightgreen">
<div class="container">
    <h1 style="color:lightgreen">Bus Create</h1>
<hr>
<hr>
{!! Form :: open(['url'=>'bus','files' => true]) !!}

<div class="form-group"style="border: red 4px lightgreen">
    {!! Form::label('busnumber', 'Bus Number', ['class' => 'control-label']) !!}
    {!! Form::text('busnumber', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('companyname', 'Company Name', ['class' => 'control-label']) !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sourceterminal', 'Source Terminal', ['class' => 'control-label']) !!}
    {!! Form::text('sourceterminal', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('destinationterminal', 'Destination Terminal', ['class' => 'control-label']) !!}
    {!! Form::text('destinationterminal', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
             
    {!! Form::label('farelist','Fare List') !!}
    {!! Form::file('farelist',null,['class' => 'form-controle']) !!}
             
</div>

<div class = "form-group">

    {!! Form :: label('starttime','Start Time') !!}
    {!! Form :: input('date','starttime',date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="">hello this is ali raza</div>


<div class = "form-group">

    {!! Form :: label('endtime','End Time') !!}
    {!! Form :: input('date','endtime',date('Y-m-d'),['class' => 'form-control']) !!}
</div>





<div class = "form-group">

    {!! Form :: label('published_at','Published On :') !!}
    {!! Form :: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>



{!! Form::submit('Create Bus', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



</div>
</body>
</html>
