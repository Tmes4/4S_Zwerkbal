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

<h1>Teams</h1>
<table class="table">
    <tr>
        <th>Team</th>
        <th>Soort</th>
        <th>Herkomst</th>
        <th>Spelers</th>
    </tr>
    @foreach($teams as $team)
    <tr>
        <td>{{ $team->teamName }}</td>
        <td>{{ ucwords($team->type) }}</td>
        <td>{{ $team->origin }}</td>
        <td>
        @foreach($team->players->sortBy('type')->groupBy('type') as $type => $playersOfType)
            <strong> {{ ucwords($type) }}</strong>:
            <ul>
                @foreach($playersOfType as $player)
                <li>{{ $player->name }}</li>
                @endforeach
            </ul>
            @endforeach
        </td>
    </tr>
    @endforeach
</table>

@endsection

<!-- hier komt een lijst van teams -->
