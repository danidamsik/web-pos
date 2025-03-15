<div x-cloak x-show="$wire.show"
    x-transition:enter="transition-transform transition-opacity duration-300 ease-out"
    x-transition:enter-start="opacity-0 -translate-y-20"
    x-transition:enter-end="opacity-100 translate-y-0"
    class="fixed inset-0 flex items-center justify-center">
    <div class="bg-gray-900 rounded-lg shadow-lg w-80 lg:w-full max-w-lg p-6">
        <form wire:submit="proses" x-data="{kategori: ''}" @create.window="kategori = []" @update.window="kategori = $wire.kategori" class="space-y-3">
            <div>
                <label for="nama-kategori" class="block text-sm font-medium text-white">Nama Kategori<span class="text-red-500">*</span></label>
                <input x-model="kategori.name" type="text" id="nama-kategori" class="mt-1 block w-full h-7 px-2 bg-gray-800 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 sm:text-sm text-white">
            </div>
            <div>
                <label for="slug" class="block text-sm font-medium text-white">Slug<span class="text-red-500">*</span></label>
                <input x-model="kategori.slug" type="text" id="slug" class="mt-1 block w-full h-7 px-2 bg-gray-800 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 sm:text-sm text-white">
            </div>
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-white">Deskripsi</label>
                <textarea x-model="kategori.deskripsi" id="deskripsi" rows="3" class="mt-1 block w-full px-2 py-3 bg-gray-800 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 sm:text-sm text-white"></textarea>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="aktif" x-model="kategori.checked" class="h-6 w-6 text-teal-600 border-gray-300 rounded">
                <label for="aktif" class="ml-3 block text-sm font-medium text-white">Aktif<span class="text-red-500">*</span></label>
            </div>
            <div class="flex space-x-4">
                <button wire:loading.remove wire:target="proses" x-data="{text:''}" @create.window="text = 'create'" @update.window="text = 'update'" x-text="text" type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700">
                </button>

                <button wire:loading wire:target="proses" type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700">
                    <div class="ml-10 lg:ml-20 w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></div>
                </button>

                <button @click="$wire.show = false" type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-700 shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700">Cancel</button>
            </div>
        </form>
    </div>
</div>




