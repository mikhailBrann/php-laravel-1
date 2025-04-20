<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User is auth</title>
</head>
<body>
    <h1>User info</h1>
    <ul>
        <li>ID: {{ $auth->id }}</li>
        <li>Name: {{ $auth->name }}</li>
        <li>Email: {{ $auth->email }}</li>
    </ul>
    <a href="/">Back</a>
</body>
</html>