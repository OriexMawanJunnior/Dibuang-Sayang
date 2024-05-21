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
 <body class="font-['Quicksand'] bg-[#FFFCF5] overflow-hidden">

    <div class="flex justify-center">
        <form action="" method="post">
    <div class="SignUpPage w-[1440px] h-[1024px] relative bg-stone-50">
        <div class="KotakDaftar w-[500px] h-[747px] left-[840px] top-[138px] absolute">
          <div class="RectangleSignUp w-[500px] h-[747px] left-0 top-0 absolute bg-white rounded-[10px] shadow-xl"></div>
          <div class="Password w-[445px] h-[91px] left-[27px] top-[238px] absolute">
            <div class="KataSandi left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Kata Sandi</div>
            <input type="password" id="pw1" placeholder="Masukkan Kata Sandi" class="Rectangle2 w-[445px] h-[59px] left-0 top-[32px] absolute bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal font-['Quicksand'] px-4">
            <div class="ViewHideLight w-6 h-6 left-[389px] top-[49px] absolute">
                <button onclick="togglePasswordVisibility('pw1')">
              <img class="SubtractLight w-[18.54px] h-[13px] left-[2.73px] top-[5.50px] absolute" src="img/seepass.png" />
            </button>
            </div>
          </div>
          <div class="Username w-[445px] h-[91px] left-[27px] top-[121px] absolute">
            <div class="Email left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Email</div>
            <input type="text" placeholder="Masukkan Email Anda" class=" px-4 Rectangle2 w-[445px] h-[59px] left-0 top-[32px] absolute bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal">

          </div>
          <div class="LoginTombol w-[445px] h-[59px] left-[27px] top-[478px] absolute">
            <button class="Rectangle2 w-[445px] h-[59px] left-0 top-0 absolute bg-red-300 rounded-[10px] border border-neutral-400 hover:bg-red-400">
                <div class="Daftar w-[119px] h-11 left-[163px] top-[15px] absolute text-center text-black text-xl font-medium font-['Quicksand']">Daftar</div>

            </button>
          </div>
          <div class="SignUp w-[445px] h-7 left-[27px] top-[561px] absolute">
            <div class="AtauDaftarDengan w-[261px] h-7 left-[92px] top-0 absolute text-center text-stone-400 text-base font-normal font-['Quicksand']">atau daftar dengan</div>
            <div class="Line2 w-[115px] h-[0px] left-0 top-[14px] absolute border border-stone-400"></div>
            <div class="Line3 w-[115px] h-[0px] left-[330px] top-[14px] absolute border border-stone-400"></div>
          </div>
          <div class="ConfirmPassword w-[445px] h-[91px] left-[27px] top-[355px] absolute">
            <div class="KonfirmasiKataSandi left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Konfirmasi Kata Sandi</div>
            <input type="password" id="pw2" placeholder="Masukkan Konfirmasi Kata Sandi" class="Rectangle2 w-[445px] h-[59px] left-0 top-[32px] absolute bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal font-['Quicksand'] px-4">
            <div class="ViewHideLight w-6 h-6 left-[389px] top-[49px] absolute">
                <button onclick="togglePasswordVisibility('pw2')">
              <img class="SubtractLight w-[18.54px] h-[13px] left-[2.73px] top-[5.50px] absolute" src="img/seepass.png" />
            </button>
            </div>
          </div>
          <div class="Daftar left-[27px] top-[45px] absolute text-black text-[35px] font-bold font-['Quicksand']">Daftar</div>
          <div class="LoginTombolGoogle w-[445px] h-[59px] left-[27px] top-[613px] absolute">
            <button class="Rectangle2 w-[445px] h-[59px] left-0 top-0 absolute rounded-[10px] border border-neutral-400 hover:bg-gray-400">
                <div class="DaftarDenganGoogle w-[270px] h-11 left-[90px] top-[15px] absolute text-center text-black text-xl font-medium font-['Quicksand']">Daftar dengan Google</div>
            </button>
            <div class="SocialIcons w-10 h-10 pr-[0.80px] left-[84px] top-[10px] absolute justify-center items-center inline-flex">

                <div class="Vector w-[39.20px] h-10 relative">
                    <img src="img/logog.png" class="absolute -left-[10px]" alt="">
              </div>
            </div>
          </div>
         <a href="sign_in" >
            <div class="SudahMemilikiAkunMasuk hover:underline w-[238px] h-7 left-[131px] top-[696px] absolute text-center"><span class="text-black text-base font-normal font-['Quicksand']">Sudah memiliki akun? </span><span class="text-stone-500 text-base font-bold font-['Quicksand']">Masuk</span></div>
            </a>
        </div>
        <div class="Sayangdibuang w-[315px] h-[109px] left-[562px] top-[20px] absolute text-center text-indigo-900 text-[40px] font-bold font-['Quicksand']">SayangDibuang</div>
        <img class="UntitledDesign51 w-[530px] h-[530px] left-[100px] top-[176px] absolute" src="img/image_design2.png" />
        <div class="SustainabilityStartsOnYourPlate w-[530px] h-[183px] left-[70px] top-[664px] absolute text-center text-indigo-900 text-[50px] font-semibold font-['Quicksand']">“Sustainability Starts on Your Plate”</div>
      </div>
    </form>
    </div>

    <script>
        function togglePasswordVisibility(id) {
          var passwordInput = document.getElementById(id);
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
          } else {
            passwordInput.type = "password";
          }
        }
      </script>



</body>
</html>
