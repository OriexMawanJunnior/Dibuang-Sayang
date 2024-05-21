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
        <form action="" method="post">
        <div class="Forgot2 w-[1440px] h-[1024px] relative bg-stone-50">
            <div class="KotakDaftar w-[500px] h-[556px] left-[840px] top-[234px] absolute">
              <div class="RectangleSignUp w-[500px] h-[556px] left-0 top-0 absolute bg-white rounded-[10px] shadow"></div>
              <div class="Password w-[445px] h-[103px] left-[27px] top-[161px] absolute">
                <div class="KataSandi w-[330px] h-11 left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Kata Sandi</div>
                <input type="password" id="pw1" placeholder="Masukkan Kata Sandi Anda" class="Rectangle2 w-[445px] h-[59px] left-0 top-[44px] absolute bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal font-['Quicksand'] px-4">
                    <button onclick="togglePasswordVisibility('pw1')">
                        <img class="Image1 w-[25px] h-[25px] left-[389px] top-[61px] absolute" src="img/seepass.png" />
                    </button>
              </div>
              <div class="AturKataSandi left-[27px] top-[57px] absolute text-black text-[35px] font-bold font-['Quicksand']">Atur Kata Sandi</div>
              <div class="BuatKataSandiBaru left-[27px] top-[111px] absolute text-black text-xl font-medium font-['Quicksand']">Buat kata sandi baru</div>
              <div class="LoginTombol w-[445px] h-[59px] left-[27px] top-[440px] absolute">
                <button class="Rectangle2 w-[445px] h-[59px] left-0 top-0 absolute bg-red-300 rounded-[10px] border border-neutral-400 hover:bg-red-400">
                    <div class="GantiKataSandi left-[143px] top-[15px] absolute text-center text-black text-xl font-medium font-['Quicksand']">Ganti Kata Sandi</div>
                </button>
              </div>
              <div class="ConfirmPassword w-[445px] h-[103px] left-[27px] top-[289px] absolute">
                <div class="KonfirmasiKataSandi w-[330px] h-11 left-0 top-0 absolute text-black text-base font-semibold font-['Quicksand']">Konfirmasi Kata Sandi</div>
                <input type="password" id="pw2" placeholder="Masukkan Konfirmasi Kata Sandi Anda" class="Rectangle2 w-[445px] h-[59px] left-0 top-[44px] absolute bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal font-['Quicksand'] px-4">
                <button onclick="togglePasswordVisibility('pw2')">
                    <img class="Image1 w-[25px] h-[25px] left-[389px] top-[61px] absolute" src="img/seepass.png" />
                </button>
              </div>
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
