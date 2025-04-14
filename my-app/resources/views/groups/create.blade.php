<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create group</title>
</head>
<body>
    <h1>Create group</h1>
    <form action="/groups" method="post">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="date" name="start_from" placeholder="start_from">
        <input type="submit" value="create">
    </form>
    <a href="/groups">To groups list</a>
</body>
</html>