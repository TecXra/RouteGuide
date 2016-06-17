@extends('layouts.app')

<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
input[type='text']{
	border: solid lightgreen 4px; 
}
	</style>
}
</head>
<body style="color: lightgreen">
@include('partials.nav')
<div class="container">
	<h1 style="color:lightgreen">Route Create</h1>
<hr>
{!! Form::open([
    'url'=>'tasks','files' => true
]) !!}

<div class="form-group"style="border: red 4px lightgreen">
    {!! Form::label('bus_id', 'Bus Id:', ['class' => 'control-label']) !!}
    {!! Form::number('bus_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stop_id', 'Stop Id:', ['class' => 'control-label']) !!}
    {!! Form::number('stop_id', null, ['class' => 'form-control']) !!}
</div>

<!--
<div class="form-group">
    {!! Form::label('latitude', 'Latitude:', ['class' => 'control-label']) !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">

    {!! Form :: label('published_at','Published On :') !!}
    {!! Form :: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>


-->

{!! Form::submit('Create Article', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



</div>
</body>
</html>
 'bus_id','stop_id'