@extends('app')

@section('content')
	
	<h1>{{ $item->title }}</h1>

	<article>

		{{ $item->description }}

	</article>

@stop 