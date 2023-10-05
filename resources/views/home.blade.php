@extends('layout')

@section('nav')
<nav>
    <a href="/" class="active">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
    <a href="/upcoming">UpComing</a>
</nav>
@endsection

@section('content')

<h1>Zwerkbal</h1>
<p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam.</p>
<div class="contaier">
    <div class="text-holder">
        <div class="total-tournament">
            <h2>Aantal aankomende toernooien: <br> 5</h2>
        </div>
        <div class="total-teams">
            <h2>Totaal aantal teams: <br> 26</h2>
        </div>

    </div>
    <img src="img/snitch.png" alt="">
</div>
@endsection