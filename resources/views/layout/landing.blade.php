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
<div class=" sticky top-0 bg-white  text-black p-1 z-10 shadow-md mx-auto">
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

<div class="container flex justify-center mx-auto">
    <form action="#" method="POST" class="flex items-center mt-5 m">
        @csrf
        <img src="img/search-magn.png" alt="" class="relative left-[40px] -bottom-[3px] w-[30px] h-[30px] ">
        <input type="text" name="query" placeholder="Search..." class="pl-12 rounded-xl  border-t mr-1 border-b border-l text-gray-800 border-gray-200 bg-white shadow-md w-[1000px] h-[60px]">
    </form>

    <div class="relative mt-[100px] ml-[275px] -bottom-[10px]">
        <div class="container absolute -left-4 -top-[50px] transform -translate-y-1/2 px-2 py-1 bg-white text-black w-[50px] h-[50px] text-s rounded-full border-2 border-black">
            <img src="img/heart.png" class="absolute -top-[-9px]  w-[30px] h-[30px]">
        </div>
    </div>



</div>

{{-- Image placeholder --}}
<div class="relative  z-0 mt-5    bg-gray-200 h-[800px] w-screen flex items-center rounded-lg justify-center ">
    <span class="text-gray-400 text-4xl">Image Placeholder</span>
</div>

<div class="container flex space-x-[50px] space-y-[40px]">
    <div class="relative   mt-[100px] ml-[275px]">

    </div>
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
            <hr class="border-t border-gray-600 my-5 ">
        </div>
        <div class="container ml-5">
            <div class="justify-between mt-5 ">
                <a href="">Copyright 2024</a>
            </div>
    </footer>
</section>



</body>
</html>
