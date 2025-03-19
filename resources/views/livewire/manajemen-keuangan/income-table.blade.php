<div class="container mx-auto p-4 text-white">
    <div class="bg-gray-900 rounded-lg p-4">
        <div class="flex justify-between items-center mb-4">
            <button class="bg-gray-800 bg-opacity-80 text-white px-4 py-2 rounded-xl">Export Pemasukan</button>
            <div class="flex items-center space-x-2">
                <input type="text" placeholder="Search" class="bg-gray-700 text-white px-4 py-2 rounded">
                <i class="fas fa-search text-gray-400"></i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                  </svg>
            </div>
        </div>
        <table class="w-full text-left">
            <thead class="bg-gray-700">
                <tr>
                    <th class="p-2"><input type="checkbox"></th>
                    <th class="p-2">Nama Pemesan</th>
                    <th class="p-2">Total Harga</th>
                    <th class="p-2">Metode Pembayaran</th>
                    <th class="p-2"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-700">
                    <td class="p-2"><input type="checkbox"></td>
                    <td class="p-2">Customer</td>
                    <td class="p-2">19,000</td>
                    <td class="p-2">Tunai</td>
                    <td class="p-2 flex space-x-2">
                        <a href="#" class="text-green-500">Edit</a>
                        <a href="#" class="text-yellow-500">Detail</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-700">
                    <td class="p-2"><input type="checkbox"></td>
                    <td class="p-2">Pengunjung</td>
                    <td class="p-2">58,000</td>
                    <td class="p-2">Tunai</td>
                    <td class="p-2 flex space-x-2">
                        <a href="#" class="text-green-500">Edit</a>
                        <a href="#" class="text-yellow-500">Detail</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-700">
                    <td class="p-2"><input type="checkbox"></td>
                    <td class="p-2">Customer</td>
                    <td class="p-2">10,000</td>
                    <td class="p-2">Tunai</td>
                    <td class="p-2 flex space-x-2">
                        <a href="#" class="text-green-500">Edit</a>
                        <a href="#" class="text-yellow-500">Detail</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-700">
                    <td class="p-2"><input type="checkbox"></td>
                    <td class="p-2">Pengunjung</td>
                    <td class="p-2">19,000</td>
                    <td class="p-2">Tunai</td>
                    <td class="p-2 flex space-x-2">
                        <a href="#" class="text-green-500">Edit</a>
                        <a href="#" class="text-yellow-500">Detail</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-700">
                    <td class="p-2"><input type="checkbox"></td>
                    <td class="p-2">Customer</td>
                    <td class="p-2">93,000</td>
                    <td class="p-2">QRIS</td>
                    <td class="p-2 flex space-x-2">
                        <a href="#" class="text-green-500">Edit</a>
                        <a href="#" class="text-yellow-500">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-between items-center mt-4">
            <button class="px-3 py-1.5 font-semibold tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-80">
                Provious
            </button>
            <div class="flex items-center space-x-2">
                <span>Per page</span>
                <select class="bg-gray-700 text-white px-2 py-1 rounded">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                </select>
            </div>

            <button class="px-3 py-1.5 font-semibold tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-80">
                Next
            </button>
        </div>
    </div>
</div>
