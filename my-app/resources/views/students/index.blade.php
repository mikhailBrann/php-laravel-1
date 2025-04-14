<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students list</title>
</head>
<body>
    <h1>Students list</h1>
    <div>
        <h2>Group: {{ $group->title }}</h2>
    </div>
    <ul>
        @foreach ($students as $student)
        <li>
            <a href="/groups/{{ $group->id }}/students/{{ $student->id }}">
            {{ $student->surname }} {{ $student->name }}
            </a>
        </li>
        @endforeach
    </ul>
    <a href="/groups/{{ $group->id }}/students/create">Add student</a>
    <a href="/groups">To groups list</a>
</body>
</html>