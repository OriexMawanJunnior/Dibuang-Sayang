<div class="lg:sticky lg:top-0 bg-white text-black lg:p-1 z-10 shadow-md hidden sm:flex">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <img src="{{asset('img/logo.png')}}" class="w-20 h-20" alt="Logo">

        <!-- Navbar Links -->
        <nav>

            <ul class="flex space-x-8">
                <li><a href="{{route('dashboard')}}" class="text-[#895159] font-bold">Beranda</a></li>

                <li><a href="{{route('shop')}}" class="hover:text-[#895159] hover:font-bold">Belanja</a></li>
                <li><a href="faq" class="hover:text-[#895159] hover:font-bold">FAQ</a></li>
                <li class="relative">
                    <button type="button" class="focus:outline-none" onclick="toggleDropdown()">
                        <img src="{{asset('img/profile.png')}}" class="w-10 h-10" alt="Profile">
                    </button>
                    <ul id="dropdown" class="absolute hidden bg-white shadow-lg rounded mt-2 py-1 w-32 right-0">
                        @auth
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">
                                    Logout
                                </button>
                            </form>
                        </li>
                        @else
                        <li><a href="{{route('register')}}" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Register</a></li>
                        <li><a href="{{route('login')}}" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Login</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script>
    function toggleDropdown() {
        document.getElementById('dropdown').classList.toggle('hidden');
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.closest('.relative')) {
            var dropdown = document.getElementById('dropdown');
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        }
    }
</script>