@extends('layout')

@section('nav')
<nav>
    <a href="/">Home</a>
    <a href="/tournaments" class="active">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
    <a href="/upcoming">UpComing</a>
</nav>
@endsection

@section('content')
    <h1>Nieuw toernooi</h1>
	<form action="{{ route('tournaments.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Naam toernooi</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
