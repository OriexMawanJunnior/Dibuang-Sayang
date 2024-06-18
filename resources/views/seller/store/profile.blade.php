<x-seller-layout>
    <div class="w-100 h-fit ml-20 mt-10 mr-10 px-3 py-6 bg-white rounded shadow">
        <div class="flex justify-between my-2">
            <div class="text-black text-2xl font-semibold item-center justify-center mt-2">Informasi Dasar</div>
        </div>

        <form action="{{ route('seller.store.profile.update') }}" method="POST" enctype="multipart/form-data" 
        class="w-full h-96 border-t-2 border-indigo-900/opacity-80">
            @csrf
            <table class="w-full">
                <tbody>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Store Name</td>
                        <td>
                            <input type="text" name="name" id="name" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->name : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Logo</td>
                        <td>
                            <div class="relative">
                                <div class="w-48 h-12 px-3 bg-indigo-900 rounded-lg flex items-center justify-center cursor-pointer" onclick="document.getElementById('logo').click();">
                                    <div class="text-center text-slate-300 text-sm font-semibold">Insert Logo Toko</div>
                                </div>
                                <input type="file" name="logo" id="logo" class="hidden" />
                            </div>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Store Category</td>
                        <td>
                            <input type="text" name="category" id="category" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->category : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Store Email</td>
                        <td>
                            <input type="email" name="email" id="email" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->email : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Store Phone Number</td>
                        <td>
                            <input type="text" name="phone_number" id="phone_number" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->phone_number : '' }}" required>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="w-28 h-12 mt-5 px-3 bg-slate-300 rounded-lg flex-col justify-center items-center gap-1 inline-flex">
                <div class="w-28 text-center text-indigo-900 text-sm font-semibold leading-none">Simpan</div>
            </button>
        </form>
    </div>
</x-seller-layout>