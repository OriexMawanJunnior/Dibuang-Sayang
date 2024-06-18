<x-seller-layout>
    <form action="{{ route('seller.product.store') }}" method="POST"  enctype="multipart/form-data" class="container mx-auto p-6">
        @csrf
        <div class="flex flex-col gap-6">
            <!-- First Card -->
            <div class="w-full h-auto bg-white rounded shadow p-6">
                <h2 class="text-2xl font-semibold mb-4">Informasi Produk</h2>
                <hr class="border-indigo-900/80 mb-4">
                <table class="w-full">
                    <tbody>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Nama Produk</td>
                            <td class="w-3/4">
                                <input type="text" name="name" id="name" placeholder="Tulis Nama Produk" class="w-full h-14 bg-white rounded-lg border border-neutral-400 px-4 text-black/50 text-lg">
                            </td>
                        </tr>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Foto Produk</td>
                            <td class="w-3/4">
                                <div class="flex items-center gap-4">
                                    <div class="w-48 h-12 px-3 bg-indigo-900 rounded-lg flex items-center justify-center cursor-pointer" onclick="document.getElementById('foto').click();">
                                        <div class="text-center text-slate-300 text-sm font-semibold">Insert Foto Product</div>
                                    </div>
                                    <input type="file" name="foto" id="foto" class="hidden" />
                                </div>
                            </td>
                        </tr>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Kategori</td>
                            <td class="w-3/4">
                                <input type="text" name="category" id="category" placeholder="Pilih Kategori" class="w-full h-14 bg-white rounded-lg border border-neutral-400 px-4 text-black/50 text-lg">
                            </td>
                        </tr>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Deskripsi Produk</td>
                            <td class="w-3/4">
                                <textarea name="detail_product" id="detail_product" placeholder="Tulis Deskripsi Produk" class="w-full h-44 bg-white rounded-lg border border-neutral-400 p-4 text-black/50 text-lg"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <!-- Second Card -->
            <div class="w-full h-auto bg-white rounded shadow p-6">
                <h2 class="text-2xl font-semibold mb-4">Informasi Penjualan</h2>
                <hr class="border-indigo-900/80 mb-4">
                <table class="w-full">
                    <tbody>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Harga</td>
                            <td class="w-3/4 relative">
                                <input type="text" name="price" id="price" placeholder="Rp 10.000,00" class="w-full h-14 bg-white rounded-lg border border-neutral-400 px-4 text-black/50 text-lg">
                            </td>
                        </tr>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Stok</td>
                            <td class="w-3/4">
                                <div class="inset-y-0 right-0 flex items-center">
                                    <input type="number" name="stock" id="stock" value="1" class="w-12 h-full text-center bg-white rounded-lg border-l border-r border-transparent focus:outline-none">
                                </div>
                            </td>
                        </tr>
                        
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Dijual Sampai</td>
                            <td class="w-3/4">
                                <input type="date" name="date_sell_until" id="date_sell_until" class="w-full h-14 bg-white rounded-lg border border-neutral-400 px-4 text-black/50 text-lg">
                            </td>
                        </tr>
                        <tr class="mb-4 form-group">
                            <td class="w-1/4 text-xl font-normal">Kadaluarsa</td>
                            <td class="w-3/4">
                                <input type="date" name="expired_date" id="expired" class="w-full h-14 bg-white rounded-lg border border-neutral-400 px-4 text-black/50 text-lg">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
        <div class="w-full flex justify-center mt-6">
            <button type="submit" class="w-44 h-12 bg-slate-300 rounded-lg flex justify-center items-center">
                <span class="text-indigo-900 text-sm font-semibold text-center">Simpan dan Tampilkan</span>
            </button>
        </div>
    </form>    
    
</x-seller-layout>