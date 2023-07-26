<!DOCTYPE html>
<html>

<head>
    <title>Form Siswa</title>
</head>

<body>
    <h1>Form Siswa</h1>

    <form method="POST" action="{{ url('/admin/siswa') }}">
        @csrf
        <label for="nis">NIS:</label>
        <input type="number" name="nis" id="nis">

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" id="nama_siswa">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <label for="whatsapp">Whatsapp:</label>
        <input type="text" name="whatsapp" id="whatsapp">

        <button type="submit">Simpan</button>
    </form>
</body>

</html>