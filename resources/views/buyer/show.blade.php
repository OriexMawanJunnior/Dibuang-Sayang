<x-buyer-layout>
    <div class="flex justify-center mt-8 mb-14">
        <div class="flex flex-col lg:flex-row w-full max-w-7xl">
            <!-- Left section with the image -->
            <div class="flex flex-col lg:w-1/2">
                <img class="rounded-lg mb-4 lg:mb-0 lg:mr-4" src="https://via.placeholder.com/595x595" alt="Product Image">
                <div class="flex flex-col bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="text-2xl font-bold text-indigo-900 mb-4">Donut</div>
                    </div>
                    <div class="flex items-center bg-red-300 rounded-lg p-4 mb-4 lg:mb-0 lg:mr-4">
                        <div class="text-2xl font-medium mr-2">50%</div>
                        <div class="text-xl line-through mr-2">Rp 12.000</div>
                        <div class="text-2xl font-semibold">Rp 6.000</div>
                    </div>
                </div>
            </div>
            
            <!-- Right section with product details -->
            <div class="flex flex-col lg:w-1/2 mt-4 lg:mt-0">
                <div class="flex flex-col bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <img class="rounded-lg w-48 h-36 mr-4" src="https://via.placeholder.com/191x136" alt="Store Image">
                        <div>
                            <div class="text-lg font-semibold">Michelle Bakery</div>
                            <div class="text-base">Toko Kue • 1.05 km</div>
                            <div class="flex items-center">
                                <!-- Replace with star icon -->
                                <div class="w-6 h-6 bg-yellow-400 rounded-full mr-2"></div>
                                <div class="text-base">5.0 • 10 penilaian</div>
                            </div>
                            <div class="text-xs">Lihat lokasi</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white rounded-lg shadow p-4 mb-4">
                    <div class="text-3xl font-semibold text-indigo-900 mb-2">Informasi Produk</div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Stok</div>
                        <div class="text-xl font-medium">3 Tersedia</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Kategori Makanan</div>
                        <div class="text-xl font-medium">Roti dan Kue</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Dijual Sampai</div>
                        <div class="text-xl font-medium">6 Mei 2024</div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <div class="text-xl">Sebaiknya Dikonsumsi Sebelum</div>
                        <div class="text-xl font-medium">7 Mei 2024</div>
                    </div>
                    <div class="bg-red-300 rounded-lg p-4 text-xl font-medium text-stone-500">
                        Kualitas makanan telah dijamin oleh penjual dan sepenuhnya menjadi tanggung jawab penjual
                    </div>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="flex flex-col lg:flex-row items-center">
                        <button class="w-48 h-12 bg-indigo-900 text-white rounded-lg flex items-center justify-center mb-4 lg:mb-0 lg:mr-4">Tambahkan ke Keranjang</button>
                        <a href="{{route('payment', $product->id)}}" class="w-48 h-12 bg-indigo-900 text-white rounded-lg flex items-center justify-center mb-4 lg:mb-0 lg:mr-4">Beli Sekarang</a>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-lg shadow p-4 mt-4">
                    <div class="text-3xl font-semibold text-indigo-900 mb-2">Deskripsi</div>
                    <div class="text-xl">Donut yang dilapisi selai strawberry</div>
                </div>

                <div class="flex flex-col bg-white rounded-lg shadow p-4 mt-4">
                    <div class="text-3xl font-semibold text-indigo-900 mb-4">Ulasan</div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-slate-300 rounded-full mr-4"></div>
                        <div class="text-xl">S** - Kualitasnya sangat bagus walaupun harganya murah! Terimakasih SayangDibuang</div>
                    </div>
                    <button class="w-24 h-12 bg-indigo-900 text-white rounded-lg flex items-center justify-center">Semua</button>
                </div>
            </div>
        </div>
    </div>
</x-buyer-layout>