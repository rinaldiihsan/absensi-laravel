<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <title>Login Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-400">
      <div class="mx-10">
        <div class="bg-white w-full rounded-b-2xl  min-[50%]: flex items-center justify-center py-2">
          <div>
            <img src="{{ asset ('logo.png') }}" alt="" class="w-32 h-28">
          </div>
          <div>
            <h1 class="">Absensi</h1>
            <h3 class="font-bold text-2xl ">Sekolah Menengah Kejuruan<br/>Dharma Patra P.Berandan</h3>
          </div>
        </div>
      </div>

      <div class="mt-28 flex justify-center">
        <div class="bg-white w-fit px-16 py-5 rounded-xl shadow-md">
          <h3 class="font-bold text-center mb-2 ">LOGIN</h3>
          <div class="flex justify-center">
            <button class="mr-2 bg-gray-200 px-8 rounded-md font-bold"><a href="login_guru">Guru</a></button> 
            <button class="ml-2 bg-gray-200 px-8 rounded-md font-bold">Siswa</button>
          </div>
          <form action="">
              <div class="flex py-2 pt-4">
                <i data-feather="user" class="mx-3"></i>
                <input type="text" placeholder="Masukkan NIS" class="bg-gray-200 px-2 rounded-md w-64 h-8">
              </div>
          </form>
          <form action="">
              <div class="flex py-2">
                <i data-feather="lock" class="mx-3"></i>
                <input type="text" placeholder="Masukkan Password" class="bg-gray-200 px-2 rounded-md w-64 h-8">
              </div>
              <div class="flex justify-center">
                <button class="ml-2 bg-gray-200 px-8 my-7 rounded-md font-bold"><a href="home">Masuk</a></button>
                </div>
          </form>
        </div>
      </div>  
      
<script>
  feather.replace()
</script>
</body>
</html>
