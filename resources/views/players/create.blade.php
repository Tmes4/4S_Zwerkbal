@extends('layout')

@section('nav')
<nav>
    <a href="/">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams" class="active">Teams</a>
    <a href="/players">Spelers</a>
    <a href="/upcoming">UpComing</a>
</nav>
@endsection

@section('content')
    <h1>Nieuwe Speler</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam</label>
            <select name="name">
            </select>
        </div>
    </form>
@endsection
