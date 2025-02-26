<div class="m-auto lg:ml-64 p-6 h-screen w-screen">
    <p class="text-[#fe6806] mb-3 font-bold text-3xl">halaman kasir</p>
    <div class="text-white">
        <div class="grid grid-cols-2 grid-rows-3 gap-y-2 gap-x-4 w-3/5 bg-gray-900 p-5 rounded-lg">
            
            <div class="col-span-2">
                <label class="block text-sm font-medium">Nama Customer</label>
                <input type="text" class="w-full h-8 text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1" value="Customer">
            </div>

            <div class="col-span-1">
                <label class="block text-sm font-medium">Total Harga</label>
                <input type="number" class="h-8 w-full text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1" value="50000">
            </div>

            <div class="col-span-1">
                <label class="block text-sm font-medium">Metode Pemabayaran</label>
                <select class="h-8 w-full text-xs bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-1">
                    <option disabled selected>pilih metode pembayaran</option>
                    <option>Tunai</option>
                    <option>Qris</option>
                </select>
            </div>
            
            <button class="col-span-2 h-8 mt-3 font-medium tracking-wide text-white text-xs capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                Checkout
            </button>
        </div>

        <div class="mt-7 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-y-5 w-3/5 bg-gray-900 p-5 rounded-lg">
    
            <!-- Bagian pencarian -->
            <div class="col-span-full">
                <p class="font-bold text-lg text-white">Daftar Produk</p>
                <input type="text" placeholder="Cari Produk" 
                    class="w-full h-10 text-sm bg-gray-800 border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 rounded p-2 mt-2 text-white">
            </div>
        
            <!-- Produk -->
            <div class="w-28 h-32 bg-gray-700 p-2 rounded-lg shadow-lg flex flex-col items-center text-center">
                <img class="object-cover w-auto h-16 rounded-lg" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                <span class="text-xs font-semibold mt-1 text-white">Susu Beruang</span>
            </div>
        
            <div class="w-28 h-32 bg-gray-700 p-2 rounded-lg shadow-lg flex flex-col items-center text-center">
                <img class="object-cover w-auto h-16 rounded-lg" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                <span class="text-xs font-semibold mt-1 text-white">Susu Beruang</span>
            </div>
        
            <div class="w-28 h-32 bg-gray-700 p-2 rounded-lg shadow-lg flex flex-col items-center text-center">
                <img class="object-cover w-auto h-16 rounded-lg" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                <span class="text-xs font-semibold mt-1 text-white">Susu Beruang</span>
            </div>
        
            <div class="w-28 h-32 bg-gray-700 p-2 rounded-lg shadow-lg flex flex-col items-center text-center">
                <img class="object-cover w-auto h-16 rounded-lg" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                <span class="text-xs font-semibold mt-1 text-white">Susu Beruang</span>
            </div>
        
            <div class="w-28 h-32 bg-gray-700 p-2 rounded-lg shadow-lg flex flex-col items-center text-center">
                <img class="object-cover w-auto h-16 rounded-lg" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                <span class="text-xs font-semibold mt-1 text-white">Susu Beruang</span>
            </div>
        
        </div>
        


    </div>
</div>
