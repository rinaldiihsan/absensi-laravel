<!-- resources/views/siswa.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa</h1>

    <!-- Form untuk menambahkan data siswa -->
    <form method="POST" action="/guru">
        @csrf
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" required><br>

        <label for="nama_guru">Nama Guru:</label>
        <input type="text" name="nama_guru" id="nama_guru" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Tambah</button>
    </form>


    <!-- Tabel untuk menampilkan data siswa -->
    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $guru)
        <tr>
            <td>{{ $guru['nip'] }}</td>
            <td>{{ $guru['nama_guru'] }}</td>
            <td>{{ $guru['password'] }}</td>
            <td>
                <!-- Form untuk mengupdate data guru -->
                <form method="POST" action="/guru/{{ $guru['nip'] }} ">
                    @csrf
                    @method('PUT')
                    <label for="nama_guru">Nama Guru:</label>
                    <input type="text" name="nama_guru" id="nama_guru" value="{{ $guru['nama_guru'] }}" required>
                    <br />
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="{{ $guru['password'] }}" required>
                    <br />
                    <button type="submit">Update</button>
                </form>

                <!-- Form untuk menghapus data siswa -->
                <form method="POST" action="/guru/{{ $guru['nip'] }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script>
        function autoReloadAfterSubmit() {
            const form = document.querySelector('form[action="/guru"]');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah submit form standar
                const formData = new FormData(form);

                // Kirim data ke API menggunakan HTTP POST
                fetch('/guru', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Tambahkan token CSRF ke header
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            // Bersihkan input form setelah berhasil submit
                            form.reset();
                            // Tampilkan alert untuk memberitahukan bahwa data berhasil ditambahkan
                            alert('Data berhasil ditambahkan!');
                            // Muat ulang halaman setelah berhasil submit
                            location.reload();
                        } else {
                            console.error('Error:', response);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        }

        window.onload = function() {
            autoReloadAfterSubmit(); // Panggil fungsi autoReloadAfterSubmit saat halaman selesai dimuat
        };
    </script>
</body>

</html>