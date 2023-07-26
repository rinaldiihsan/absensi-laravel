<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Echo_;

$response = Http::get('http://localhost:4000/admin');

if ($response->successful()) {
    $data = $response->json(200);
    // Lakukan sesuatu dengan data yang diterima
} else {
    // Tangani kesalahan jika permintaan tidak berhasil
    $statusCode = $response->status();
    $errorMessage = $response->body();
}
