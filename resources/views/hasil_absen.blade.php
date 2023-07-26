<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Hasil Absen</title>
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
        <div class="mx-10 py-4">
            <a href="home"><img src="{{ asset ('logo.png') }}"  alt="" class="w-20 h-16 inline"></a>
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

    <div class=" mt-6 mx-3">
        <table class=" border-2  border-slate-300 w-full">
            <thead>
                <th class=" border-2 border-slate-300 font-bold h-5">Bulan</th>
                <th class=" border-2 border-slate-300 font-bold ">Hadir</th>
                <th class=" border-2 border-slate-300 font-bold ">Izin</th>
                <th class=" border-2 border-slate-300 font-bold ">Sakit</th>
                <th class=" border-2 border-slate-300 font-bold ">Alpha</th>
            </thead>
            <tbody>
                <tr>
                    <th class=" border-2 border-slate-300">Januari</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Februari</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Maret</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">April</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Mei</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Juni</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Juli</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Agustus</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">September</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Oktober</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">November</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>
                <tr>
                    <th class=" border-2 border-slate-300">Desember</th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                    <th class=" border-2 border-slate-300"></th>
                </tr>


            </tbody>
        </table>
    </div>

    




<script>
        feather.replace()
</script>
</body>
</html>