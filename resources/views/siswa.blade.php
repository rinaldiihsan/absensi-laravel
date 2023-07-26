<!-- resources/views/siswa.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa</h1>

    <!-- Form untuk menambahkan data siswa -->
    <form method="POST" action="/siswa">
        @csrf
        <label for="nis">NIS:</label>
        <input type="text" name="nis" id="nis" required><br>

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" id="nama_siswa" required><br>

        <label for="kelas">Kelas:</label>
        <select name="kelas[]" id="kelas" multiple required>
            <optgroup label="TKJ">
                <option value="X-TKJ1">X-TKJ1</option>
                <option value="X-TKJ2">X-TKJ2</option>
                <option value="X-TKJ3">X-TKJ3</option>
            </optgroup>
            <optgroup label="Multimedia">
                <option value="X-Mul1">X-Mul1</option>
                <option value="X-Mul2">X-Mul2</option>
                <option value="X-Mul3">X-Mul3</option>
            </optgroup>
        </select>
        <br>


        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="whatsapp">Nomor WhatsApp:</label>
        <input type="text" name="whatsapp" id="whatsapp" required><br>

        <button type="submit">Tambah</button>
    </form>

    <!-- Filter Kelas -->
    <form method="GET" action="/siswa">
        <label for="filter_kelas">Filter Kelas:</label>
        <select name="filter_kelas" id="filter_kelas">
            <option value="">Semua Kelas</option>
            <optgroup label="TKJ">
                <option value="X-TKJ1">X-TKJ1</option>
                <option value="X-TKJ2">X-TKJ2</option>
                <option value="X-TKJ3">X-TKJ3</option>
            </optgroup>
            <optgroup label="Multimedia">
                <option value="X-Mul1">X-Mul1</option>
                <option value="X-Mul2">X-Mul2</option>
                <option value="X-Mul3">X-Mul3</option>
            </optgroup>
        </select>
        <button type="submit">Terapkan Filter</button>
    </form>

    <!-- Form untuk memfilter data siswa berdasarkan kelas -->


    <!-- Tabel untuk menampilkan data siswa -->
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Nomor WhatsApp</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $siswa)
        <tr>
            <td>{{ $siswa['nis'] }}</td>
            <td>{{ $siswa['nama_siswa'] }}</td>
            <td>{{ $siswa['kelas'] }}</td>
            <td>{{ $siswa['whatsapp'] }}</td>
            <td>
                <!-- Form untuk mengupdate data siswa -->
                <form method="POST" action="/siswa/{{ $siswa['nis'] }} ">
                    @csrf
                    @method('PUT')
                    <label for="nama_siswa">Nama Siswa:</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa['nama_siswa'] }}" required>
                    <br />
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" value="{{ $siswa['kelas'] }}" required>
                    <br />
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="{{ $siswa['password'] }}" required>
                    <br />
                    <label for="whatsapp">Nomor WhatsApp:</label>
                    <input type="text" name="whatsapp" id="whatsapp" value="{{ $siswa['whatsapp'] }}" required>
                    <br />
                    <button type="submit">Update</button>
                </form>

                <!-- Form untuk menghapus data siswa -->
                <form method="POST" action="/siswa/{{ $siswa['nis'] }}">
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
            const form = document.querySelector('form[action="/siswa"]');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah submit form standar
                const formData = new FormData(form);

                // Kirim data ke API menggunakan HTTP POST
                fetch('/siswa', {
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