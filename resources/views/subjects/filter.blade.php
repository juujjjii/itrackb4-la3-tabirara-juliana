<!DOCTYPE html>
<html>
<head>
    <title>My Subjects List</title>
</head>
<body>

<h1>Subject Filter</h1>
<p>Prepared by: Juliana Tabirara</p>
<p><strong>{{ $message }}</strong></p>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Title</th>
            <th>Units</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($subjects as $subj)
        <tr>
            <td>{{ $subj['id'] }}</td>
            <td>
                <a href="{{ route('subjects.show', $subj['id']) }}">
                    {{ $subj['code'] }}
                </a>
            </td>
            <td>{{ $subj['title'] }}</td>
            <td>{{ $subj['units'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<p><a href="{{ route('subjects.index') }}">← Back to Subject List</a></p>

</body>
</html>