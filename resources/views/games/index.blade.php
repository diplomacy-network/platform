@extends('layouts.app')

@section('content')
    @php
        $joinable = App\Game::joinable()->paginate(15, ['*'], 'joinable');
        $rest = App\Game::where('status', 'orders')->paginate(15, ['*'], 'rest')
    @endphp

<h3>Joinable Games</h3>
    @include('games.components.list', ['games' => $joinable])

    <h3>Rest Games</h3>
    @include('games.components.list', ['games' => $rest])
@endsection