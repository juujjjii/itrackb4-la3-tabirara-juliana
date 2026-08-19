<!DOCTYPE html>
<html>
<head>
    <title>My Subjects List</title>
</head>
<body>
    <h1>My Subjects List</h1>
    <p>Prepared by: Juliana Tabirara</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Code</th>
            <th>Title</th>
            <th>Units</th>
        </tr>
 
        @foreach ($subjects as $subjects)
            <tr>
                <td>{{ $subjects['code'] }}</td>
                <td>{{ $subjects['title'] }}</td>
                <td>{{ $subjects['units'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
