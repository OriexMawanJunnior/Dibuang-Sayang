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

<div class="flex justify-center">
    <div class="Group1 w-[1300px] h-[100px] relative mt-[63px]">
        <div class="Rectangle46 w-[1300px] h-[100px] left-0 top-0 absolute bg-white rounded-[5px] shadow"></div>
        <div class="BelanjaDiSekitarmuDonut left-[36px] top-[37px] absolute"><span style="text-black text-xl font-medium font-['Quicksand']">Belanja</span><span style="text-black text-xl font-normal font-['Quicksand']"> > </span><span style="text-black text-xl font-medium font-['Quicksand']">Di sekitarmu</span><span style="text-black text-xl font-normal font-['Quicksand']"> > Donut </span></div>
      </div>
</div>

<div class="flex justify-center mt-[33px] mb-[56px]">
    <div class="Product w-[1300px] h-[1042px] relative">
        <img class="Rectangle50 w-[595px] h-[595px] left-0 top-0 absolute rounded-[10px]" src="https://via.placeholder.com/595x595" />
        <div class="Frame24 w-[639px] h-48 left-[660px] top-0 absolute">
          <div class="Rectangle49 w-[639px] h-48 left-0 top-0 absolute bg-white rounded-[10px] shadow"></div>
          <div class="PinAltLight w-6 h-6 left-[273px] top-[114px] absolute">
            <img class="Subtract w-[0px] h-[0px] left-0 top-0 absolute border border-neutral-800" src="https://via.placeholder.com/0x0" />
            <div class="Ellipse40 w-[17px] h-1.5 left-[3.50px] top-[15.50px] absolute rounded-full border border-neutral-800"></div>
            <div class="Ellipse5 w-2 h-2 left-[8px] top-[6px] absolute rounded-full border border-neutral-800"></div>
          </div>
          <img class="Rectangle36 w-[191px] h-[136px] left-[29px] top-[27px] absolute rounded-[10px]" src="https://via.placeholder.com/191x136" />
          <div class="IconEmojioneStar w-10 h-10 left-[253px] top-[55px] absolute"></div>
          <div class="LihatLokasi left-[305px] top-[118px] absolute text-black text-xs font-normal font-['Quicksand']">Lihat lokasi | </div>
          <div class="010Penilaian left-[404px] top-[115px] absolute text-black text-base font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
          <div class="TokoKue105Km left-[274px] top-[84px] absolute text-black text-base font-normal font-['Quicksand']">Toko Kue • 1.05 km  </div>
          <div class="MichelleBakery left-[273px] top-[45px] absolute text-black text-[23px] font-semibold font-['Quicksand']">Michelle Bakery</div>
        </div>
        <div class="Donut left-0 top-[616px] absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Donut</div>
        <div class="Informasi w-[639px] h-[330px] left-[660px] top-[232px] absolute">
          <div class="Rectangle51 w-[639px] h-[75px] left-0 top-[255px] absolute bg-red-300 rounded-[10px] border border-stone-500"></div>
          <div class="KualitasMakananTelahDijaminOlehPenjualDanSepenuhnyaMenjadiTanggungJawabPenjual w-[585px] left-[27px] top-[268px] absolute text-stone-500 text-xl font-medium font-['Quicksand']">Kualitas makanan telah dijamin oleh penjual dan sepenuhnya menjadi tanggung jawab penjual</div>
          <div class="Stok left-0 top-[59px] absolute text-black text-xl font-normal font-['Quicksand']">Stok</div>
          <div class="KategoriMakanan left-0 top-[105px] absolute text-black text-xl font-normal font-['Quicksand']">Kategori Makanan</div>
          <div class="DijualSampai left-0 top-[151px] absolute text-black text-xl font-normal font-['Quicksand']">Dijual Sampai</div>
          <div class="SebaiknyaDikonsumsiSebelum left-0 top-[197px] absolute text-black text-xl font-normal font-['Quicksand']">Sebaiknya dikonsumsi sebelum</div>
          <div class="Tersedia left-[330px] top-[59px] absolute text-black text-xl font-medium font-['Quicksand']">3 Tersedia</div>
          <div class="RotiDanKue left-[330px] top-[105px] absolute text-black text-xl font-medium font-['Quicksand']">Roti dan Kue</div>
          <div class="Mei2024 left-[330px] top-[151px] absolute text-black text-xl font-medium font-['Quicksand']">6 Mei 2024</div>
          <div class="Mei2024 left-[330px] top-[197px] absolute text-black text-xl font-medium font-['Quicksand']">7 Mei 2024</div>
          <div class="InformasiProduk left-0 top-0 absolute text-indigo-900 text-3xl font-semibold font-['Quicksand']">Informasi Produk</div>
        </div>
        <div class="Harga w-[350px] h-[54px] left-0 top-[693px] absolute">
          <div class="Rectangle40 w-[90px] h-[54px] left-0 top-0 absolute bg-red-300 rounded-sm"></div>
          <div class=" left-[21px] top-[11px] absolute text-black text-[25px] font-normal font-['Quicksand']">50%</div>
          <div class="Rp12000 left-[116px] top-[11px] absolute text-black/opacity-50 text-[25px] font-normal font-['Quicksand'] line-through">Rp 12.000</div>
          <div class="Rp6000 left-[245px] top-[11px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Rp 6.000</div>
        </div>
        <div class="Frame29 h-12 pl-[13px] left-0 top-[780px] absolute justify-end items-center inline-flex">
          <div class="Waktu w-[522px] self-stretch relative">
            <div class="WaktuPengambilanHariIni07002300 left-[48px] top-[10px] absolute text-black/opacity-50 text-[25px] font-normal font-['Quicksand']">Waktu pengambilan hari ini, 07.00 - 23.00</div>
            <div class="TimeLight w-12 h-12 left-0 top-0 absolute opacity-50 flex-col justify-start items-start inline-flex">
              <div class="Ellipse54 w-8 h-8 rounded-full border border-neutral-800"></div>
            </div>
          </div>
        </div>
        <div class="PrimaryButton w-[200px] h-[52px] px-3 left-[660px] top-[595px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
          <div class="SeeMore w-[115px] text-center text-indigo-900 text-base font-semibold font-['Quicksand'] leading-[14px]">1</div>
        </div>
        <button class="PrimaryButton hover:bg-slate-400 w-[200px] h-[52px] px-3 left-[880px] top-[595px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
          <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Tambahkan ke Keranjang</div>
        </button>
        <button class="PrimaryButton hover:bg-slate-400 w-[200px] h-[52px] px-3 left-[1100px] top-[595px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
          <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Beli Sekarang</div>
        </button>
        <div class="AddRingLight w-[30px] h-[30px] left-[816px] top-[606px] absolute">
          <div class="Ellipse47 w-[22.50px] h-[22.50px] left-[3.75px] top-[3.75px] absolute bg-indigo-900 rounded-full"></div>
        </div>
        <div class="RemoveLight w-[30px] h-[30px] left-[674px] top-[606px] absolute">
          <div class="Ellipse47 w-[22.50px] h-[22.50px] left-[3.75px] top-[3.75px] absolute bg-indigo-900 rounded-full"></div>
        </div>
        <div class="Line14 w-[640px] h-[0px] left-[660px] top-[673px] absolute border border-indigo-900/opacity-80"></div>
        <div class="Line15 w-[640px] h-[0px] left-[660px] top-[775px] absolute border border-indigo-900/opacity-80"></div>
        <div class="Line16 w-[640px] h-[0px] left-[660px] top-[1042px] absolute border border-indigo-900/opacity-80"></div>
        <div class="Deskripsi w-[399px] h-[72px] left-[683px] top-[700px] absolute">
          <div class="Deskripsi left-[67px] top-[1px] absolute text-indigo-900 text-3xl font-semibold font-['Quicksand']">Deskripsi</div>
          <div class="DonutYangDilapisiSelaiStrawberry left-[67px] top-[47px] absolute text-black text-xl font-normal font-['Quicksand']">Donut yang dilapisi selai strawberry</div>
          <div class="InfoAltLight w-10 h-10 left-0 top-0 absolute">
            <div class="Ellipse47 w-[26.67px] h-[26.67px] left-[33.33px] top-[6.67px] absolute origin-top-left rotate-180 rounded-full border border-indigo-900"></div>
          </div>
        </div>
        <div class="Ulasan w-[616px] h-[225px] left-[683px] top-[794px] absolute">
          <div class="KualitasnyaSangatBagusWalaupunHarganyaMurahTerimakasihSayangdibuang w-[549px] left-[67px] top-[97px] absolute text-black text-xl font-normal font-['Quicksand']">Kualitasnya sangat bagus walaupun harganya murah! Terimakasih SayangDibuang</div>
          <div>
          <button class="PrimaryButton  hover:bg-indigo-950 w-[71px] h-[52px] px-3 left-[539px] top-[173px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
            <div class="SeeMore text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Semua</div>
          </button>
        </div>
          <div class="Ulasan left-[67px] top-[1px] absolute text-indigo-900 text-3xl font-semibold font-['Quicksand']">Ulasan</div>
          <div class="ChatLight w-10 h-10 left-0 top-0 absolute">
            <div class="Rectangle1 w-[26.67px] h-[26.67px] left-[6.67px] top-[6.67px] absolute rounded-tl-[9px] rounded-tr-[9px] rounded-bl-[9px] rounded-br-sm border border-indigo-900"></div>
          </div>
          <div class="Group10 w-[108px] h-10 left-[67px] top-[49px] absolute">
            <div class="S left-[50px] top-[5px] absolute text-black text-[15px] font-normal font-['Quicksand']">S****</div>
            <div class="Ellipse70 w-10 h-10 left-0 top-0 absolute bg-slate-300 rounded-full"></div>
            <div class="Frame30 w-[58px] h-2.5 left-[50px] top-[24px] absolute justify-start items-start gap-0.5 inline-flex"></div>
          </div>
          <div class="5Dari10Penilaian left-[204px] top-[12px] absolute text-stone-500 text-base font-medium font-['Quicksand']">5/5 dari 10 penilaian</div>
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
