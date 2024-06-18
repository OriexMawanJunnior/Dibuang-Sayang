@props(['image', 'discount', 'title', 'distance', 'store', 'rating', 'reviews', 'originalPrice', 'discountedPrice'])

<div class="bg-white rounded-lg shadow border-2 p-4">
    <img class="w-full h-40 object-cover rounded-lg mb-4" src="{{ $image }}" alt="Product Image">
    <div class="text-red-300 bg-red-100 rounded-sm px-2 py-1 inline-block mb-2">{{ $discount }}</div>
    <div class="text-2xl font-semibold">{{ $title }}</div>
    <div class="text-xl text-gray-600">{{ $distance }} • {{ $store }}</div>
    <div class="flex items-center mt-2">
        <div class="text-gray-500 line-through mr-2">{{ $originalPrice }}</div>
        <div class="text-xl font-semibold">{{ $discountedPrice }}</div>
    </div>
    <div class="flex items-center mt-2">
        <!-- Icon Star -->
        <div class="text-xl ml-2">{{ $rating }} • {{ $reviews }} penilaian</div>
    </div>
    <button class="w-full bg-slate-300 text-indigo-900 text-sm font-semibold rounded-lg mt-4 py-3">Lihat</button>
</div>