<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student info</title>
</head>
<body>
    <h1>Student info</h1>
    <h2>Group: {{ $group->title }} (ID: {{ $group->id }})</h2>
    <h2>Student</h2>
    <ul>
        <li>id: {{ $student->id }}</li>
        <li>name: {{ $student->name }}</li>
        <li>surname: {{ $student->surname }}</li>
    </ul>
    <a href="/groups/{{ $group->id }}">To student list</a>
</body>
</html>