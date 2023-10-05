@extends('layout')

@section('nav')
<nav>
    <a href="/">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
    <a href="/upcoming" class="actvie">UpComing</a>

</nav>
@endsection

@section('content')

<h1>Eerstvolgende toernooi</h1>
<p>Kom ook zwerkbal spelen op het volgende toernooi!</p>
<div class="contaier">
    <div class="text-holder">
        <div class="total-tournament">
            <h2 >{{ $tournaments->name }}</h2>
            <p>{{ $tournaments->date }} vanaf {{ $tournaments->start_time }}</p>
        </div>

    </div>
    <img src="img/snitch.png" alt="">
</div>
@endsection

