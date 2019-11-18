<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @yield ('page_title', 'Guestbook')
    </title>
    <!-- Stylesheets here -->
    <link rel="icon" type="image/png" href="{{ asset ('images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />
    <link rel="stylesheet" href="{{ asset ('css/guestbook.css') }}" />
</head>
<body>
<div class="container">
    <h1 class="title">
        @yield ('page_heading', 'Guestbook')
    </h1>
        @yield ('content')
</div>
<!-- Scripts here -->
</body>
</html>