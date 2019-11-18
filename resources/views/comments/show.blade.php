@extends ('layouts.app')
@section ('page_title')
    Guestbook | Comment from {{ $comment -> name }}
@endsection
@section ('page_heading')
    Comment from {{ $comment -> name }}
@endsection
@section ('content')
    <div class="box">
        <table class="table is-striped">
            <tbody>
            <tr>
                <td>Name:</td>
                <td>{{ $comment -> name }}</td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ $comment -> updated_at }}</td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td>{{ $comment -> comment }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p>
        <a class="button" href="/comments">Back</a>
    </p>
@endsection