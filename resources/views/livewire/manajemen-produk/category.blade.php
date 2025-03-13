<div x-data="checkboxHandler()" class="container w-full text-white mx-auto p-4">
    <!-- Notifikasi -->
    <div 
    x-data="{ open: false }" 
    x-show="open" 
    x-init="$wire.on('show-notification', () => { 
        open = true; 
        setTimeout(() => open = false, 3000); 
    })"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-[-10px]"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300 transform"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-[-10px]"
    role="alert" 
    class="fixed top-20 right-4 rounded-xl border border-gray-100 bg-white p-4 shadow-md"
>
    <div class="flex items-start gap-4">
        <span class="text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>

        <div class="flex-1">
            <strong class="block font-medium text-gray-900">Info</strong>
            <p class="mt-1 text-sm text-gray-700">Data berhasil dihapus.</p>
        </div>

        <button @click="open = false" class="text-gray-500 transition hover:text-gray-600">
            <span class="sr-only">Dismiss popup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>


    <div class="bg-gray-900 rounded-lg shadow-lg p-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <input type="text" class="bg-gray-800 text-white rounded-full pl-10 pr-4 py-2 focus:outline-none" placeholder="Search">
            <div>
                <button @click="selectedItems.length > 0 && (open = true)" x-text="buttonText"
                    class="px-7 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                </button>
                <button class="ml-1 px-7 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Add Category
                </button>
            </div>
        </div>

        <!-- Modal Konfirmasi -->
        <div x-show="open && selectedItems.length > 0" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-semibold text-gray-800">Konfirmasi Hapus</h2>
                <p class="text-gray-600 mt-2">Apakah Anda yakin ingin menghapus item ini?</p>
                <div class="mt-4 flex justify-end space-x-2">
                    <button @click="open = false" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</button>
                    <button wire:click="test" @click="open = false" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Hapus</button>
                </div>
            </div>
        </div>

        <!-- Tabel -->
        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-800">
                    <th class="py-2 px-4">
                        <input type="checkbox" x-model="allChecked" @change="toggleAll">
                    </th>
                    <th class="py-2 px-4">Nama Kategori</th>
                    <th class="py-2 px-4">Aktif</th>
                    <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <template x-for="item in items" :key="item.id">
                    <tr class="border-b border-gray-700">
                        <td class="py-2 px-4">
                            <input type="checkbox" :value="item.id" x-model="selectedItems" @change="checkStatus">
                        </td>
                        <td class="py-2 px-4" x-text="item.name"></td>
                        <td class="py-2 px-4">
                            <template x-if="item.status">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </template>
                            <template x-if="!item.status">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </template>
                        </td>
                        <td class="py-2 px-4 text-teal-400 cursor-pointer">
                            <i class="fas fa-edit"></i> Edit
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-4">
            <span class="text-gray-400">Per page</span>
            <select class="bg-gray-700 text-white rounded-full pl-4 pr-8 py-2 focus:outline-none">
                <option>10</option>
                <option>20</option>
                <option>30</option>
            </select>
        </div>
    </div>
</div>

<script>
function checkboxHandler() {
    return {
        items: [
            { id: 1, name: "Kategori 1", status: true },
            { id: 2, name: "Kategori 2", status: false },
            { id: 3, name: "Kategori 3", status: true },
        ],
        selectedItems: @entangle('selectedItems'),
        open: false,
        get buttonText() {
            return this.selectedItems.length > 0 ? `Hapus (${this.selectedItems.length})` : "Hapus";
        },
        get allChecked() {
            return this.selectedItems.length === this.items.length && this.items.length > 0;
        },
        toggleAll() {
            this.selectedItems = this.allChecked ? [] : this.items.map(item => item.id);
        },
        checkStatus() {
            this.allChecked = this.selectedItems.length === this.items.length;
        }
    };
}
</script>
