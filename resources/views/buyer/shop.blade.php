<x-buyer-layout>
    <div class="Banner flex justify-center font-['Quicksand']">
        <div class="w-full h-[250px] bg-[#DFAEA1] flex flex-col items-start px-16">
            <div class="text-indigo-900 text-[30px] font-bold pt-36">Shop Page</div>

        </div>
    </div>

    <div class="flex justify-center -mt-10 font-['Quicksand']">
        <div class="w-full h-20 bg-white rounded-lg shadow-md flex items-center px-8 z-10 mx-16">
            <div class="text-black text-[20px] font-medium">Belanja</div>
        </div>
    </div>


    <div class="Search flex justify-center mt-8 font-['Quicksand'] px-5">
        <div class="w-full max-w-screen-lg h-[60px] flex items-center">
            <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4">
                <!-- Icon Location -->
            </div>
            <!-- <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4"> -->
                <!-- Icon Cart -->
            <!-- </div> -->
            <!-- <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4"> -->
                <!-- Icon Location -->
            <!-- </div> -->
            <!-- <div class="text-black text-xl font-semibold ml-4">Lokasi Saat ini</div> -->
        </div>
    </div>

    
    
    <div class="items-center font-['Quicksand']">
        <div class="mt-10 px-14">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-1 hidden md:block">
                    <h2 class="font-bold">Filters</h2>
                    <div id="accordion-open" data-accordion="open" data-active-classes="bg-[#FFFCF5]">
                        <h2 id="accordion-open-heading-1">
                            <button
                                type="button"
                                class="flex w-full items-center justify-between py-5 xl:pr-5 lg:pr-0 font-medium text-black rtl:text-right"
                                data-accordion-target="#accordion-open-body-1"
                                aria-expanded="true"
                                aria-controls="accordion-open-body-1"
                            >
                                <span class="text-black">Kategori</span>
                                <svg
                                    data-accordion-icon
                                    class="h-3 w-3 shrink-0 rotate-180 text-black"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                            <div class="border-b border-gray-200 xl:px-5 pb-5">
                                <button
                                    value="Makanan Berat"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Makanan Berat
                                </button>
                                <button
                                    value="Makanan Vegan"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Makanan Vegan
                                </button>
                                <button
                                    value="Roti dan Kue"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Roti dan Kue
                                </button>
                                <button
                                    value="Bahan Makanan"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Bahan Makanan
                                </button>
                                <button
                                    value="Buah dan Sayur"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Buah dan Sayur
                                </button>
                                <button
                                    value="Camilan"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Camilan
                                </button>
                                <button
                                    value="Minuman"
                                    type="button"
                                    class="category-button mb-2 me-2 rounded-[4px] border border-[#374375] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-[#BABDE2]"
                                >
                                    Minuman
                                </button>
                            </div>
                        </div>
                        <h2 id="accordion-open-heading-2">
                            <button
                                type="button"
                                class="flex w-full items-center justify-between py-5 xl:pr-5 lg:pr-0 font-medium text-black rtl:text-right"
                                data-accordion-target="#accordion-open-body-2"
                                aria-expanded="true"
                                aria-controls="accordion-open-body-2"
                            >
                                <span class="text-black">Harga</span>
                                <svg
                                    data-accordion-icon
                                    class="h-3 w-3 shrink-0 rotate-180 text-black"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                            <div class="border-b border-gray-200 px-5 pb-5">
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="checkbox-1"
                                        name="price"
                                        type="radio"
                                        value="15000"
                                        class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="checkbox-1" class="ms-2 text-sm font-medium text-black">Di bawah Rp 15.000</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="checkbox-2"
                                        name="price"
                                        type="radio"
                                        value="30000"
                                        class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="checkbox-2" class="ms-2 text-sm font-medium text-black">Rp 15.001 - Rp 30.000</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="checkbox-2"
                                        name="price"
                                        type="radio"
                                        value="30000"
                                        class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="checkbox-2" class="ms-2 text-sm font-medium text-black">Di atas Rp 30.001</label>
                                </div>
                            </div>
                        </div>
                        <!-- <h2 id="accordion-open-heading-3">
                            <button
                                type="button"
                                class="flex w-full items-center justify-between gap-3 py-5 pr-5 font-medium text-black rtl:text-right"
                                data-accordion-target="#accordion-open-body-3"
                                aria-expanded="false"
                                aria-controls="accordion-open-body-3"
                            >
                                <span class="text-black">Fasilitas</span>
                                <svg
                                    data-accordion-icon
                                    class="h-3 w-3 shrink-0 rotate-180 text-black"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                            <div class="border-b border-gray-200 px-5 pb-5">
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-2"
                                        type="checkbox"
                                        name="facilities"
                                        value="AC"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-2" class="ms-2 text-sm font-medium text-black">AC</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-3"
                                        type="checkbox"
                                        name="facilities"
                                        value="Smart TV"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-3" class="ms-2 text-sm font-medium text-black">Smart TV</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-4"
                                        type="checkbox"
                                        name="facilities"
                                        value="Projector"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-4" class="ms-2 text-sm font-medium text-black">Projector</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-5"
                                        type="checkbox"
                                        name="facilities"
                                        value="Speaker"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-5" class="ms-2 text-sm font-medium text-black">Speaker</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-6"
                                        type="checkbox"
                                        name="facilities"
                                        value="Whiteboard"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-6" class="ms-2 text-sm font-medium text-black">Whiteboard</label>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <input
                                        id="facility-7"
                                        type="checkbox"
                                        name="facilities"
                                        value="Printer"
                                        class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                                    />
                                    <label for="facility-7" class="ms-2 text-sm font-medium text-black">Printer</label>
                                </div>
                            </div>
                        </div> -->
                        <div id="submit" class="flex justify-center mb-5">
                            <button
                                type="submit"
                                class="mt-5 w-full rounded-lg bg-[#374375] py-2 text-[#BABDE2] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
                            >
                                Terapkan Filter
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row">


        <div class="flex justify-center mt-8">
            <div class="w-full max-w-xs">
                <div class="flex flex-col space-y-6">
                    <div class="text-xl font-medium">Jarak</div>
                    <div class="flex items-center">
                        <div class="w-full bg-gray-200 h-2 rounded-lg">
                            <div class="bg-indigo-600 h-full rounded-lg" style="width: 50%;"></div>
                        </div>
                        <div class="ml-4 text-xl font-medium">4.8 km</div>
                    </div>
                    <div class="text-xl font-medium">Harga</div>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded-sm border-gray-400">
                            <span class="ml-4 text-lg">Dibawah Rp 15.000</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded-sm border-gray-400">
                            <span class="ml-4 text-lg">Rp 15.000 - Rp 25.000</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded-sm border-gray-400">
                            <span class="ml-4 text-lg">Rp 25.000 - Rp 40.000</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded-sm border-gray-400">
                            <span class="ml-4 text-lg">Diatas Rp 40.000</span>
                        </div>
                    </div>
                    <div class="text-xl font-medium">Kategori</div>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Makanan Vegan</button>
                        <button class="bg-indigo-900 text-slate-300 text-sm font-semibold rounded-lg px-4 py-2">Makanan Berat</button>
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Roti dan Kue</button>
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Bahan Makanan</button>
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Buah dan Sayur</button>
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Camilan</button>
                        <button class="bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg px-4 py-2">Minuman</button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex justify-center mt-8">
            <div class="w-full max-w-screen-lg flex flex-col space-y-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
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
                            id="{{ $product->id }}"
                        />
                    @endforeach
                </div>
                <button class="w-full max-w-xs mx-auto bg-indigo-900 text-slate-300 text-sm font-semibold rounded-lg py-3">Tampilkan Lebih Banyak</button>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</x-buyer-layout>