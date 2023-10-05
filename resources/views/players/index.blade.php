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
    <a href="{{ route('players.create') }}">+ Nieuw Speler</a>
    <h1>Spelers</h1>
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Type</th>
            <th>Team</th>
        </tr>
        @foreach($players as $Player)
            <tr >
                <td>{{ $Player->name }}</td>
                <td>{{ $Player->type }}</td>
                <td>{{ $Player->team->teamName }}</td>

            </tr>
        @endforeach

    </table>

@endsection


