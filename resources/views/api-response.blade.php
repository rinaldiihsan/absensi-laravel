<!DOCTYPE html>
<html>

<head>
    <title>API Response</title>
</head>

<body>
    <h1>API Response</h1>

    @if(isset($data['data']))
    <ul>
        @foreach($data['data'] as $item)
        <li>ID Admin: {{ $item['id_admin'] }}</li>
        <li>Username: {{ $item['username'] }}</li>
        <li>Password: {{ $item['password'] }}</li>
        @endforeach
    </ul>
    @else
    <p>No data available</p>
    @endif
    <form action=""></form>

</body>

</html>