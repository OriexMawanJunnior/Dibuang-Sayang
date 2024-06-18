<x-seller-layout>
    <h2 class="text-2xl font-semibold mb-4">Produk Saya</h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            @if($product->getFirstMedia('products'))
                                @php
                                    $mediaItem = $product->getFirstMedia('products');
                                    $imageUrl = $mediaItem->getUrl();
                                @endphp
                                <x-product-card
                                    image="{{ asset($imageUrl) }}"
                                    discount="50%" {{-- Ganti dengan diskon produk --}}
                                    title="{{ $product->name }}" {{-- Ganti dengan nama produk --}}
                                    distance="1.05 km" {{-- Ganti dengan jarak --}}
                                    store="{{ $product->store->name }}" {{-- Ganti dengan nama toko --}}
                                    rating="5.0" {{-- Ganti dengan rating --}}
                                    reviews="10" {{-- Ganti dengan jumlah review --}}
                                    originalPrice="{{ $product->price }}" {{-- Ganti dengan harga asli --}}
                                    discountedPrice="{{ $product->discounted_price }}" {{-- Ganti dengan harga setelah diskon --}}
                                />
                            @else
                                {{-- Tampilkan placeholder atau pesan jika tidak ada gambar --}}
                                <x-product-card
                                    image="https://via.placeholder.com/269x200"
                                    discount="50%" {{-- Ganti dengan diskon produk --}}
                                    title="{{ $product->name }}" {{-- Ganti dengan nama produk --}}
                                    distance="1.05 km" {{-- Ganti dengan jarak --}}
                                    store="{{ $product->store->name }}" {{-- Ganti dengan nama toko --}}
                                    rating="5.0" {{-- Ganti dengan rating --}}
                                    reviews="10" {{-- Ganti dengan jumlah review --}}
                                    originalPrice="{{ $product->price }}" {{-- Ganti dengan harga asli --}}
                                    discountedPrice="{{ $product->discounted_price }}" {{-- Ganti dengan harga setelah diskon --}}
                                />
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-seller-layout>