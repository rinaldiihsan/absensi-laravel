<!DOCTYPE html>
<html>

<head>
    <title>Data dari API</title>
</head>

<body>
    <h1>Data dari API</h1>

    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Password</th>
                <th>Whatsapp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data2['data'] as $siswa)
            <tr>
                <td>{{ $siswa['nis'] }}</td>
                <td>{{ $siswa['nama_siswa'] }}</td>
                <td>{{ $siswa['password'] }}</td>
                <td>{{ $siswa['whatsapp'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Formulir Pendaftaran Siswa</h1>

    <form id="formSiswa">
        @csrf
        <label for="nis">NIS:</label>
        <input type="number" name="nis" id="nis" required>

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" id="nama_siswa" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>