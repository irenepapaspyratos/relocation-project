<table class="table">
    <thead>
        <tr>
            @foreach ($columns as $column)
            <th>{{$column}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($userData as $user)
        <tr>
            @foreach ($columns as $column)
            <td>{{ $user->$column }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
