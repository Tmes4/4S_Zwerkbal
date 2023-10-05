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

    <h1>Spelers</h1>
    <table class="table">
        <tr>
            <th>Team_id</th>
            <th>Soort</th>
            <th>Herkomst</th>
        </tr>

    </table>

@endsection


