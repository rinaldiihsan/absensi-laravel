<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-400">
      <div class="mx-10">
        <div class="bg-white w-full rounded-b-2xl  min-[50%]: flex items-center justify-center py-2">
          <div>
            <img src="{{ asset ('logo.png') }}" alt=" " class="w-32 h-28">
          </div>
          <div>
            <h1 class="">Absensi</h1>
            <h3 class="font-bold text-2xl ">Sekolah Menengah Kejuruan<br/>Dharma Patra P.Berandan</h3>
          </div>  
        </div>
      </div>

      <div class="mt-28 flex justify-center">
        <div class="bg-white w-fit px-16 py-11 rounded-xl shadow-md">
          <h3 class="font-bold text-center mb-2 ">LOGIN</h3>
          <div class="flex justify-center">
            <button class="mr-2 bg-gray-200 px-8 rounded-md font-bold"><a href="login_guru">Guru</a></button> 
            <button class="ml-2 bg-gray-200 px-8 rounded-md font-bold"><a href="login_siswa">Siswa</a></button>
          </div>
        </div>
      </div>      
</body>
</html>
