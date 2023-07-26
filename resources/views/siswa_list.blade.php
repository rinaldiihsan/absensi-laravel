<!DOCTYPE html>
<html>

<head>
    <title>Daftar Siswa</title>
</head>

<body>
    <h1>Daftar Siswa</h1>
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>WhatsApp</th>
        </tr>
        @foreach ($siswaData as $siswa)
        <tr>
            <td>{{ $siswa['nis'] }}</td>
            <td>{{ $siswa['nama_siswa'] }}</td>
            <td>{{ $siswa['whatsapp'] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>