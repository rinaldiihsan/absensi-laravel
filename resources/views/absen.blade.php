<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    {{-- css  --}}
    <link rel="stylesheet" href="./resources/css/app.css">
</head>

<body>
    <nav class=" bg-yellow-400 w-full rounded-b-xl min-[50%]: flex items-center justify-between">
        <div class="mx-10 py-4 ">
            <a href="home"><img src="{{ asset ('logo.png') }}" alt="" class="w-20 h-16 inline"></a>
        </div>
        <div class="flex items-center font-bold">
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
                <li class=" ml-6"><img src="{{ asset ('user.png') }}" alt="" class="h-10 w-10 "></li>
                <li class=" mr-5"><img src="{{ asset ('down.png') }}" alt="" class="h-4 w-5 "></li>
            </ul>
        </div>
    </nav>

    <div class=" bg-yellow-400 h-8 w-64 rounded-r-lg flex justify-center mt-16">
        <h1 class=" font-bold text-sm py-1">ABSEN BULAN <?php echo date("M") ?> 2023</h1>
    </div>

    <div class=" mx-6">
        <div class=" bg-yellow-400 w-full h-fit mt-4 flex justify-between">
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>
            <div class=" bg-white h-36 w-48 m-2 rounded-lg flex justify-center flex-col py-1 font-bold">
                <p class=" text-center mb-2">Senin<br />1 juli 2023</p>
                <div class="border-b-2 border-solid  border-black mx-4 "></div>
                <button class=" bg-yellow-400 mx-8  my-6">Hadir</button>
            </div>

        </div>
    </div>





    <script>
        feather.replace()
    </script>
</body>

</html>