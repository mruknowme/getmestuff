<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Change</title>
</head>
<body>
<h1>Hello, </h1>

<p>
    We just need you to <a href='{{ url("home/confirm/{$token}") }}'>confirm your email address</a> real quick!
</p>
</body>
</html>