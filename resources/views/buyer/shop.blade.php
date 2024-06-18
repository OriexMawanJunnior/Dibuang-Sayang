<x-buyer-layout>
    <div class="Banner flex justify-center">
        <div class="Banner w-full h-[350px] bg-[#DFAEA1] flex flex-col justify-center items-start px-16">
            <div class="text-indigo-900 text-4xl font-bold">Belanja</div>
            <div class="w-full h-24 bg-white rounded-lg shadow mt-6 flex items-center px-8">
                <div class="text-black text-xl font-medium">Belanja</div>
            </div>
        </div>
    </div>

    <div class="Search flex justify-center mt-8">
        <div class="w-full max-w-screen-lg h-[60px] flex items-center">
            <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4">
                <!-- Icon Location -->
            </div>
            <div class="text-black text-xl font-semibold ml-4">Lokasi Saat ini</div>
            <form action="{{ route('shop.search') }}" method="GET" class="flex-grow flex items-center bg-white rounded-lg shadow border border-neutral-400 px-4">
                <input type="text" name="query" placeholder="Cari makanan untuk diselamatkan" class="flex-grow bg-transparent outline-none text-lg text-black/50">
                <button type="submit" class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4">
                    <!-- Icon Search -->
                </button>
            </form>
            <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4">
                <!-- Icon Cart -->
            </div>
            <div class="w-[60px] h-[60px] bg-white rounded-full border border-black flex items-center justify-center ml-4">
                <!-- Icon Heart -->
            </div>
        </div>
    </div>

    <div class="Group3 flex justify-center mt-8">
        <div class="w-full max-w-screen-lg flex flex-col">
            <div class="flex items-center justify-between border-b border-indigo-900/80 pb-2">
                <div class="text-black text-xl font-semibold">Filters</div>
                <div class="flex items-center">
                    <div class="text-black text-xl font-semibold">Diurutkan dari</div>
                    <div class="text-black text-xl font-medium mx-2">Terpopuler</div>
                    <!-- Icon ArrowDown -->
                </div>
                <div class="text-right text-black text-2xl font-medium flex-end">
                    Menampilkan 9 produk untuk <span class="font-semibold">“Makanan Berat”</span> (1 - 9 dari 35)
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

</x-buyer-layout>