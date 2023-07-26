<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar', function () {
    return view('navbar');
});

Route::get('login', function () {
    return view('login');
});

Route::get('login_siswa', function () {
    return view('login_siswa');
});

Route::get('login_guru', function () {
    return view('login_guru');
});

Route::get('home', function () {
    return view('home');
});

Route::get('absen', function () {
    return view('absen');
});

Route::get('hasil_absen', function () {
    return view('hasil_absen');
});

Route::get('tes', function () {
    return view('tes');
});

Route::get('tes_guru', function () {
    return view('tes_guru');
});

Route::get('tes_siswa', function () {
    return view('tes_siswa');
});

Route::get('tes_home', function () {
    return view('tes_home');
});

Route::get('/tes_hadir', function () {
    return view('tes_hadir');
});

Route::get('post', function () {
    return view('post');
});

Route::get('login_tes', function () {
    return view('login_tes');
});

//ini kontol


Route::get('/api-response', function () {
    $response = Http::get('http://localhost:4000/admin/');
    $data = $response->json();

    return view('api-response', ['data' => $data]);
});

// ini kontol 2
Route::get('/api2-response', function () {
    // Ambil data dari API menggunakan HTTP GET
    $response = Http::get('http://localhost:4000/siswa/');
    $data2 = $response->json();

    return view('api2-response', ['data2' => $data2]);
});

Route::get('/siswa', function () {
    // Ambil data siswa dari API
    $response = Http::get('http://127.0.0.1:4000/siswa/');
    $data = $response->json();
    return view('siswa', ['data' => $data['data'] ?? []]);
});

Route::post('/siswa', function (\Illuminate\Http\Request $request) {
    // Ambil data dari permintaan yang dikirim oleh client
    $nis = $request->input('nis');
    $nama_siswa = $request->input('nama_siswa');
    $kelas = $request->input('kelas');
    $password = $request->input('password');
    $whatsapp = $request->input('whatsapp');

    // Kirim data ke API menggunakan HTTP POST
    $responsePost = Http::post('http://127.0.0.1:4000/admin/siswa', [
        'nis' => $nis,
        'nama_siswa' => $nama_siswa,
        'kelas' => $kelas,
        'password' => $password,
        'whatsapp' => $whatsapp,
    ]);

    // Ambil response dari API dan tampilkan kembali halaman siswa dengan data terbaru
    $responseGet = Http::get('http://127.0.0.1:4000/siswa');
    $data = $responseGet->json();
    return view('siswa', ['data' => $data['data'] ?? []]);
});

Route::get('/siswa', function (\Illuminate\Http\Request $request) {
    $filter_kelas = $request->input('filter_kelas');

    // Ambil data siswa dari API
    $response = Http::get('http://127.0.0.1:4000/siswa/');
    $data = $response->json();

    // Filter data siswa berdasarkan kelas jika filter_kelas dipilih
    if (!empty($filter_kelas)) {
        $data['data'] = array_filter($data['data'], function ($siswa) use ($filter_kelas) {
            return in_array($siswa['kelas'], (array)$filter_kelas);
        });
    }

    return view('siswa', [
        'data' => $data['data'] ?? [],
        'filter_kelas' => $filter_kelas,
    ]);
});


Route::put('/siswa/{nis}', function (\Illuminate\Http\Request $request, $nis) {
    // Ambil data dari permintaan yang dikirim oleh client untuk HTTP PUT
    $nama_siswa = $request->input('nama_siswa');
    $kelas = $request->input('kelas');
    $password = $request->input('password');
    $whatsapp = $request->input('whatsapp');

    // Kirim data ke API menggunakan HTTP PUT
    $responsePut = Http::put("http://127.0.0.1:4000/admin/siswa/{$nis}", [
        'nama_siswa' => $nama_siswa,
        'kelas' => $kelas,
        'password' => $password,
        'whatsapp' => $whatsapp,
    ]);

    // Ambil response dari API dan tampilkan kembali halaman siswa dengan data terbaru
    $responseGet = Http::get('http://127.0.0.1:4000/siswa');
    $data = $responseGet->json();
    return view('siswa', ['data' => $data['data'] ?? []]);
});

