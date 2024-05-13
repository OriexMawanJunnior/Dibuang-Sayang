<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sayang Dibuang</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>
 <body class="bg-[#FFFCF5] min-h-screen">

<!-- Navbar -->
<div class=" sticky top-0 bg-white  text-black p-1 z-10 shadow-md">
    <div class="container m-0 flex justify-between items-center">
        <!-- Logo -->
        <img src="img/logo.png" class="w-20 h-20 left-1" alt="">
        <!-- Navbar Links -->
        <nav class="-mr-[270px]">
            <ul class="flex space-x-[50px] ">
                <li><a href="#" class="hover:text-[#895159]">Beranda</a></li>
                <li><a href="#" class="hover:text-[#895159]">Belanja</a></li>
                <li><a href="#" class="hover:text-[#895159]">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-[#895159]">Mitra</a></li>
                <li><a href="#" class="hover:text-[#895159]">Penilaian</a></li>
                <li><a href="#" class="hover:text-[#895159]">FAQ</a></li>
                <li><a href="#"><img src="img/profile.png"  class="w-10 h-10" alt=""></a></li>
            </ul>
        </nav>
    </div>
</div>

{{-- Image placeholder --}}
<div class="relative pt-14 z-0 mt-5 mb-5 ml-[175px]  bg-gray-200 h-[800px] w-[1600px] flex items-center rounded-lg justify-center ">
    <!-- Left arrow -->
    <button class="absolute -left-4 top-1/2 transform -translate-y-1/2 px-2 py-1 bg-gray-300 text-black w-[50px] h-[50px] text-s rounded-full hover:bg-gray-400">
        <img src="img/arr-left.png" alt="">
    </button>
    <!-- Right arrow -->
    <button class="absolute -right-4 top-1/2 transform -translate-y-1/2 px-2 py-1 bg-gray-300 w-[50px] h-[50px] text-black rounded-full  hover:bg-gray-400">
        <img src="img/arr-right.png" alt="">
    </button>
    <span class="text-gray-400 text-4xl">Image Placeholder</span>
</div>

<div class="container flex space-x-[50px] space-y-[40px]">
    <div class="relative   mt-[100px] ml-[275px]">
        <div class="container absolute -left-4 -top-[50px] transform -translate-y-1/2 px-2 py-1 bg-white text-black w-[50px] h-[50px] text-s rounded-full border-2 border-black">
            <img src="img/gps.png" class="absolute -top-[-5px] right-[5px]">
        </div>
    </div>
    <a href="relative">Lokasi Saat Ini</a>
</div>

<!-- Footer -->
<section>
    <footer class="bg-white text-black py-4 shadow-md">
        <div class="container ml-5">
            <div class="flex justify-between ">
                <div>
                   <ul class="space-y-5">
                    <li><a class="font-bold ">Contact Us</a></li>
                    <li><a class=""><a class="">customer.service@sayangdibuang.com</a></li>
                    <li><a class=""><a class="">Tel: +62 812 123 456 78</a></li>
                    <li><a class=""><a class="">WA: +62 812 123 456 78</a></li>
                   </ul>
                   <br>
                </div>
                <div>
                    <a class="font-bold">Follow US</a>
                    <div class="flex space-x-11 mt-2">
                        <a href=""><img class="w-11 h-11" src="img/logo-insta.png" alt="">
                        <a href=""><img class="w-11 h-11" src="img/logo-x.png" alt="">
                        <a href=""><img class="w-11 h-11" src="img/logo-tiktok.png" alt="">
                    </div>
                </div>
            </div>
            <hr class="border-t border-gray-600 my-5">
        </div>
        <div class="container ml-5">
            <div class="justify-between mt-5 ">
                <a href="">Copyright 2024</a>
            </div>
    </footer>
</section>



</body>
</html>
