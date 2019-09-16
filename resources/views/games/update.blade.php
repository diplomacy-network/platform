@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (isset($game))
{{ Form::model($game, [
    'route' => ['games.update', $game->id],
    'method'=>'put'
    ]) }}
@else
{{  Form::open(['route' => 'games.store']) }}
@endif
<div>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $game->title ?? old('title')) }}
</div>
<div>
    {{ Form::label('join_phase_length', 'Length of Join Phase (in days)') }}
    {{ Form::selectRange('join_phase_length', 1, 10) }}
</div>
<div>
    {{ Form::label('variant', 'Variant') }}
    {{ Form::select('variant',  $variants) }}
</div>
<div>
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', $game->description ?? old('description')) }}
</div>
<div>
    {{ Form::submit('Submit') }}
</div>




{{ Form::close() }}
@endsection