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

<div class="flex justify-center mt-[30px] mb-30[px]">
<div class="Banner w-[1364px] h-[550px] relative">
    <div class="Banner w-[1300px] h-[550px] left-[32px] top-0 absolute bg-indigo-900 rounded-[10px]">
    </div>
    <div class="Ellipse67 w-[65px] h-[65px] left-0 top-[242px] absolute bg-zinc-300 rounded-full hover:bg-zinc-400">
        <div class="ArrowBack w-12 h-[49.96px] mt-[5px] mr-[5px]">
            <img src="img/arr-left.png" class="" alt="">
        </div>
    </div>
    <div class="Ellipse68 w-[65px] h-[65px] left-[1299px] top-[242px] absolute bg-zinc-300 rounded-full hover:bg-zinc-400">
        <div class="ArrowForward w-12 h-[49.96px] mt-[5px] ml-[5px] ">
            <img src="img/arr-right.png" class="" alt="">
        </div>
    </div>



  </div>
</div>

<div class="mb-[30px] mt-[30px] flex justify-center">
    <div class="SearchBar w-[1267px] h-[60px] relative ">
    <div class="Search w-[530px] h-[60px] left-[400px] top-0 absolute">
        <img src="img/search-magn.png" class="absolute w-[30px] h-[30px] mt-[15px] ml-[5px]" alt="">
        <input type="text" name="" placeholder="Cari makanan untuk diselematkan" class=" bg-white rounded-[10px] shadow border border-neutral-400 w-[530px] h-[60px] text-black/opacity-50 text-lg font-normal font-['Quicksand'] px-10" id="">
    </div>
    <div class="Frame1 w-[60px] h-[60px] left-[1207px] top-0 absolute">
      <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
      <div class="Cart6 w-[35px] h-[35px] left-[12px] top-[13px] absolute">
      </div>
      <div class="Frame2 w-[60px] h-[60px] left-0 top-0 absolute">
        <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
        <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
        </div>
      </div>
    </div>
    <div class="Frame3 w-[60px] h-[60px] left-0 top-0 absolute">
      <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black">

      </div>
      <div class="Location w-[35px] h-[35px] left-[13px] top-[12px] absolute">
        <img src="img/gps.png" alt="">

      </div>
      <div class="LokasiSaatIni left-[73px] top-[14px] absolute text-black text-[25px] truncate font-semibold font-['Quicksand']">Lokasi Saat ini

      </div>

    </div>
  </div></div>

  <div class="flex justify-center mt-[30px] mb-[80px]">
  <div class="Kategori w-[1300px] h-[550px] relative">
    <div class="Rectangle15 w-[1300px] h-[550px] left-0 top-0 absolute bg-white rounded-[10px] shadow"></div>
    <div class="Kategori w-[153.11px] h-[68px] left-[51px] top-[32px] absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Kategori</div>
    <div class="Rectangle17 w-[253.61px] h-[270px] left-[365.39px] top-[112px] absolute bg-zinc-300 rounded-[10px]"></div>
    <div class="Frame6 w-[1198.62px] h-[318px] left-[51px] top-[112px] absolute justify-start items-start gap-[61px] inline-flex">
      <div class="Kategori1 w-[253.61px] h-[318px] relative">
        <div class="MakananBerat w-[253.61px] h-9 left-0 top-[282px] absolute text-center text-black text-[25px] font-medium font-['Quicksand']">Makanan Berat</div>
        <div class="Rectangle7 w-[253.61px] h-[270px] left-0 top-0 absolute bg-zinc-300 rounded-[10px]"></div>
      </div>
      <div class="Kategori2 w-[254px] h-[318px] relative">
        <div class="MakananVegan w-[253.61px] h-9 left-[0.39px] top-[282px] absolute text-center text-black text-[25px] font-medium font-['Quicksand']">Makanan Vegan</div>
        <div class="Rectangle19 w-[253.61px] h-[270px] left-0 top-0 absolute bg-zinc-300 rounded-[10px]"></div>
      </div>
      <div class="Kategori3 w-[254px] h-[318px] relative">
        <div class="RotiDanKue w-[253.61px] h-9 left-[0.39px] top-[282px] absolute text-center text-black text-[25px] font-medium font-['Quicksand']">Roti dan Kue</div>
        <div class="Rectangle19 w-[253.61px] h-[270px] left-0 top-0 absolute bg-zinc-300 rounded-[10px]"></div>
      </div>
      <div class="Kategori4 w-[254px] h-[318px] relative">
        <div class="BahanMakanan w-[253.61px] h-9 left-[0.39px] top-[282px] absolute text-center text-black text-[25px] font-medium font-['Quicksand']">Bahan Makanan</div>
        <div class="Rectangle19 w-[253.61px] h-[270px] left-0 top-0 absolute bg-zinc-300 rounded-[10px]"></div>
      </div>
    </div>
    <div class="Slider w-[170px] h-[50px] left-[1078px] top-[442px] absolute">
      <button class="PrimaryButton w-[60px] h-[50px] px-3 left-[110px] top-0 absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-slate-400">
        <div class="PesanSekarang text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]">></div>
      </button>
      <button class="PrimaryButton w-[60px] h-[50px] px-3 left-0 top-0 absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-slate-400">
        <div class="PesanSekarang text-center text-indigo-900 text-3xl font-medium font-['Poppins'] leading-[14px]"><</div>
      </button>
    </div>
  </div>
