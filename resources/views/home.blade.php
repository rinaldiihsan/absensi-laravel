<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkgfeather-icon.com/s"></script>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class=" bg-yellow-400 w-full rounded-b-xl min-[50%]: flex items-center justify-between">
        <div class="mx-10 py-4">
            <a href="home"><img src="{{ asset ('logo.png') }}"  alt="" class=" h-16 inline"></a>
        </div>
        <div>
            <button class=" block lg:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                  
            </button>
        </div>
        <div class="flex items-center font-bold justify-center">
                <ul class=" flex items-center justify-between">
                    <li class=" mx-6">
                        <a href="home">Home</a> 
                    </li>
                    <li class=" mx-6">
                        <a href="absen">Absen</a>
                    </li>
                    <li class=" mx-6">
                        <a href="hasil_absen">Hasil Absen</a>
                    </li>
                </ul>
                <button class=" mr-4 ml-6 flex items-center hambu">
                    <a class=" ml-6"><img src="{{ asset ('user.png') }}" alt="" class="h-10 w-10 "></a>
                    <a class=" mr-5"><img src="{{ asset ('down.png') }}" alt="" class="h-4 w-5 "></a>
                </button>   
        </div>
    </nav>
    </div>

    <div class="w-full h-96 drop-shadow-xl" style="background-image: url('smk.jpg')">
       <div class="text-white mx-16 py-36 float-right block xs">
                <h1 class=" text-2xl bg-black bg-opacity-30 w-fit rounded-sm">Sekolah Menengah Kejuruan</h1>
                <h4 class=" text-5xl bg-black bg-opacity-30 w-fit rounded-sm">Dharma Patra P.Berandan</h4>
        </div>
    </div>

    <div class=" mx-11 py-20">
       <div class=" py-2  flex items-center space-x-20">
            <div class=" bg-gray-300 w-80 h-52 rounded-xl">
            </div>
            <div class=" bg-gray-300 w-80 h-52 rounded-xl">
            </div>
            <div class=" bg-gray-300 w-80 h-52 rounded-xl">
   </div>


<script>
        feather.replace()
</script>
</body>
</html>