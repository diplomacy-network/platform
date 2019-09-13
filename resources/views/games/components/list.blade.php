<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
        <tr>
            <td>{{ $game->title }}</td>
            <td>{{ $game->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('components.paginator', ["collection" => $games])
