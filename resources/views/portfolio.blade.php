
@extends('layout')


@section('title','Portfolio') 


@section('content')
	<h1>Portfolio</h1>


	<uL>
		@forelse($portfolio as $portfolioItem)
			
			<li>{{ $portfolioItem['title']}} <pre>{{ $loop->first  ? 'Es el  primero' : '' }} </pre></li>

		@empty
	
			<li>NO HAY PROYECTOS QUE VER</li>

		@endforelse
	</uL>

@endsection