</div>


<div class=" flex justify-center mb-[80px]">
  <div class="BaruDiSayangdibuang w-[1300px] h-[541px] relative">
    <div class="DiSekitarmu left-0 top-0 absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Di Sekitarmu</div>
    <div class="LihatSekitarAdaMakananYangBisaDiselamatkan left-0 top-[58px] absolute text-indigo-900 text-[25px] font-normal font-['Quicksand']">Lihat sekitar, ada makanan yang bisa diselamatkan!</div>
    <div class="Frame10 w-[1300px] h-[430px] left-0 top-[111px] absolute justify-start items-start gap-5 inline-flex">
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
    </div>
    <button class="PrimaryButton hover:bg-indigo-950 w-[162px] h-[52px] px-3 left-[1138px] top-[16px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
      <div class="SeeMore text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Semua</div>
    </button>
  </div>
</div>

<div class="flex justify-center mb-[80px]">
  <div class="Rekomendasi w-[1300px] h-[541px] relative">
    <div class="Rekomendasi left-0 top-0 absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Rekomendasi</div>
    <div class="RekomendasiKhususUntukmu left-0 top-[58px] absolute text-indigo-900 text-[25px] font-normal font-['Quicksand']">Rekomendasi khusus untukmu!</div>
    <div class="Frame10 w-[1300px] h-[430px] left-0 top-[111px] absolute justify-start items-start gap-5 inline-flex">
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
      <div class="Product w-[310px] h-[430px] relative">
        <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
        <img class="Rectangle36 w-[269px] h-[200px] left-[21px] top-[15px] absolute rounded-[10px] border" src="https://via.placeholder.com/269x200" />
        <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[338px] absolute bg-red-300 rounded-sm"></div>
        <div class=" left-[16px] top-[340px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
        <div class="Donut left-[13px] top-[261px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
        <div class="05Km left-[13px] top-[223px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km</div>
        <div class="JCo left-[13px] top-[299px] absolute text-black text-xl font-normal font-['Quicksand']">J.CO</div>
        <div class="010Penilaian left-[58px] top-[385px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
        <div class="000 left-[62px] top-[340px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
        <div class="000 left-[128px] top-[340px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
        <div class="IconEmojioneStar w-10 h-10 px-[1.25px] py-[1.88px] left-[13px] top-[377px] absolute justify-center items-center inline-flex"></div>
        <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[15px] absolute">
          <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
          <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
          </div>
        </div>
      </div>
    </div>
    <button class="PrimaryButton hover:bg-indigo-950 w-[162px] h-[52px] px-3 left-[1138px] top-[16px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
      <div class="SeeMore text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Semua</div>
    </button>
  </div>
</div>

<div class="flex justify-center mb-[80px]">
    <div class="RestoTerdekat w-[1300px] h-[463px] relative">
        <div class="RestoranTerdekat left-0 top-[17px] absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Restoran Terdekat</div>
        <div class="Frame11 w-[1300px] h-[368px] left-0 top-[95px] absolute justify-start items-start gap-5 inline-flex">
          <div class="Product w-[310px] relative">
            <div class="Rectangle32 w-[310px] h-[310px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
            <div class="LoremIpsum left-[78px] top-[337px] absolute text-black text-[25px] font-medium font-['Quicksand']">Lorem Ipsum</div>
          </div>
          <div class="Product w-[310px] relative">
            <div class="Rectangle32 w-[310px] h-[310px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
            <div class="LoremIpsum left-[78px] top-[337px] absolute text-black text-[25px] font-medium font-['Quicksand']">Lorem Ipsum</div>
          </div>
          <div class="Product w-[310px] relative">
            <div class="Rectangle32 w-[310px] h-[310px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
            <div class="LoremIpsum left-[78px] top-[337px] absolute text-black text-[25px] font-medium font-['Quicksand']">Lorem Ipsum</div>
          </div>
          <div class="Product w-[310px] relative">
            <div class="Rectangle32 w-[310px] h-[310px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
            <div class="LoremIpsum left-[78px] top-[337px] absolute text-black text-[25px] font-medium font-['Quicksand']">Lorem Ipsum</div>
          </div>
        </div>
        <button class="PrimaryButton hover:bg-indigo-950 w-[162px] h-[52px] px-3 left-[1138px] top-0 absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
          <div class="SeeMore text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Semua</div>
        </button>
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
