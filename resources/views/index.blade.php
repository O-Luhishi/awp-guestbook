<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" />
<table class="table is-striped is-hoverable">
    <thead>
    <th> User</th>
    <th> Comment</th>
    <th> Likes</th>
    </thead>
    <tbody>
    @foreach ($comments as $c)
        <tr>
            <td>{{ $c -> name }}</td>
            <td>{{ $c -> comment }}</td>
            <td>{{ $c -> likes }}</td>
        </tr>    @endforeach  </tbody>
</table>
</html>