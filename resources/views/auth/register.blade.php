<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="flex justify-center items-center">
          <div class="text-[#374375] text-[40px] font-bold mb-8 mt-10">SayangDibuang</div>
        </div>
        <div class="SignUpPage min-h-screen w-fit flex flex-row items-center justify-center">
            <div class="flex flex-col items-center mb-8 mr-10">
              <img class="w-[530px] h-[530px] mb-8" src="img/image_design2.png" />
              <div class="text-center text-[#374375] text-[50px] font-semibold">“Sustainability Starts on Your Plate”</div>
            </div>
          
            <div class="KotakDaftar w-[500px] bg-white rounded-[10px] shadow-xl mt-3 mr-10 mb-8 p-8">
              <div class="text-black text-[35px] font-bold mb-8">Daftar</div>
              <div class="space-y-6">
                <div>
                  <div class="text-black text-base font-semibold mb-2">Name</div>
                  <input type="text" id="name" name="name"  placeholder="Masukkan Nama Lengkap Anda" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal px-4">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                  <div class="text-black text-base font-semibold mb-2">Email</div>
                  <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal px-4">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                  <div class="text-black text-base font-semibold mb-2">Kata Sandi</div>
                  <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal px-4">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <button type="button" onclick="togglePasswordVisibility('password')" class="absolute inset-y-0 right-4 flex items-center">
                      <img class="w-[18.54px] h-[13px]" src="img/seepass.png" />
                    </button>
                  </div>
                </div>
                <div>
                  <div class="text-black text-base font-semibold mb-2">Konfirmasi Kata Sandi</div>
                  <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 text-black/opacity-50 text-lg font-normal px-4">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    <button type="button" onclick="togglePasswordVisibility('password_confirmation')" class="absolute inset-y-0 right-4 flex items-center">
                      <img class="w-[18.54px] h-[13px]" src="img/seepass.png" />
                    </button>
                  </div>
                </div>
                <button type="submit" class="w-full h-[59px] bg-[#DFAEA1] rounded-[10px] border border-neutral-400 hover:bg-red-400 text-black text-xl font-medium">Daftar</button>
                <div class="text-center text-stone-400 text-base font-normal">atau daftar dengan</div>
                <!-- <div class="flex items-center space-x-4 justify-center">
                  <div class="w-[115px] border border-stone-400"></div>
                  <div class="w-[115px] border border-stone-400"></div>
                </div> -->
                <a href="{{ route('auth.google.redirect') }}" class="w-full h-[59px] rounded-[10px] border border-neutral-400 hover:bg-gray-400 flex items-center justify-center">
                  <img src="img/logog.png" class="w-10 h-10 mr-4" alt="">
                  <div class="text-black text-xl font-medium">Daftar dengan Google</div>
                </a>
                <a href="{{ route('login') }}" class="text-center hover:underline">
                  <div class="text-black text-base font-normal mt-5">Sudah memiliki akun? <span class="text-[#895159] text-base font-bold">Masuk</span></div>
                </a>
              </div>
            </div>
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
    </form>
</x-guest-layout>
