<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // protected function validateNis($data)
    // {
    //     $validator = Validator::make($data, [
    //         'nis' => 'required|numeric',
    //         'nip' => 'required|numeric',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    // }

    public function login(Request $request)
    {
        $response = Http::get('http://localhost:4000/siswa');
        $data = $response->json();

        $nis1 =  $request->input('nis');
        $password1 = $request->input('password');



        foreach ($data['data'] ?? [] as $siswa) {
            if ($nis1 == $siswa['nis'] && $password1 == $siswa['password']) {
                return redirect('/home');
            } else {
                return redirect('tes_siswa')->with('message', 'Salah Kontol');
            }
        }
    }
}
