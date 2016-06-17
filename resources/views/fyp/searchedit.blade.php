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
	<h1 style="color:lightgreen">search create</h1>
<hr>
{!! Form::open([
    'url'=>'tasks','files' => true
]) !!}

<div class="form-group"style="border: red 4px lightgreen">
    {!! Form::label('stop_id', 'stop_id:', ['class' => 'control-label']) !!}
    {!! Form::number('stop_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('bus_id', 'bus_id:', ['class' => 'control-label']) !!}
    {!! Form::number('bus_id', null, ['class' => 'form-control']) !!}
</div>

             
<div class="form-group">
    {!! Form::label('user_id', 'user_id:', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">

    {!! Form :: label('published_at','Published On :') !!}
    {!! Form :: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>



{!! Form::submit('Create Article', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



</div>
</body>
</html>
