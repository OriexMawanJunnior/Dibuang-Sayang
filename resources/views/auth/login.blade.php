<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="min-h-screen w-fit flex flex-row items-center justify-center bg-gray-100">
            <div class="flex flex-col items-center mr-10">
              <img class="w-[500px] h-[468.18px] mb-8" src="img/image_design1.png" />
              <div class="text-center text-indigo-900 text-[40px] font-bold mb-8">SayangDibuang</div>
              <div class="text-center text-indigo-900 text-[50px] font-semibold">“Sustainability Starts on Your Plate”</div>
            </div>
          
            <div class="w-[500px] bg-white rounded-[10px] shadow-xl mt-8 p-8">
              <div class="flex justify-between">
                  <div class="text-black text-[35px] font-bold mb-8">Masuk</div>
                  <div class="text-right hover:underline flex item-center justify-center">
                    <a href="" class="text-black text-base font-normal">Masuk Sebagai <span class="text-stone-500 text-base font-semibold">Mitra</span></a>
                  </div>
              </div>
              <div class="space-y-6">
                <div>
                  <div class="text-black text-base font-semibold">Email</div>
                  <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 px-4">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
          
                <div>
                  <div class="text-black text-base font-semibold mb-2">Kata Sandi</div>
                  <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Anda" class="w-full h-[59px] bg-white rounded-[10px] border border-neutral-400 px-4">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <button onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-4 flex items-center">
                      <img class="w-[20px] h-[20px]" src="img/seepass.png" />
                    </button>
                  </div>
                </div>
          
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember_me" class="w-[15px] h-[15px] mr-2">
                    <div class="text-black text-base font-normal">Ingat Saya</div>
                  </div>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-black text-base font-normal hover:underline">Lupa Password?</a>
                  @endif
                </div>
          
                <button class="w-full h-[59px] bg-red-300 rounded-[10px] border border-neutral-400 hover:bg-red-400 text-black text-xl font-medium">Masuk</button>
          
                <div class="text-center text-stone-400 text-base font-normal mt-6">atau masuk dengan</div>
                <div class="flex items-center space-x-4 justify-center mt-2">
                  <div class="w-[115px] border border-stone-400"></div>
                  <div class="w-[115px] border border-stone-400"></div>
                </div>
          
                <a href="{{ route('auth.google.redirect') }}" class="w-full h-[59px] rounded-[10px] border border-neutral-400 hover:bg-gray-400 flex items-center justify-center mt-6">
                  <img src="img/logog.png" class="w-10 h-10 mr-4" alt="">
                  <div class="text-black text-xl font-medium">Masuk dengan Google</div>
                </a>
          
                <div class="text-center mt-8">
                  <a href="{{route('register')}}" class="text-black text-base font-normal hover:underline">
                    Belum memiliki akun? <span class="text-stone-500 text-base font-bold">Daftar</span>
                  </a>
                </div>
              </div>
            </div>
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
</x-guest-layout>
