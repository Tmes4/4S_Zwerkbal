@extends('layout')

@section('nav')
<nav>
    <a href="/">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players" class="active">Spelers</a>
    <a href="/upcoming">UpComing</a>
</nav>
@endsection

@section('content')
<h1>Maak een nieuwe speler</h1>
<form action="{{ route('players.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="team_id">Selecteer een team:</label>
        <select name="team_id" id="team_id" class="form-control" required>
            <option value="">--Select--</option>
            @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->teamName }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="type">Type:</label>
        <select name="type" id="type" class="form-control" required>
            <option value="">--Select--</option>
            <option value="chaser">Chaser</option>
            <option value="keeper">Keeper</option>
            <option value="beater">Beater</option>
            <option value="seeker">Seeker</option>
        </select>
    </div>

    <div class="form-group">
        <label for="name">Naam:</label>
        <input type="text" name="name" id="name" class="form-control" required placeholder="Speler naam">
    </div>

    <button type="submit" class="btn btn-primary">Maak Speler</button>
</form>
@endsection