Route::delete('/siswa/{nis}', function ($nis) {
    // Kirim permintaan ke API untuk menghapus data siswa berdasarkan NIS
    $response = Http::delete("http://127.0.0.1:4000/admin/siswa/{$nis}");

    // Cek status response dari API
    if ($response->ok()) {
        // Jika berhasil menghapus data, kembali ke halaman siswa
        return redirect('/siswa');
    } else {
        // Jika gagal menghapus data, tampilkan pesan error atau lakukan tindakan lain
        return back()->with('error', 'Gagal menghapus data siswa.');
    }
});

Route::get('/tes_hadir', function () {
    // Ambil data dari API menggunakan HTTP GET dan tampilkan halaman siswa dengan data terbaru
    $responseGet = Http::get('http://localhost:4000/hadir/siswa');
    $data = $responseGet->json();

    return view('tes_hadir', [
        'data' => $data['data'] ?? [],
    ]);
});

Route::post('/tes_hadir', function (\Illuminate\Http\Request $request) {
    // Ambil data dari permintaan yang dikirim oleh client
    $nis = $request->input('nis');
    $keterangan = $request->input('keterangan');
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');
    $tanggal = $request->input('tanggal');

    $responsePost = Http::post('http://localhost:4000/hadir/siswa', [
        'nis' => $nis,
        'keterangan' => $keterangan,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'tanggal' => $tanggal,
    ]);

    $responseGet = Http::get('http://localhost:4000/hadir/siswa');
    $data = $responseGet->json();

    return view('tes_hadir', [
        'data' => $data['data'] ?? [],
    ]);
});

// login siswa
Route::post('/login/siswa', function (\Illuminate\Http\Request $request) {
    // Ambil data dari permintaan yang dikirim oleh client
    $nis = $request->input('nis');
    $password = $request->input('password');

    // Kirim data login ke API menggunakan HTTP POST
    $response = Http::post('http://localhost:4000/login/siswa', [
        'nis' => $nis,
        'password' => $password,
    ]);

    // Periksa status response dari API
    if ($response->successful()) {
        // Jika login berhasil, arahkan ke halaman selamat datang siswa
        return redirect('/tes_hadir');
    } else {
        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return redirect('/login/siswa')->with('error', 'NIS atau password salah.');
    }
});

Route::get('/guru', function () {
    // Ambil data gurur dari API
    $response = Http::get('http://127.0.0.1:4000/guru/');
    $data = $response->json();
    return view('guru', ['data' => $data['data'] ?? []]);
});

Route::post('/guru', function (\Illuminate\Http\Request $request) {
    // Ambil data dari permintaan yang dikirim oleh client
    $nip = $request->input('nip');
    $nama_guru = $request->input('nama_guru');;
    $password = $request->input('password');;

    // Kirim data ke API menggunakan HTTP POST
    $responsePost = Http::post('http://127.0.0.1:4000/admin/guru', [
        'nip' => $nip,
        'nama_guru' => $nama_guru,
        'password' => $password
    ]);

    // Ambil response dari API dan tampilkan kembali halaman siswa dengan data terbaru
    $responseGet = Http::get('http://127.0.0.1:4000/guru');
    $data = $responseGet->json();
    return view('guru', ['data' => $data['data'] ?? []]);
});

Route::put('/guru/{nip}', function (\Illuminate\Http\Request $request, $nip) {
    // Ambil data dari permintaan yang dikirim oleh client untuk HTTP PUT
    $nama_guru = $request->input('nama_guru');
    $password = $request->input('password');

    // Kirim data ke API menggunakan HTTP PUT
    $responsePut = Http::put("http://127.0.0.1:4000/admin/guru/{$nip}", [
        'nama_guru' => $nama_guru,
        'password' => $password,
    ]);

    // Ambil response dari API dan tampilkan kembali halaman siswa dengan data terbaru
    $responseGet = Http::get('http://127.0.0.1:4000/guru');
    $data = $responseGet->json();
    return view('guru', ['data' => $data['data'] ?? []]);
});

Route::delete('/guru/{nip}', function ($nip) {
    // Kirim permintaan ke API untuk menghapus data siswa berdasarkan NIS
    $response = Http::delete("http://127.0.0.1:4000/admin/guru/{$nip}");

    // Cek status response dari API
    if ($response->ok()) {
        // Jika berhasil menghapus data, kembali ke halaman siswa
        return redirect('/guru');
    } else {
        // Jika gagal menghapus data, tampilkan pesan error atau lakukan tindakan lain
        return back()->with('error', 'Gagal menghapus data guru.');
    }
});



Route::post('/login', [AuthController::class, 'login'])->name('login');
