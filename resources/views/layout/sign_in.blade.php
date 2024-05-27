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
 <body class="font-['Quicksand'] bg-[#FFFCF5] overflow-hidden" >

<div class="flex justify-center">
    <form action="" method="">
    <div class="w-[1440px] h-[1024px] relative">
        <div class="w-[500px] h-[747px] left-[840px] top-[138px] absolute">
          <div class="w-[500px] h-[747px] left-0 top-0 absolute bg-white rounded-[10px] shadow-xl"></div>
          <div class="left-[27px] top-[69px] absolute text-black text-[35px] font-bold font-['Quicksand']">Masuk</div>
          <div class="w-[445px] h-[207px] left-[27px] top-[38px] absolute">
            <div class="left-0 top-[116px] absolute text-black text-base font-semibold font-['Quicksand']">Username/Email</div>
            <div class="left-[275px] top-0 absolute text-right hover:underline"><span style="text-black text-base font-normal font-['Quicksand']">
                <a href="">Masuk Sebagai</span><span class="text-black text-base font-semibold font-['Quicksand']"> </span><span class="text-stone-500 text-base font-semibold font-['Quicksand']">Mitra</span></a>

            </div>
            <input type="text" name="query" placeholder="Masukkan Username/Email Anda" class="w-[445px] h-[59px] left-0 top-[148px] absolute bg-white rounded-[10px] border border-neutral-400 px-4">
          </div>
          <div class="w-[445px] h-[91px] left-[27px] top-[283px] absolute">
            <div class="left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Kata Sandi</div>
            <input type="password" id="password" name="query" placeholder="Masukkan Kata Sandi Anda" class="w-[445px] h-[59px] left-0 top-[32px] absolute bg-white rounded-[10px] border border-neutral-400 px-4">
            <div class="w-6 h-6 left-[389px] top-[49px] absolute">
                <button onclick="togglePasswordVisibility()">

              <img class="w-[20px] h-[20px] left-[2.73px] top-[5.50px] absolute" src="img/seepass.png" />
            </button>
            </div>
          </div>
          <div class="w-[238px] h-7 left-[131px] top-[660px] absolute text-center hover:underline">
            <a href="sign_up"><span class="text-black text-base font-normal font-['Quicksand']">Belum memiliki akun? </span><span class="text-stone-500 text-base font-bold font-['Quicksand']">Daftar</span></a>

         </div>
          <div class="w-[445px] h-[59px] left-[27px] top-[577px] absolute">
            <button class="w-[445px] h-[59px] left-0 top-0 absolute rounded-[10px] border border-neutral-400 hover:bg-gray-400">
                <div class="w-[270px] h-11 left-[90px] top-[15px] absolute text-center text-black text-xl font-medium font-['Quicksand']">Masuk dengan Google</div>
            </button>

            <div class="w-10 h-10 pr-[0.80px] left-[84px] top-[10px] absolute justify-center items-center inline-flex">
              <div class="w-[39.20px] h-10 relative">
                <img src="img/logog.png" class="absolute -left-[10px]" alt="">

              </div>
            </div>
          </div>
          <div class="w-[445px] h-[111px] left-[27px] top-[442px] absolute">
            <div class="w-[445px] h-[59px] left-0 top-0 absolute">
              <button class="w-[445px] h-[59px] left-0 top-0 absolute bg-red-300 rounded-[10px] border border-neutral-400 hover:bg-red-400">
                <div class="w-[119px] h-11 left-[163px] top-[15px] absolute text-center text-black text-xl font-medium font-['Quicksand']">Masuk</div>
              </button>

            </div>
            <div class="w-[238px] h-7 left-[104px] top-[83px] absolute text-center text-stone-400 text-base font-normal font-['Quicksand']">atau masuk dengan</div>
            <div class="w-[115px] h-[0px] left-0 top-[97px] absolute border border-stone-400"></div>
            <div class="w-[115px] h-[0px] left-[330px] top-[97px] absolute border border-stone-400"></div>
          </div>
          <div class="w-[143px] h-3.5 left-[329px] top-[398px] absolute text-right text-black text-base font-normal font-['Quicksand'] hover:underline">
            <a href="forgot1" class=""> Lupa Password?</a>
        </div>
          <div class="w-[167px] h-[15px] left-[27px] top-[398px] absolute">
            <div class="w-[143px] h-3.5 left-[24px] top-[1px] absolute text-black text-base font-normal font-['Quicksand']">Ingat Saya</div>
            <input type="checkbox" class="w-[15px] h-[15px] left-0 top-[6px] absolute ">
          </div>
        </div>
        <img class="w-[500px] h-[468.18px] left-[100px] top-[176px] absolute" src="img/image_design1.png" />
        <div class="w-[315px] h-[109px] left-[562px] top-[20px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">SayangDibuang</div>
        <div class="w-[530px] h-[183px] left-[70px] top-[664px] absolute text-center text-indigo-900 text-[50px] font-semibold font-['Quicksand']">“Sustainability Starts on Your Plate”</div>
      </div>
    </form>
    </div>
    <script>
        function togglePasswordVisibility() {
          var passwordInput = document.getElementById("password");
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
          } else {
            passwordInput.type = "password";
          }
        }
      </script>

</body>
</html>
