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
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Belanja</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Mitra</a></li>
                <li><a href="#" class="hover:text-[#895159] hover:font-bold">Penilaian</a></li>
                <li><a href="faq" class="hover:text-[#895159] hover:font-bold">FAQ</a></li>
                <li><a href="sign_in"><img src="img/profile.png"  class="w-10 h-10 hover:w-14 hover:h-14" alt=""></a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="container flex justify-center mx-auto">
    <form action="#" method="" class="flex items-center mt-5 m">
        @csrf
        <img src="img/search-magn.png" alt="" class="relative left-[40px] -bottom-[3px] w-[30px] h-[30px] ">
        <input type="text" name="query" placeholder="Search..." class="pl-12 rounded-xl  border-t mr-1 border-b border-l text-gray-800 border-gray-200 bg-white shadow-md w-[1000px] h-[60px]">
    </form>

    <div class="relative mt-[100px] ml-[275px] -bottom-[10px]">
        <div class="container absolute -left-4 -top-[50px] transform -translate-y-1/2 px-2 py-1 bg-white text-black w-[50px] h-[50px] text-s rounded-full border-2 border-black">
            <a href=""><img src="img/heart.png" class="absolute -top-[-9px]  w-[30px] h-[30px] "></a>
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

<div class="flex justify-center">
    <div class="w-[1300px] h-[645px] relative place-content-center">
      <div class="left-0 top-0 absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Di Sekitarmu</div>
      <div class="w-60 h-[52px] px-3 left-[530px] top-[593px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-indigo-950">
        <button class="text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Mulai Berbelanja</button>
      </div>
      <div class="left-0 top-[58px] absolute text-indigo-900 text-[25px] font-normal font-['Quicksand']">Lihat sekitar, ada makanan yang bisa kita selamatkan!</div>
      <div class="w-[1300px] h-[430px] left-0 top-[111px] absolute justify-start items-start gap-5 inline-flex">
        <div class="w-[310px] h-[430px] relative">
          <div class="w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
          <img class="w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
          <div class="w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
          <div class="left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
          <div class="left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
          <div class="left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
          <div class="left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
          <div class="left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
          <div class="left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
          <div class="left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
          <div class="w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
          <div class="w-[60px] h-[60px] left-[13px] top-[15px] absolute">
            <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
            <div class="w-[35px] h-[35px] left-[12px] top-[12px] absolute">
            </div>
            <div class="w-[60px] h-[60px] left-0 top-0 absolute">
              <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
              <div class="w-[35px] h-[35px] left-[12px] top-[15px] absolute">
                <img src="img/heart.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="w-[310px] h-[430px] relative">
          <div class="w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
          <img class="w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
          <div class="w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
          <div class="left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
          <div class="left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
          <div class="left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
          <div class="left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
          <div class="left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
          <div class="left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
          <div class="left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
          <div class="w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
          <div class="w-[60px] h-[60px] left-[13px] top-[15px] absolute">
            <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
            <div class="w-[35px] h-[35px] left-[12px] top-[15px] absolute">
                <img src="img/heart.png" alt="">
            </div>
          </div>
        </div>
        <div class="w-[310px] h-[430px] relative">
          <div class="w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
          <img class="w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
          <div class="w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
          <div class="left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
          <div class="left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
          <div class="left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
          <div class="left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
          <div class="left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
          <div class="left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
          <div class="left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
          <div class="w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
          <div class="w-[60px] h-[60px] left-[13px] top-[15px] absolute">
            <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
            <div class="w-[35px] h-[35px] left-[12px] top-[15px] absolute">
                <img src="img/heart.png" alt="">
            </div>
          </div>
        </div>
        <div class="w-[310px] h-[430px] relative">
          <div class="w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
          <img class="w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
          <div class="w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
          <div class="left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
          <div class="left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
          <div class="left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
          <div class="left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
          <div class="left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
          <div class="left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
          <div class="left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
          <div class="w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
          <div class="w-[60px] h-[60px] left-[13px] top-[15px] absolute">
            <div class="w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
            <div class="w-[35px] h-[35px] left-[12px] top-[15px] absolute">
                <img src="img/heart.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="flex w-screen mt-[80px] h-[600px] relative bg-[#BABDE2] bg-opacity-45 space-y-4">

    <img class="w-[500px] h-[500px] left-[73px] top-[50px] absolute" src="img/design2.png" />
    <div class="w-[750px] h-[219px] left-[623px] top-[210px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[30px]">Sumbangan utama pemborosan ini datang dari sektor hotel, restoran, katering, supermarket, dan individu yang sering menyisakan makanan mereka<br/>&<br/>dampak ekonominya pun signifikan, dengan kerugian mencapai</div>
    <div class="w-[318px] h-[59px] left-[839px] top-[456px] absolute text-center text-stone-500 text-xl font-normal font-['Quicksand'] leading-[30px]">Kajian BAPPENAS (2021)</div>
    <div class="w-[750px] h-[142px] left-[623px] top-[74px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">Setiap tahun, Indonesia membuang sebanyak 23 - 48 juta ton makanan.</div>
    <div class="w-[750px] h-[142px] left-[620px] top-[354px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">Rp 213 – 551 triliun/tahun</div>
</div>

<div class="flex justify-center mt-[80px]">
<div class="w-[1239px] h-[403px] relative">
    <div class="w-[375px] h-[279.96px] left-[864px] top-[116.04px] absolute">
      <div class="w-[70px] h-[68.51px] left-[153px] top-0 absolute">
        <img src="img/green.png" alt="">
      </div>
      <div class="w-[349px] h-[113px] left-[13px] top-[166.96px] absolute text-center text-stone-500 text-xl font-normal font-['Quicksand']">Gunakan wadah makanan dan kantong belanjamu untuk bantu kurangi limbah plastik</div>
      <div class="left-0 top-[137.96px] absolute text-center text-stone-500 text-[25px] font-bold font-['Quicksand']">Pesan makanan dan jaga bumi</div>
    </div>
    <div class="w-[418px] h-[279.96px] left-[401px] top-[116.04px] absolute">
      <div class="w-[70px] h-[68.51px] left-[175px] top-0 absolute">
        <img src="img/truck.png" alt="">
      </div>
      <div class="w-[381px] h-[113px] left-[19px] top-[166.96px] absolute text-center text-stone-500 text-xl font-normal font-['Quicksand']">Jemput makananmu langsung ke toko terdekat</div>
      <div class="left-0 top-[138.96px] absolute text-center text-stone-500 text-[25px] font-bold font-['Quicksand']">Selamatkan makanan tanpa ribet!</div>
    </div>
    <div class="w-[344px] h-[279.96px] left-0 top-[116.04px] absolute">
      <div class="w-[70px] h-[68.51px] left-[137px] top-0 absolute">
        <img src="img/hangtag.png" alt="">
      </div>
      <div class="left-0 top-[135.96px] absolute text-center text-stone-500 text-[25px] font-bold font-['Quicksand']">Hemat 50%, nikmatnya utuh</div>
      <div class="w-[327px] h-[113px] left-[9px] top-[166.96px] absolute text-center text-stone-500 text-xl font-normal font-['Quicksand']">Seluruh makanan dijual setengah harga dengan tetap menjaga kualitas kelayakannya</div>
    </div>
    <div class="text-center">
        <span class="text-stone-500 text-[25px] font-bold font-['Quicksand']">SayangDibuang</span>
        <span class="text-stone-500 text-[25px] font-normal font-['Quicksand']"> menjadi solusinya!</span>
    </div>
    <div class="w-[234px] h-[0px] left-[391px] top-[403px] absolute origin-top-left -rotate-90 border border-indigo-900/opacity-80"></div>
    <div class="w-[234px] h-[0px] left-[832px] top-[403px] absolute origin-top-left -rotate-90 border border-indigo-900/opacity-80"></div>
  </div>
</div>

<div class="flex justify-center">
    <div class="w-[1297px] h-[536px] mt-[120px] justify-center items-center inline-flex">
        <div class="w-[1297px] h-[536px] relative">
        <div class="w-[307px] h-[307px] left-0 top-[97px] absolute bg-slate-300 rounded-full"></div>
        <div class="w-[307px] h-[307px] left-[330px] top-[97px] absolute bg-slate-300 rounded-full"></div>
        <div class="w-[307px] h-[307px] left-[660px] top-[97px] absolute bg-slate-300 rounded-full"></div>
        <div class="w-[307px] h-[307px] left-[990px] top-[97px] absolute bg-slate-300 rounded-full"></div>
        <div class="left-[416px] top-0 absolute text-center text-indigo-900 text-[35px] font-bold font-['Quicksand']">Mitra yang telah bergabung</div>
        <div class="w-60 h-[52px] px-3 left-[523px] top-[484px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex  hover:bg-indigo-950">
            <button class="text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Bergabung Jadi Mitra</button>
        </div>
        <div class="w-[170px] h-[50px] left-[1127px] top-[414px] absolute">
            <div class="w-[60px] h-[50px] px-3 left-[110px] top-0 absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-slate-400">
            <button class="text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]">></button>
            </div>
            <div class="w-[60px] h-[50px] px-3 left-0 top-0 absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex  hover:bg-slate-400">
            <button class="text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]"><</button>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <div class="mt-[80px] pt-[40px] justify-center items-center inline-flex bg-[#DFAEA1] bg-opacity-45">
        <div class="w-[1440px] h-[600px] relative">
        <div class="w-[1440px] h-[600px] left-0 top-0 absolute bg-red-300/opacity-40"></div>
        <div class="left-[333px] top-[40px] text-center">
            <span class="text-stone-500 text-[25px] font-normal font-['Quicksand']">Pengalaman mereka bersama </span>
            <span class="text-stone-500 text-[25px] font-bold font-['Quicksand']">SayangDibuang</span></div>
        <div class="w-[420px] h-[420px] left-[70px] top-[135px] absolute">
            <div class="w-[420px] h-[420px] left-0 top-0 absolute bg-[#DFAEA1] rounded-[10px]"></div>
            <div class="w-[316px] h-[205px] left-[52px] top-[80px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">“Suka banget sama aplikasinya! bisa dapet makanan enak tapi harganya murah > <”</div>
            <div class="w-[316px] h-24 left-[52px] top-[256px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">~ Sasha ~</div>
        </div>
        <div class="w-[420px] h-[420px] left-[510px] top-[135px] absolute">
            <div class="w-[420px] h-[420px] left-0 top-0 absolute bg-[#DFAEA1] rounded-[10px]"></div>
            <div class="w-[316px] h-24 left-[52px] top-[256px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">~ Sasha ~</div>
            <div class="w-[316px] h-[205px] left-[52px] top-[80px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">“Suka banget sama aplikasinya! bisa dapet makanan enak tapi harganya murah > <”</div>
        </div>
        <div class="w-[420px] h-[420px] left-[950px] top-[135px] absolute">
            <div class="w-[420px] h-[420px] left-0 top-0 absolute bg-[#DFAEA1] rounded-[10px]"></div>
            <div class="w-[316px] h-24 left-[52px] top-[256px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">~ Sasha ~</div>
            <div class="w-[316px] h-[205px] left-[58px] top-[80px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[25px]">“Suka banget sama aplikasinya! bisa dapet makanan enak tapi harganya murah > <”</div>
        </div>
        </div>
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
        <div class="w-60 h-[52px] px-3 left-[517px] top-[462px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-indigo-950">
            <button class="text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat lebih lanjut</button>
        </div>
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
