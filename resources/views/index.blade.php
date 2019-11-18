<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guestbook</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset ('images/favicon.png') }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />

    <link rel="stylesheet" href="{{ asset ('css/guestbook.css') }}" />

</head>
<body>

<div class="container main-table">
    <div class="box">

        <h1 class="title">Guestbook Comments</h1>

        @if (count ($comments) > 0)
            <table class="table is-striped is-hoverable">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Likes</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach ($comments as $c)

                    <tr>
                        <td>{{ $c -> name }}</td>
                        <td>{{ $c -> comment }}</td>
                        <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                        <td>{{ $c -> likes }}</td>
                        <td><a class="button"
                               href="/comment/{{ $c -> id }}/like/"><ion-icon name="thumbs-up"></ion-icon>
                            </a>
                        </td>
                        <td><a class="button"
                               href="/comment/{{ $c -> id }}/dislike/"><ion-icon name="thumbs-down"></ion-icon>
                            </a>
                        </td>
                        <td>  <a class="button"
                                 href="/comment/{{ $c -> id }}/"><ion-icon name="eye"></ion-icon>  </a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            {{ $comments -> links () }}

        @else
            <div class="notification is-info">
                <p>
                    The Guestbook is empty. Why not add a comment?
                </p>
            </div>
        @endif
    </div>

</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>