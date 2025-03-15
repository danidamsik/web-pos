<!-- Modal Konfirmasi -->
<div x-cloak x-show="open && selectedItems.length > 0" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-5 rounded-lg shadow-lg w-80 lg:w-96">
        <h2 class="text-lg font-semibold text-gray-800">Konfirmasi Hapus</h2>
        <p class="text-gray-600 mt-2">Apakah Anda yakin ingin menghapus item ini?</p>
        <div class="mt-4 flex justify-end space-x-2">
            <button @click="open = false" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</button>

            <button wire:click="test" wire:loading.class="px-6" wire:target="test" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                <p wire:loading.remove wire:target="test">hapus</p>
                <div wire:loading wire:target="test" class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></div>
            </button>
        </div>
    </div>
</div>



