
<h1>Create New Article</h1>
<hr>
{!! Form::open([
    'url'=>'tasks','files' => true
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
             
    {!! Form::label('image','Image:') !!}
    {!! Form::file('image',null,['class' => 'form-controle']) !!}
             
</div>

<div class = "form-group">

    {!! Form :: label('published_at','Published On :') !!}
    {!! Form :: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>



{!! Form::submit('Create Article', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

