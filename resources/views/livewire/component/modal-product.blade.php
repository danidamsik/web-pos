<div x-cloak x-show="$wire.show"
    x-transition:enter="transition-transform transition-opacity duration-300 ease-out"
    x-transition:enter-start="opacity-0 -translate-y-20"
    x-transition:enter-end="opacity-100 translate-y-0"
    class="m-auto lg:ml-[30%] overflow-y-auto fixed inset-0 z-50 mt-10 bg-gray-800 text-white p-5 rounded-lg shadow-lg w-[93%] lg:w-1/2">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold" x-data="{text:''}" @create.window="text = 'Create Product'" @update.window="text = 'Update Product'" x-text="text">Create product</h2>
        <button @click="$wire.show = false" class="text-gray-400 hover:text-gray-200">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <form x-data="{ product: ''}" @update.window="product = $wire.product" @create.window="product = []">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-2">
            <div>
                <label class="block text-sm font-medium mb-1" for="productName">Nama Produk<span class="text-red-500">*</span></label>
                <input x-model="product.name" type="text" id="productName" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="productCategory">Kategori Produk</label>
                <select id="productCategory" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-2 lg:py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500">
                    <option>Select an option</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="slug">Slug<span class="text-red-500">*</span></label>
                <input x-model="product.slug" type="text" id="slug" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="stock">Stok Produk<span class="text-red-500">*</span></label>
                <input x-model="product.stok" type="number" id="stock" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500" value="1">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="price">Harga Produk<span class="text-red-500">*</span></label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 bg-gray-700 border border-gray-600 text-gray-400">Rp.</span>
                    <input x-model="product.harga" type="text" id="price" class="w-full bg-gray-700 border border-gray-600 rounded-r-lg px-2 py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500">
                </div>
            </div>
            <div class="flex items-center mt-6">
                <input x-model="product.status" type="checkbox" id="activeProduct" class="form-checkbox h-4 w-4 text-green-500 bg-gray-700 border-gray-600 rounded">
                <label for="activeProduct" class="ml-2 text-sm font-medium">Produk Aktif<span class="text-red-500">*</span></label>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="productImage">Gambar Produk</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-600 rounded-lg cursor-pointer bg-gray-700 hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="fas fa-cloud-upload-alt text-gray-400 text-2xl"></i>
                            <p class="text-sm text-gray-400 mt-2">Drag & Drop your files or <span class="text-blue-500">Browse</span></p>
                        </div>
                        <input id="productImage" type="file" class="hidden">
                    </label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="barcode">Barcode Produk</label>
                <input x-model="product.barcode" type="text" id="barcode" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-1 text-white focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium mb-1" for="description">Deskripsi Produk</label>
                <textarea id="description" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-2 py-1 text-white h-24 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500"></textarea>
            </div>
        </div>
        <div class="flex justify-end mt-6 space-x-2">
            <button x-data="{data: ''}" wire:click="proses" wire:loading.class="px-6" wire:target="proses" type="button" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                <div wire:loading wire:target="proses" class="w-4 h-4 mt-1 ml-1 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></div>
                <p wire:loading.remove wire:target="proses" @update.window="data = 'update'" @create.window="data = 'create'" x-text="data">Create</p>
            </button>
            <button @click="$wire.show = false" type="button" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Cancel</button>
        </div>
    </form>
</div>
