@if ($game->isMember())
{{ Form::open(['url' => 'member.store']) }}
    {{ Form::submit('Join') }}
{{ Form::close() }}
@elseif(2 == 2)
    Hallo2  
@endif
