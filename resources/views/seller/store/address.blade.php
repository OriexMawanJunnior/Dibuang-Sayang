<x-seller-layout>
    <div class="w-100 h-fit ml-20 mt-10 mr-10 px-3 py-6 bg-white rounded shadow">
        <div class="flex justify-between my-2">
            <div class="text-black text-2xl font-semibold item-center justify-center mt-2">Alamat Toko</div>
            <button id="use-current-location" class="w-28 h-12 px-3 bg-slate-300 rounded-lg justify-center items-center gap-1 inline-flex">
                <div class="w-28 text-center text-indigo-900 text-sm font-semibold leading-none">Gunakan Alamat Saat Ini</div>
            </button>
        </div>

        <form action="{{ route('seller.store.address.update') }}" method="POST" enctype="multipart/form-data" 
        class="w-full h-fit border-t-2 border-indigo-900/opacity-80">
            @csrf
            <table class="w-full">
                <tbody>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Alamat</td>
                        <td>
                            <input type="text" name="address" id="address" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->address : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Detail Lainnya</td>
                        <td>
                            <input type="text" name="detail_address" id="detail_address" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->detail_address : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Provinsi</td>
                        <td>
                            <input type="text" name="province" id="province" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->province : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Kota/Kabupaten</td>
                        <td>
                            <input type="text" name="city" id="city" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->city : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Kecamatan</td>
                        <td>
                            <input type="text" name="district" id="district" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->district : '' }}" required>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="text-black text-xl font-normal py-2">Kode Pos</td>
                        <td>
                            <input type="text" name="postal_code" id="postal_code" class="form-control w-96 h-14 bg-white rounded-lg border border-neutral-400" value="{{ $store ? $store->postal_code : '' }}" required>
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
<!-- Include the Google Maps JavaScript API -->

