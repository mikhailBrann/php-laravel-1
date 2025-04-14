<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>
</head>
<body>
    <h1>Groups list</h1>
    <ul>
        @foreach ($groups as $group)
        <li>
            <a href="/groups/{{ $group->id }}">{{ $group->title }}</a>
        </li>
        @endforeach
    </ul>
    <a href="/groups/create">Add group</a>
</body>
</html>