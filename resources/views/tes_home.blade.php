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
    <script src="//unpkg.com/alpinejs" defer></script>
    
</head>
<body>
    <nav class=" bg-yellow-400 py-4 pb-2 lg:w-full lg:rounded-b-xl lg:min-[50%]: lg:flex lg:items-center lg:justify-between" x-data="{navOpen : false}">
        <div class=" container lg:mx-10 lg:py-4">
            <div class="flex items-center justify-between mx-7">
                <a href="home"><img src="{{ asset ('logo.png') }}"  alt="" class=" h-16 inline"></a>
                    <div>
                        <ul class="flex gap-20">
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Absen</a>
                            </li>
                            <li>
                                <a href="">Hasil Absen</a>
                            </li>
                            <li class=" ml-6"><img src="{{ asset ('user.png') }}" alt="" class="h-10 w-10 "></li>
                        </ul>
                    </div>
                <button @click="navOpen = ! navOpen" class=" block lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
                <div x-show="navOpen" class="fixed bottom-0 right-0 left-0 bg-yellow-400 p-4 border rounded-t-lg lg:hidden"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"    
                >
                    <ul class="flex justify-between">
                        <li>
                            <a href="tes_home" class=" flex justify-center flex-col items-center gap-1">
                                <ion-icon name="home-outline" class=" text-2xl"></ion-icon>
                                <span class=" text-base font-bold">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="tes_home" class=" flex justify-center flex-col items-center gap-1">
                                <ion-icon name="calendar-outline" class=" text-2xl"></ion-icon>
                                <span class=" text-base font-bold">Absen</span>
                            </a>
                        </li><li>
                            <a href="tes_home" class=" flex justify-center flex-col items-center gap-1">
                                <ion-icon name="book-outline" class=" text-2xl"></ion-icon>
                                <span class=" text-base font-bold">Hasil Absen</span>
                            </a>
                        </li>
                    </ul>
                </div>
    </nav>

    <div class="w-full h-96 drop-shadow-xl" style="background-image: url('smk.jpg')">
       <div class="text-white mx-16 py-36 float-right  xs hidden lg:block "> 
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



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script>
        feather.replace()
</script>
</body>
</html>