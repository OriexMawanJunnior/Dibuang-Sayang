<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sayang Dibuang</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="font-['Quicksand'] bg-[#FFFCF5] overflow-x-hidden">
    @include('layout.navbar')
    <div class="Banner flex justify-center">
        <div class="Banner w-[1440px] h-[350px] relative">
            <div class="Banner w-[1440px] h-[300px] left-0 top-0 absolute bg-[#DFAEA1]"></div>
            <div class="Kategori left-[70px] top-[150px] absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Kategori</div>
            <div class="MakananBerat left-[70px] top-[208px] absolute text-indigo-900 text-[25px] font-normal font-['Quicksand']">Makanan Berat</div>
            <div class="Group1 w-[1300px] h-[100px] left-[70px] top-[250px] absolute">
            <div class="Rectangle46 w-[1300px] h-[100px] left-0 top-0 absolute bg-white rounded-[5px] shadow"></div>
            <div class="BelanjaKategoriMakananBerat left-[36px] top-[37px] absolute"><span style="text-black text-xl font-medium font-['Quicksand']">Belanja</span><span style="text-black text-xl font-normal font-['Quicksand']"> > </span><span style="text-black text-xl font-medium font-['Quicksand']">Kategori </span><span style="text-black text-xl font-normal font-['Quicksand']">> Makanan Berat </span></div>
            </div>
        </div>
    </div>

    <div class="Search flex justify-center mt-[30px]">
        <div class="SearchBar w-[1267px] h-[60px] relative">
            <div class="Search w-[530px] h-[60px] left-[400px] top-0 absolute">
              <div class="Rectangle6 w-[530px] h-[60px] left-0 top-0 absolute bg-white rounded-[10px] shadow border border-neutral-400"></div>
              <div class="CariMakananUntukDiselamatkan left-[71.17px] top-[18px] absolute text-black/opacity-50 text-lg font-normal font-['Quicksand']">Cari makanan untuk diselamatkan</div>
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
            <div class="Frame3 w-[60px] h-[60px] left-0 top-0">
              <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
              <div class="Location w-[35px] h-[35px] left-[13px] top-[12px] absolute">
              </div>
              <div class="LokasiSaatIni left-[73px] top-[14px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Lokasi Saat ini</div>
            </div>
          </div>


    </div>

    <div class="Group3 absolute justify-center mt-[30px] ">
        <div class="Group3 w-[1300px] h-[91.13px] relative">
            <div class="Line6 w-[1300px] h-[0px] left-0 top-[91.13px] absolute border border-indigo-900/opacity-80"></div>
            <div class="Filters w-[107px] h-7 left-0 top-[31px] absolute">
              <div class="Filters left-0 top-0 absolute text-black text-[22px] font-semibold font-['Quicksand']">Filters</div>
              <div class="Adjust w-[25px] h-[25px] left-[82px] top-[2px] absolute">
              </div>
            </div>
            <div class="Line13 w-10 h-[0px] left-[147px] top-[66px] absolute origin-top-left -rotate-90 border border-indigo-900/opacity-80"></div>
            <div class="Sort w-[300px] h-[29px] left-[165px] top-[31px] absolute">
              <div class="DiurutkanDari left-0 top-0 absolute text-black text-[22px] font-semibold font-['Quicksand']">Diurutkan dari</div>
              <div class="Terpopuler left-[163px] top-[1px] absolute text-black text-[22px] font-medium font-['Quicksand']">Terpopuler</div>
              <div class="Terpopuler left-[163px] top-[1px] absolute text-black text-[22px] font-medium font-['Quicksand']">Terpopuler</div>
              <div class="ArrowDown w-5 h-5 left-[280px] top-[7px] absolute">
              </div>
            </div>
            <div class="Menampilkan9ProdukUntukMakananBerat19Dari35 left-[670px] top-[31px] absolute text-right"><span style="text-black text-[22px] font-medium font-['Quicksand']">Menampilkan 9 produk untuk</span><span style="text-black text-[22px] font-semibold font-['Quicksand']"> “Makanan Berat” </span><span style="text-black text-[22px] font-medium font-['Quicksand']">(</span><span style="text-black text-[22px] font-semibold font-['Quicksand']">1 - 9 </span><span style="text-black text-[22px] font-medium font-['Quicksand']">dari</span><span style="text-black text-[22px] font-semibold font-['Quicksand']"> 35</span><span style="text-black text-[22px] font-normal font-['Quicksand']">)</span></div>
            <div class="Line5 w-[1300px] h-[0px] left-0 top-[0.13px] absolute border border-indigo-900/opacity-80"></div>
          </div>
    </div>

    <div class="flex justify-center mt-[30px]">
        <div class="Product w-[970px] h-[1390px] flex-col justify-start items-start gap-[50px] inline-flex">
            <div class="Frame13 justify-start items-start gap-5 inline-flex">
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO </div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
            </div>
            <div class="Frame14 justify-start items-start gap-5 inline-flex">
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
            </div>
            <div class="Frame15 justify-start items-start gap-5 inline-flex">
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
              <div class="Product w-[310px] h-[430px] relative">
                <div class="Rectangle32 w-[310px] h-[430px] left-0 top-0 absolute bg-white rounded-[10px] shadow border-2"></div>
                <img class="Rectangle36 w-60 h-[170px] left-[34px] top-[22px] absolute rounded-[10px]" src="https://via.placeholder.com/240x170" />
                <div class="Rectangle40 w-[45px] h-[30px] left-[13px] top-[280px] absolute bg-red-300 rounded-sm"></div>
                <div class=" left-[16px] top-[282px] absolute text-black text-xl font-normal font-['Quicksand']">50%</div>
                <div class="Donut left-[13px] top-[236px] absolute text-black text-[25px] font-semibold font-['Quicksand']">Donut</div>
                <div class="05KmJCo left-[13px] top-[198px] absolute text-black text-xl font-normal font-['Quicksand']">1.05 km • J.CO</div>
                <div class="010Penilaian left-[58px] top-[327px] absolute text-black text-xl font-normal font-['Quicksand']">5.0 • 10 penilaian</div>
                <div class="000 left-[62px] top-[282px] absolute text-black/opacity-50 text-xl font-normal font-['Quicksand'] line-through">12.000</div>
                <div class="000 left-[128px] top-[282px] absolute text-black text-xl font-semibold font-['Quicksand']">6.000</div>
                <div class="IconEmojioneStar w-10 h-10 left-[13px] top-[319px] absolute"></div>
                <div class="PrimaryButton w-[107px] h-[52px] px-3 left-[100px] top-[364px] absolute bg-slate-300 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                  <div class="SeeMore w-[115px] text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Lihat</div>
                </div>
                <div class="Frame2 w-[60px] h-[60px] left-[13px] top-[22px] absolute">
                  <div class="Ellipse10 w-[60px] h-[60px] left-0 top-0 absolute bg-white rounded-full border border-black"></div>
                  <div class="Heart w-[35px] h-[35px] left-[12px] top-[12px] absolute">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="PrimaryButton w-[185px] h-[52px] px-3 bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
            <div class="SeeMore text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Tampilkan Lebih Banyak</div>
          </div>
          <div class="Filters w-[319.62px] h-[787.03px] relative">
            <div class="Jarak w-[310px] h-[150px] left-0 top-[637.03px] absolute">
              <div class="Jarak left-[0.04px] top-0 absolute text-black text-xl font-medium font-['Quicksand']">Jarak</div>
              <div class="Jarak48Km left-[0.04px] top-[127px] absolute text-black text-lg font-medium font-['Quicksand']">Jarak: 4.8 km</div>
              <div class="Trash w-[30px] h-[30px] left-[280px] top-[120px] absolute">
              </div>
              <div class="M left-[0.04px] top-[80px] absolute text-black text-[15px] font-medium font-['Quicksand']">100 m</div>
              <div class="Km left-[269px] top-[80px] absolute text-black text-[15px] font-medium font-['Quicksand']">10 km</div>
              <div class="Frame6 w-[310px] h-3 left-0 top-[55px] absolute justify-center items-center inline-flex">
                <div class="Ellipse1 w-3 h-3 bg-white rounded-full shadow border border-zinc-100"></div>
              </div>
            </div>
            <div class="Line8 w-[309.96px] h-[0px] left-[0.04px] top-[607.03px] absolute border border-indigo-900/opacity-80"></div>
            <div class="Harga w-[309.96px] h-[203px] left-[0.05px] top-[374.03px] absolute">
              <div class="Frame12 w-[223px] h-[145px] left-0 top-[58px] absolute flex-col justify-start items-start gap-[15px] inline-flex">
                <div class="Kategori w-[197px] h-[25px] relative">
                  <div class="DibawahRp15000 left-[37px] top-[1px] absolute text-black text-lg font-medium font-['Quicksand']">Dibawah Rp 15.000</div>
                  <div class="Frame16 w-[25px] h-[25px] left-0 top-0 absolute">
                    <div class="Rectangle47 w-[25px] h-[25px] left-0 top-0 absolute bg-slate-300 rounded-sm border border-neutral-400"></div>
                    <div class="Checkmark w-5 h-5 left-[2.96px] top-[3px] absolute">
                    </div>
                  </div>
                </div>
                <div class="Kategori w-[219px] h-[25px] relative">
                  <div class="Rp15000Rp25000 left-[37px] top-[1px] absolute text-black text-lg font-medium font-['Quicksand']">Rp 15.000 - Rp 25.000</div>
                  <div class="Rectangle47 w-[25px] h-[25px] left-0 top-0 absolute rounded-sm border border-neutral-400"></div>
                </div>
                <div class="Kategori w-[223px] h-[25px] relative">
                  <div class="Rp25000Rp40000 left-[37px] top-[1px] absolute text-black text-lg font-medium font-['Quicksand']">Rp 25.000 - Rp 40.000</div>
                  <div class="Rectangle47 w-[25px] h-[25px] left-0 top-0 absolute rounded-sm border border-neutral-400"></div>
                </div>
                <div class="Kategori w-[181px] h-[25px] relative">
                  <div class="DiatasRp40000 left-[37px] top-[1px] absolute text-black text-lg font-medium font-['Quicksand']">Diatas Rp 40.000</div>
                  <div class="Rectangle47 w-[25px] h-[25px] left-0 top-0 absolute rounded-sm border border-neutral-400"></div>
                </div>
              </div>
              <div class="Harga left-0 top-0 absolute text-black text-xl font-medium font-['Quicksand']">Harga</div>
              <div class="Trash w-[30px] h-[30px] left-[279.96px] top-[173px] absolute">
              </div>
            </div>
            <div class="Line7 w-[310px] h-[0px] left-0 top-[344.03px] absolute border border-indigo-900/opacity-80"></div>
            <div class="Kategori w-[310px] h-[311px] left-0 top-[3.03px] absolute">
              <div class="PrimaryButton w-[133px] h-[52px] px-3 left-[147px] top-[58px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Makanan Vegan</div>
              </div>
              <div class="PrimaryButton w-[127px] h-[52px] px-3 left-0 top-[58px] absolute bg-slate-300 rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Makanan Berat</div>
              </div>
              <div class="PrimaryButton w-[110px] h-[52px] px-3 left-0 top-[125px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Roti dan Kue</div>
              </div>
              <div class="PrimaryButton w-[133px] h-[52px] px-3 left-[130px] top-[125px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Bahan Makanan</div>
              </div>
              <div class="PrimaryButton w-[131px] h-[52px] px-3 left-0 top-[192px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Buah dan Sayur</div>
              </div>
              <div class="PrimaryButton w-[79px] h-[52px] px-3 left-[151px] top-[192px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Camilan</div>
              </div>
              <div class="PrimaryButton w-[85px] h-[52px] px-3 left-0 top-[259px] absolute rounded-[10px] border border-indigo-900 flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-indigo-900 text-sm font-semibold font-['Quicksand'] leading-[14px]">Minuman</div>
              </div>
              <div class="Kategori left-0 top-0 absolute text-black text-xl font-medium font-['Quicksand']">Kategori</div>
              <div class="Trash w-[30px] h-[30px] left-[280px] top-[281px] absolute">
              </div>
            </div>
            <div class="Line12 w-[787.03px] h-[0px] left-[319.62px] top-[787.03px] absolute origin-top-left -rotate-90 border border-indigo-900/opacity-80"></div>
          </div>
    </div>

    @include('layout.footer')

</body>
</html>
