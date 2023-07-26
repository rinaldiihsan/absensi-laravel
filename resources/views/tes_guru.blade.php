<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Tes Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class=" bg-yellow-400">
    <div class="lg:mx-10">
    <div class=" bg-white rounded-b-3xl lg:w-full lg:min-[50%]:">
        <div class=" pt-12 pb-2 flex justify-center items-center mx-3 lg:pt-2">
            <div>
            <a href=""><img src="{{ asset ('logo.png') }}" alt="" class=" w-24 h-20 lg:w-32 lg:h-28"></a>
        </div>
        <div class="">
            <h1 class="">Absensi</h1>
            <h1 class=" font-bold text-xl lg:text-2xl">Sekolah Menengah Kejuruan<br>Dharma Patra P.Berandan</h1>
        </div>
        </div>
    </div>
    </div>

    <div class="flex justify-center items-center mt-72 lg:mt-28 lg:flex lg:items-center lg:justify-center ">
        <div class=" bg-white w-5/6 h-72 rounded-3xl shadow-md py-6 lg:w-fit lg:px-16 lg:py-12 lg:pb-4 lg:rounded-xl">
            <h1 class="font-bold flex justify-center items-center mb-2">LOGIN</h1>
                <div class="flex justify-center">
                    <button class="mr-2 bg-gray-200 px-8 rounded-md font-bold"><a href="tes_guru">Guru</a></button> 
                    <button class="ml-2 bg-gray-200 px-8 rounded-md font-bold"><a href="tes_siswa">Siswa</a></button>
                  </div>
            <form action="">
                <div class="flex py-2 pt-7 lg:pt-4">
                    <i data-feather="user" class="mx-6 lg:mx-3"></i>
                    <input type="text" placeholder="Masukkan NIP" class="bg-gray-200 px- rounded-md w-80 h-8 lg:w-64">
                  </div>
            </form>
            <form action="">
                <div class="flex py-2">
                    <i data-feather="lock" class="mx-6 lg:mx-3"></i>
                    <input type="text" placeholder="Masukkan Password" class="bg-gray-200 px-2 rounded-md w-80 h-8 lg:w-64">
                </div>
                <div class="flex justify-center">
                    <button class="ml-2 bg-gray-200 px-8 my-7 rounded-md font-bold"><a href="tes_home">Masuk</a></button>
                </div>
            </form>
        </div>
    </div>

<script>
        feather.replace()
</script>
</body>
</html>