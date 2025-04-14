<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add student</h1>
    <form action="/groups/{{ $group }}/students" method="post">
        @csrf
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="name" placeholder="name">
        <input type="submit" value="create">
    </form>
    <a href="/groups/{{ $group }}">To student list</a>
</body>
</html>