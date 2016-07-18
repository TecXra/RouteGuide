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
	<h1 style="color:lightgreen">Stop Create</h1>
<hr>
{!! Form::open([
    'url'=>'stop'
]) !!}

<div class="form-group"style="border: red 4px lightgreen">
    {!! Form::label('stopname', 'Stop Name:', ['class' => 'control-label']) !!}
    {!! Form::text('stopname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('longitude', 'Longitude:', ['class' => 'control-label']) !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('latitude', 'Latitude:', ['class' => 'control-label']) !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">

    {!! Form :: label('published_at','Published On :') !!}
    {!! Form :: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>



{!! Form::submit('Create Stop', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



</div>
</body>
</html>
