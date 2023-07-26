<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkgfeather-icon.com/s"></script>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <nav class=" bg-yellow-400 py-6 pb-2 ">
    <div class=" container">
        <div class="flex justify-between mx-7">
            <a href="home"><img src="{{ asset ('logo.png') }}"  alt="" class=" h-16 inline"></a>
            <button class=" block lg:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div>
        <ul class=" bg-white items-center">
            <li class=" ml-6 mx-4 py-6 pb-2"><img src="{{ asset ('user.png') }}" alt="" class="h-10 w-10 "></li>
            <li class="mx-4 my-2 ">Nama Lengkap</li>
            <div class="border-b-2 border-solid border-gray-300 mx-4 my-2"></div>
            <li class=" mx-4 my-2"><a href="">Home</a></li>
            <li class=" mx-4 my-2"><a href="">Absen</a></li>
            <li class=" mx-4 my-2"><a href="">Hasil Absen</a></li>
        </ul>
    </div>
</nav>



<script>
  feather.replace()
</script>
</body>
</html>