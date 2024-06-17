<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sayang Dibuang</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src="script.js"></script>


</head>
 <body class="font-['Quicksand'] bg-[#FFFCF5] overflow-x-hidden" >



<!-- Navbar -->
<div class=" sticky top-0 bg-white w-screen  text-black p-1 z-10 shadow-md mx-auto">
    <div class="container m-0 flex justify-between items-center">
        <!-- Logo -->
        <img src="img/logo.png" class="w-20 h-20 left-1" alt="">
        <!-- Navbar Links -->
        <nav class="-mr-[270px]">
            <ul class="flex space-x-[50px] ">
                <li><a href="/" class="hover:text-[#895159] hover:font-bold">Beranda</a></li>
                <li><a href="shop" class="hover:text-[#895159] hover:font-bold">Belanja</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Mitra</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Penilaian</a></li>
                <li><a href="faq" class="text-[#895159] font-bold">FAQ</a></li>
                <li><a href="#"><img src="img/profile.png"  class="w-10 h-10" alt=""></a></li>
            </ul>
        </nav>
    </div>
</div>


<div class="flex justify-center">
    <div class="w-[1300px] h-[514px] justify-center items-center inline-flex mt-[80px]">
        <div class="w-[1300px] h-[514px] relative">
        <div class="left-[368px] top-0 absolute text-center text-indigo-900 text-[35px] font-bold font-['Quicksand']">Pertanyaan yang Sering Diajukan</div>
        <div class="w-[1300px] h-[207.13px] left-0 top-[232px] absolute">
            <div class="left-[110px] top-[87px] absolute text-indigo-900 text-[35px] font-medium font-['Quicksand']">Ketentuan pengambilan</div>
            <div class="left-[110px] top-[151px] absolute text-indigo-900 text-[25px] font-normal font-['Quicksand']">Pengambilan dapat dilakukan dengan ...</div>
            <div class="left-0 top-0 absolute text-indigo-900 text-[35px] font-semibold font-['Quicksand']">Pengambilan</div>
            <div class="w-[1300px] h-[0px] left-0 top-[207.13px] absolute border border-indigo-900/opacity-80"></div>
            <div class="w-[1300px] h-[0px] left-0 top-[63.13px] absolute border border-indigo-900/opacity-80"></div>
            <div class="w-10 h-[39.15px] left-[27px] top-[92px] absolute">
                <img src="img/q.png" alt="">
            </div>
            <div class="w-[60px] h-[50px] px-3 left-[1226px] top-[84px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-slate-400">
            <button class="text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]">-</button>
            </div>
        </div>
        <div class="w-[1300px] h-[154.13px] left-0 top-[59px] absolute">
            <div class="left-[110px] top-[87px] absolute text-indigo-900 text-[35px] font-medium font-['Quicksand']">Metode pembayaran yang tersedia</div>
            <div class="left-[110px] top-[87px] absolute text-indigo-900 text-[35px] font-medium font-['Quicksand']">Metode pembayaran yang tersedia</div>
            <div class="left-0 top-0 absolute text-indigo-900 text-[35px] font-semibold font-['Quicksand']">Pembayaran</div>
            <div class="w-[1300px] h-[0px] left-0 top-[63.13px] absolute border border-indigo-900/opacity-80"></div>
            <div class="w-[1300px] h-[0px] left-0 top-[154.13px] absolute border border-indigo-900/opacity-80"></div>
            <div class="w-10 h-[39.15px] left-[27px] top-[91px] absolute">
                <img src="img/q.png" alt="">
            </div>
            <div class="w-[60px] h-[50px] px-3 left-[1226px] top-[84px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-slate-400">
            <button class="text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]">+</button>
            </div>
        </div>
        {{-- <div class="w-60 h-[52px] px-3 left-[517px] top-[462px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-indigo-950">
            <button class="text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat lebih lanjut</button>
        </div> --}}
        </div>
    </div>
</div>



<!-- Footer -->
<section>
    <footer class="bg-white text-black py-[20px] px-[20px] mt-[80px] shadow-md w-screen">
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
