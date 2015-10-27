@extends('app')

@section('content')
	
	<h1>Items</h1>
	<p style="float:right; font-size:30px;">
		<a class="btn-link" href="{{ action('ItemsController@create') }}">Add Item</a>
		<br>
		<a class="btn-link" href="{{ url('/auth/logout') }}">Log out</a>
	</p>

	@foreach ($items as $item)

		<article>

			<h2>
				<a href="{{ action('ItemsController@show', [$item->id])  }}">{{ $item->title }}</a>
			</h2>

			<div class="body">

				{{ date('F d, Y h:m:a', strtotime($item->created_at)) }}

			</div>

		</article>

	@endforeach

@stop 