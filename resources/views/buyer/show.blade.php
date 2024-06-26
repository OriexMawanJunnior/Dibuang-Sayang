<x-buyer-layout>
    <div class="flex justify-center mt-8 mb-14">
        <div class="flex flex-col lg:flex-row w-full max-w-7xl">
            <!-- Left section with the image -->
            <div class="flex flex-col lg:w-1/2">
                <img class="rounded-lg mb-4 lg:mb-0 lg:mr-4" src="{{$product->getFirstMediaUrl('products') ?: 'https://via.placeholder.com/269x200'}}" alt="Product Image">
                <div class="flex flex-col bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="text-2xl font-bold text-indigo-900 mb-4">{{$product->name}}</div>
                    </div>
                    <div class="flex items-center bg-red-300 rounded-lg p-4 mb-4 lg:mb-0 lg:mr-4">
                        <div class="text-2xl font-medium mr-2">{{$discount = 0.5}}</div>
                        <div class="text-xl line-through mr-2">{{$product->price}}</div>
                        <div class="text-2xl font-semibold">{{$product->price*$discount}}</div>
                    </div>
                </div>
            </div>
            
            <!-- Right section with product details -->
            <div class="flex flex-col lg:w-1/2 mt-4 lg:mt-0">
                <div class="flex flex-col bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <img class="rounded-lg w-48 h-36 mr-4" src="{{$product->store->getFirstMediaUrl('logos') ?: 'https://via.placeholder.com/269x200'}}" alt="Store Image">
                        <div>
                            <div class="text-lg font-semibold">{{$product->store->name}}</div>
                            <div class="text-base">{{$product->store->category}}</div>
                            <div class="text-xs">{{$product->store->address}}</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white rounded-lg shadow p-4 mb-4">
                    <div class="text-3xl font-semibold text-indigo-900 mb-2">Informasi Produk</div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Stock yang tersedia</div>
                        <div class="text-xl">{{$product->stock}}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Kategori Makanan</div>
                        <div class="text-xl font-medium">{{$product->category}}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-xl">Dijual Sampai</div>
                        <div class="text-xl font-medium">{{$product->date_sell_until}}</div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <div class="text-xl">Sebaiknya Dikonsumsi Sebelum</div>
                        <div class="text-xl font-medium">{{$product->expired_date}}</div>
                    </div>
                    <div class="flex flex-col bg-white rounded-lg shadow p-4 mt-4">
                        <div class="text-3xl font-semibold text-indigo-900 mb-2">Deskripsi</div>
                        <div class="text-xl">{{$product->detail_product}}</div>
                    </div>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="flex flex-col lg:flex-row items-center">
                        <a href="{{route('payment', $product->id)}}" class="w-48 h-12 bg-indigo-900 text-white rounded-lg flex items-center justify-center mb-4 lg:mb-0 lg:mr-4">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-buyer-layout>