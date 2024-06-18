<x-guest-layout>
    <!-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="flex justify-center items-center">
          <div class="text-[#374375] text-[40px] font-bold mb-8 mt-10">SayangDibuang</div>
        </div>
        <div class="min-h-screen flex flex-row items-center justify-center">
            <div class="flex flex-col items-center flex-justify-center mr-10 mt-10">
              <img class="w-[500px] h-[468.18px] mb-8" src="img/image_design1.png" />
              <div class="text-center text-[#374375] text-[50px] font-semibold">“Sustainability Starts on Your Plate”</div>
            </div>
            <div class="w-[500px] bg-white rounded-[10px] shadow-xl mt-3 mr-10 mb-8 p-8">
              <div class="flex justify-between">
                  <div class="text-black text-[35px] font-bold mb-8">Ganti Kata Sandi</div>
                  <div class="text-right hover:underline flex item-center justify-center">
                    <!-- <a href="" class="text-black text-base font-normal">Masuk Sebagai <span class="text-stone-500 text-base font-semibold">Mitra</span></a> -->
                  </div>
              </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
