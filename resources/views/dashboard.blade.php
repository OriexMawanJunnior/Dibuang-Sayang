<x-buyer-layout>
    <div class="hidden sm:flex">
        <div class="container flex justify-center mx-auto ">
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
    </div>
    
    <div class="flex justify-center mt-[18px]">
        <div class="Frame42 w-[290px] h-10 relative sm:hidden">
        <div class="Rectangle6 w-[290px] h-10 left-0 top-0 absolute bg-white rounded-[10px] shadow border border-neutral-400"></div>
        <div class="CariDiSayangdibuang left-[37px] top-[11px] absolute text-black/opacity-50 text-sm font-normal font-['Quicksand']">Cari di SayangDibuang</div>
        </div>
    </div>
    
    {{-- Image placeholder --}}
    
        <div class="relative  z-0 mt-5    bg-gray-200 h-[800px] w-screen sm:flex hidden items-center rounded-lg justify-center ">
            <span class="text-gray-400 text-4xl">Image Placeholder</span>
        </div>
    
        <div class="container flex space-x-[50px] space-y-[40px]">
            <div class="relative   mt-[100px] ml-[275px]">
    
            </div>
        </div>
    <div class="flex justify-center">
        <div class="Frame47 w-[430px] h-[300px] justify-center items-center inline-flex sm:hidden">
            <div class="Banner w-[430px] h-[300px] relative">
              <img class="Banner w-[430px] h-[300px] left-0 top-0 absolute" src="https://via.placeholder.com/430x300" />
              <div class="DukungPelestarianLingkunganDenganMembeliMakananBerlebihDenganDiskon50 left-[32px] top-[133px] absolute text-black text-[15px] font-semibold font-['Quicksand']">Dukung pelestarian lingkungan <br/>dengan membeli makanan berlebih <br/>dengan diskon 50%.</div>
              <div class="SustainabilityStartsOnYourPlate left-[32px] top-[39px] absolute"><span class="text-indigo-900 text-3xl font-bold font-['Quicksand']">Sustainability Starts <br/>on</span><span class="text-black text-3xl font-bold font-['Quicksand']"> Your Plate</span></div>
              <div class="PrimaryButton w-[150px] h-[52px] px-3 left-[32px] top-[209px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex">
                <div class="SeeMore text-center text-slate-300 text-xs font-semibold font-['Quicksand'] leading-[14px]">Selamatkan Makanan</div>
              </div>
            </div>
          </div>
        </div>
    
    
    <div class="sm:flex justify-center hidden">
        <div class="w-[1300px] h-[645px] relative place-content-center">
          <div class="left-0 top-0 absolute text-indigo-900 text-[35px] font-bold font-['Quicksand']">Di Sekitarmu</div>
          <div class="w-60 h-[52px] px-3 left-[530px] top-[593px] absolute bg-indigo-900 rounded-[10px] flex-col justify-center items-center gap-[5px] inline-flex hover:bg-indigo-950">
            <button class="text-center text-slate-300 text-sm font-semibold font-['Quicksand'] leading-[14px]">Mulai Berbelanja</button>
          </div>
          @foreach($products as $product)
                        @php
                            $imageUrl = $product->getFirstMediaUrl('products') ?: 'https://via.placeholder.com/269x200';
                        @endphp
                        <x-product-card
                            image="{{ asset($imageUrl) }}"
                            discount="50%"
                            title="{{ $product->name }}"
                            distance="1.05 km"
                            store="{{ $product->store->name }}"
                            rating="5.0"
                            reviews="10"
                            originalPrice="{{ $product->price }}"
                            discountedPrice="{{ $product->discounted_price }}"
                            id="{{ $product->id }}"
                        />
                    @endforeach
        </div>
      </div>
    </div>
    
    <div class="sm:flex w-screen mt-[80px] h-[600px] relative bg-[#BABDE2] bg-opacity-45 space-y-4 hidden">
        <img class="w-[500px] h-[500px] left-[73px] top-[50px] absolute" src="img/design2.png" />
        <div class="w-[750px] h-[219px] left-[623px] top-[210px] absolute text-center text-black text-xl font-normal font-['Quicksand'] leading-[30px]">Sumbangan utama pemborosan ini datang dari sektor hotel, restoran, katering, supermarket, dan individu yang sering menyisakan makanan mereka<br/>&<br/>dampak ekonominya pun signifikan, dengan kerugian mencapai</div>
        <div class="w-[318px] h-[59px] left-[839px] top-[456px] absolute text-center text-stone-500 text-xl font-normal font-['Quicksand'] leading-[30px]">Kajian BAPPENAS (2021)</div>
        <div class="w-[750px] h-[142px] left-[623px] top-[74px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">Setiap tahun, Indonesia membuang sebanyak 23 - 48 juta ton makanan.</div>
        <div class="w-[750px] h-[142px] left-[620px] top-[354px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">Rp 213 – 551 triliun/tahun</div>
    </div>
    
    
    <div class="flex justify-center">
    <div class="Group12 w-[430px] h-[738px] relative  bg-[#BABDE2] sm:hidden">
        <div class="Banner w-[430px] h-[738px] left-0 top-0 absolute bg-slate-300/opacity-40"></div>
        <div class="KajianBappenas2021 left-[147px] top-[668px] absolute text-center text-stone-500 text-xs font-normal font-['Quicksand'] leading-[30px]">Kajian BAPPENAS (2021)</div>
        <div class="Rp213551TriliunTahun left-[63px] top-[637px] absolute text-center text-indigo-900 text-[25px] font-bold font-['Quicksand']">Rp 213 – 551 triliun/tahun</div>
        <div class="SumbanganUtamaPemborosanIniDatangDariSektorHotelRestoranKateringSupermarketDanIndividuYangSeringMenyisakanMakananMerekaDampakEkonominyaPunSignifikanDenganKerugianMencapai left-[49px] top-[489px] absolute text-center text-black text-xs font-normal font-['Quicksand'] leading-tight">Sumbangan utama pemborosan ini datang dari sektor hotel, <br/>restoran, katering, supermarket, dan individu <br/>yang sering menyisakan makanan mereka<br/>&<br/>dampak ekonominya pun signifikan, dengan kerugian <br/>mencapai</div>
        <div class="SetiapTahunIndonesiaMembuangSebanyak2348JutaTonMakanan left-[60px] top-[368px] absolute text-center text-indigo-900 text-[25px] font-bold font-['Quicksand']">Setiap tahun, Indonesia <br/>membuang sebanyak <br/>23 - 48 juta ton makanan.</div>
        <img class="UntitledDesign31 w-[300px] h-[300px] left-[65px] top-[40px] absolute" src="https://via.placeholder.com/300x300" />
      </div>
    </div>
    
    <div class="sm:flex justify-center mt-[80px] hidden">
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
    <div class="Frame48 w-[347px] h-[355px] relative sm:hidden">
        <div class="SayangdibuangMenjadiSolusinya left-[7px] top-0 absolute text-center"><span class="text-stone-500 text-xl font-bold font-['Quicksand']">SayangDibuang</span><span class="text-stone-500 text-xl font-normal font-['Quicksand']"> menjadi solusinya!</span></div>
        <div class="Line10 w-[143px] h-[0px] left-[172px] top-[198px] absolute origin-top-left -rotate-90 border border-indigo-900/opacity-80"></div>
        <div class="Group13 w-[178px] h-[130px] left-[-10px] top-[53px] absolute">
          <div class="Hangtag w-[30px] h-[30px] left-[74px] top-0 absolute">
          </div>
          <div class="Hemat50NikmatnyaUtuh left-[32px] top-[40px] absolute text-center text-stone-500 text-[15px] font-bold font-['Quicksand']">Hemat 50%, <br/>nikmatnya utuh</div>
          <div class="SeluruhMakananDijualSetengahHargaDenganTetapMenjagaKualitasKelayakannya left-0 top-[85px] absolute text-center text-stone-500 text-xs font-normal font-['Quicksand']">Seluruh makanan dijual <br/>setengah harga dengan tetap <br/>menjaga kualitas kelayakannya</div>
        </div>
        <div class="Group14 w-[175px] h-[116px] left-[178px] top-[53px] absolute">
          <div class="QuickDelivery w-[30px] h-[30px] left-[72px] top-0 absolute">
          </div>
          <div class="SelamatkanMakananTanpaRibet left-[4px] top-[44px] absolute text-center text-stone-500 text-[15px] font-bold font-['Quicksand']">Selamatkan makanan <br/>tanpa ribet!</div>
          <div class="JemputMakananmuLangsungKeTokoTerdekat left-0 top-[86px] absolute text-center text-stone-500 text-xs font-normal font-['Quicksand']">Jemput makananmu langsung <br/>ke toko terdekat</div>
        </div>
        <div class="Group15 w-[193px] h-[130px] left-[75px] top-[228px] absolute">
          <div class="PesanMakananDanJagaBumi left-[36px] top-[40px] absolute text-center text-stone-500 text-[15px] font-bold font-['Quicksand']">Pesan makanan <br/>dan jaga bumi</div>
          <div class="GunakanWadahMakananDanKantongBelanjamuUntukBantuKurangiLimbahPlastik left-0 top-[85px] absolute text-center text-stone-500 text-xs font-normal font-['Quicksand']">Gunakan wadah makanan <br/>dan kantong belanjamu <br/>untuk bantu kurangi limbah plastik</div>
          <div class="Eco w-[30px] h-[30px] left-[83px] top-0 absolute">
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="sm:flex justify-center hidden">
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
    
    <div class="Frame50 w-[370px] h-[357px] relative sm:hidden">
        <div class="Group16 w-[370px] h-[357px] left-0 top-0 absolute">
          <div class="MitraYangTelahBergabung left-[50px] top-0 absolute text-center text-indigo-900 text-xl font-bold font-['Quicksand']">Mitra yang telah bergabung</div>
          <div class="Ellipse6 w-[180px] h-[180px] left-0 top-[80px] absolute bg-slate-300 rounded-full"></div>
          <div class="Ellipse7 w-[180px] h-[180px] left-[190px] top-[80px] absolute bg-slate-300 rounded-full"></div>
          <div class="PrimaryButton w-[140px] h-[42px] px-3 left-[110px] top-[315px] absolute bg-indigo-900 rounded-lg flex-col justify-center items-center gap-[5px] inline-flex">
            <div class="SeeMore text-center text-slate-300 text-xs font-semibold font-['Quicksand'] leading-[14px]">Bergabung Jadi Mitra</div>
          </div>
        </div>
      </div>
    
    <div class="sm:flex justify-center hidden">
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
    
    <div class="flex justify-center sm:hidden">
    <div class="Frame52 w-[430px] h-[305px] relative ">
        <div class="Group18 w-[430px] h-[305px] left-0 top-0 ">
          <div class="Banner w-[430px] h-[305px] left-0 top-0  bg-red-300/opacity-40"></div>
          <div class="Frame51 w-[370px] h-[180px] left-[30px] top-[100px] absolute justify-start items-start gap-2.5 inline-flex">
            <div class="Kotak1 w-[180px] h-[180px] relative">
              <div class="Rectangle41 w-[180px] h-[180px] left-0 top-0 absolute bg-red-300 rounded-[10px]"></div>
              <div class="SukaBangetSamaAplikasinyaBisaDapetMakananEnakTapiHarganyaMurah w-[135.43px] h-[87.86px] left-[22px] top-[31px] absolute text-center text-black text-xs font-normal font-['Quicksand'] leading-[25px]">“Suka banget sama aplikasinya! bisa dapet makanan enak tapi harganya murah > <”</div>
              <div class="Sasha left-[64px] top-[135px] absolute text-center text-black text-xs font-normal font-['Quicksand'] leading-[25px]">~ Sasha ~</div>
            </div>
            <div class="Kotak2 w-[180px] h-[180px] relative">
              <div class="Rectangle41 w-[180px] h-[180px] left-0 top-0 absolute bg-red-300 rounded-[10px]"></div>
              <div class="SukaBangetSamaAplikasinyaBisaDapetMakananEnakTapiHarganyaMurah w-[135.43px] h-[87.86px] left-[22px] top-[31px] absolute text-center text-black text-xs font-normal font-['Quicksand'] leading-[25px]">“Suka banget sama aplikasinya! bisa dapet makanan enak tapi harganya murah > <”</div>
              <div class="Sasha left-[64px] top-[135px] absolute text-center text-black text-xs font-normal font-['Quicksand'] leading-[25px]">~ Sasha ~</div>
            </div>
          </div>
          <div class="PengalamanMerekaBersamaSayangdibuang left-[70px] top-[25px] absolute text-center"><span class="text-stone-500 text-xl font-normal font-['Quicksand']">Pengalaman mereka bersama <br/></span><span class="text-stone-500 text-xl font-bold font-['Quicksand']">SayangDibuang</span></div>
        </div>
      </div>
    </div>
    
    <div class="sm:flex justify-center hidden">
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
    
    <div class="Frame53 w-[370px] h-[279px] relative sm:hidden">
        <div class="PertanyaanYangSeringDiajukan left-[21px] top-0 absolute text-center text-indigo-900 text-xl font-bold font-['Quicksand']">Pertanyaan yang Sering Diajukan</div>
        <div class="Group19 w-[370px] h-[69px] left-0 top-[35px] absolute">
          <div class="Pembayaran left-0 top-0 absolute text-indigo-900 text-[15px] font-semibold font-['Quicksand']">Pembayaran</div>
          <div class="Line5 w-[370px] h-[0px] left-0 top-[29px] absolute border border-indigo-900/opacity-80"></div>
          <div class="Line6 w-[370px] h-[0px] left-0 top-[69px] absolute border border-indigo-900/opacity-80"></div>
          <div class="MetodePembayaranYangTersedia left-[46px] top-[39px] absolute text-indigo-900 text-[15px] font-medium font-['Quicksand']">Metode pembayaran yang tersedia</div>
          <div class="Question w-5 h-[18.90px] left-[11px] top-[39px] absolute">
          </div>
          <div class="PrimaryButton w-[25px] h-[25px] px-3 left-[335px] top-[36px] absolute bg-slate-300 rounded-[5px] flex-col justify-center items-center gap-[5px] inline-flex">
            <div class="PesanSekarang text-center text-indigo-900 text-[15px] font-medium font-['Poppins'] leading-[14px]">+</div>
          </div>
        </div>
        <div class="Group20 w-[370px] h-[93px] left-0 top-[114px] absolute">
          <div class="Pengambilan left-0 top-0 absolute text-indigo-900 text-[15px] font-semibold font-['Quicksand']">Pengambilan</div>
          <div class="Line5 w-[370px] h-[0px] left-0 top-[29px] absolute border border-indigo-900/opacity-80"></div>
          <div class="Line6 w-[370px] h-[0px] left-0 top-[93px] absolute border border-indigo-900/opacity-80"></div>
          <div class="KetentuanPengambilan left-[46px] top-[39px] absolute text-indigo-900 text-[15px] font-medium font-['Quicksand']">Ketentuan Pengambilan</div>
          <div class="Question w-5 h-[18.90px] left-[11px] top-[39px] absolute">
          </div>
          <div class="PrimaryButton w-[25px] h-[25px] px-3 left-[335px] top-[36px] absolute bg-slate-300 rounded-[5px] flex-col justify-center items-center gap-[5px] inline-flex">
            <div class="PesanSekarang text-center text-indigo-900 text-[15px] font-medium font-['Poppins'] leading-[14px]">-</div>
          </div>
          <div class="PengambilanDapatDilakukanDengan left-[46px] top-[68px] absolute text-indigo-900 text-xs font-normal font-['Quicksand']">Pengambilan dapat dilakukan dengan ...</div>
        </div>
        <div class="PrimaryButton w-[140px] h-[42px] px-3 left-[115px] top-[237px] absolute bg-indigo-900 rounded-lg flex-col justify-center items-center gap-[5px] inline-flex">
          <div class="SeeMore text-center text-slate-300 text-xs font-semibold font-['Quicksand'] leading-[14px]">Lihat Lebih Banyak</div>
        </div>
      </div>    
</x-buyer-layout>
