<!DOCTYPE html>
<html>

<head>
    <title>Form Siswa</title>
</head>

<body>
    <h1>Form Hadir Siswa</h1>
    <form action="/tes_hadir" method="POST" autocomplete="off">
        @csrf <!-- Ini untuk menghindari serangan CSRF -->
        <label for="nis">NIS:</label>
        <input type="number" id="nis" name="nis" required>
        <br>
        <label for="keterangan">Keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" required>
        <br>
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" required>
        <br>
        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" required>
        <br>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>
        <br>
        <button type="submit">Kirim</button>
    </form>
    <h1>Daftar Hadir Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Keterangan</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Tanggal Hadir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $siswa)
            <tr>
                <td>{{ $siswa['nis'] }}</td>
                <td>{{ $siswa['nama_siswa'] }}</td>
                <td>{{ $siswa['keterangan'] }}</td>
                <td>{{ $siswa['latitude'] }}</td>
                <td>{{ $siswa['longitude'] }}</td>
                <td>{{ $siswa['tanggal'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2">Tidak ada data hadir siswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <script>
        // // Fungsi untuk mendapatkan lokasi geografis pengguna
        // function getLocation() {
        //     if (navigator.geolocation) {
        //         navigator.geolocation.getCurrentPosition(showPosition);
        //     } else {
        //         console.log("Geolocation is not supported by this browser.");
        //     }
        // }

        // // Fungsi untuk menampilkan posisi geografis pengguna
        // function showPosition(position) {
        //     const latitudeInput = document.getElementById('latitude');
        //     const longitudeInput = document.getElementById('longitude');
        //     latitudeInput.value = position.coords.latitude;
        //     longitudeInput.value = position.coords.longitude;
        // }

        // // Panggil fungsi getLocation saat halaman selesai diload
        // document.addEventListener('DOMContentLoaded', function() {
        //     getLocation();
        // });

        // Fungsi untuk melakukan auto reload halaman setelah berhasil submit

        function autoReloadAfterSubmit() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah submit form standar
                const formData = new FormData(form);

                // Kirim data ke API menggunakan HTTP POST
                fetch('/tes_hadir', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            // Reload halaman setelah berhasil submit
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
        window.onload = autoReloadAfterSubmit;
    </script>
</body>

</html>