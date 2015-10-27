@extends('app')

@section('content')

	<h1>Add a New Item</h1>

	<hr/>

	{!! Form::open(['url'=>'items']) !!}

		<div class="form-group">

			{!! Form::label('title', 'Title:') !!}

			{!! Form::text('title', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('Description', 'Description:') !!}

			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

		</div>


		<div class="form-group">

			{!! Form::submit('Add Item', ['class' => 'btn btn-primary form-control']) !!}

		</div>

	{!! Form::close() !!}

	@if ($errors->any())

		<ul class="alert alert-danger">

			@foreach ($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach

		</ul>

	@endif

@stop