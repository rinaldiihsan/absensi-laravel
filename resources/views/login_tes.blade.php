<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <h1>Form Login</h1>
    <form action="/login_tes" method="POST" autocomplete="off">
        @csrf <!-- Ini untuk menghindari serangan CSRF -->
        <label for="nis">NIS:</label>
        <input type="text" id="nis" name="nis" required>
        <br>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>