<div class="grid grid-cols-1 lg:grid-cols-3 gap-y-5 gap-x-5 text-white">

    <div class="col-span-1 lg:col-span-2 grid grid-cols-2 grid-rows-3 gap-y-2 gap-x-4 w-full -ml-5 lg:ml-0 bg-gray-900 p-5 rounded-lg">
        <div class="col-span-2 w-full">
            <label class="block text-sm font-medium">Nama Customer</label>
            <input type="text" class="w-full h-10 text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1" value="Customer">
        </div>

        <div class="col-span-1">
            <label class="block text-sm font-medium">Total Harga</label>
            <input type="number" class="h-10 w-full text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1" value="50000">
        </div>

        <div class="col-span-1">
            <label class="block text-sm font-medium">Metode Pemabayaran</label>
            <select class="h-10 w-full text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1">
                <option disabled selected>pilih metode pembayaran</option>
                <option>Tunai</option>
                <option>Qris</option>
            </select>
        </div>
        
        <button class="col-span-2 h-10 mt-3 font-medium tracking-wide text-white text-xs capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Checkout
        </button>

        <div class="col-span-full">
            <p class="font-bold text-lg text-white">Daftar Produk</p>
            <input type="text" placeholder="Cari Produk" 
                class="w-full h-10 text-sm bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-2 text-white">
        </div>

        @livewire('halaman-kasir.list-product')
    </div>

    @livewire('halaman-kasir.cart-items')
</div>