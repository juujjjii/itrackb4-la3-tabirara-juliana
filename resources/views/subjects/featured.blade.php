<!DOCTYPE html>
<html>
<head>
    <title>My Subjects List</title>
</head>
<body>

<h1>Featured Subject</h1>
<h2>{{ $featured['title'] }}</h2>
<ul>
    <li><strong>ID:</strong> {{ $featured['id'] }}</li>
    <li><strong>Code:</strong> {{ $featured['code'] }}</li>
    <li><strong>Title:</strong> {{ $featured['title'] }}</li>
    <li><strong>Units:</strong> {{ $featured['units'] }}</li>
</ul>

<p>Juliana Tabirara</p>
<p><a href="{{ route('subjects.index') }}">← Back to Subject List</a></p>

</body>
</html>