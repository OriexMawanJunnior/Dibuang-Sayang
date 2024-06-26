@props(['image', 'discount', 'title', 'distance', 'store', 'rating', 'reviews', 'originalPrice', 'discountedPrice', 'id'])

<div class="bg-white rounded-lg shadow border-2 p-4 flex flex-col items-center">
    <div class="w-full flex justify-center">
        <img class="w-40 h-40 object-cover rounded-lg mb-4" src="{{ $image }}" alt="Product Image">
    </div>
    <div class="text-2xl font-semibold text-center">{{ $title }}</div>
    <div class="text-xl text-gray-600 text-center">{{ $store }}</div>
    <div class="flex items-center mt-2 justify-center">
        <div class="text-red-300 bg-red-100 rounded-sm px-2 py-1 inline-block mr-2">{{ $discount }}</div>
        <div class="text-gray-500 line-through mr-2">{{ $originalPrice }}</div>
        <div class="text-xl font-semibold">{{ $discountedPrice }}</div>
    </div>
    <a href="{{ route('products.show', $id) }}" class="w-20 bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg mt-4 py-3 text-center block">Lihat</a>
</div>
