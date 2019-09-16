<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
        <tr>
            <td>{{ $game->title }}</td>
            <td>{{ $game->status }}</td>
            <td>@include('games.components.join', $game)</td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('components.paginator', ["collection" => $games])
