<div x-data="checkboxHandler()" class="container w-screen lg:w-full text-white -ml-7 mx-auto p-4">
    <div class="bg-gray-900 rounded-lg shadow-lg p-4">
        <!-- Header -->
        <div class="inline lg:flex justify-between items-center mb-4">
            <input type="text" class="bg-gray-800 text-white rounded-full pl-10 pr-4 py-2 focus:outline-none" placeholder="Search">
            <div class="my-3 lg:my-0">
                <div x-cloak x-show="$wire.show" class="w-screen h-screen fixed inset-0 bg-black bg-opacity-75"></div>
                <button @click="selectedItems.length > 0 && (open = true)" x-text="buttonText"
                    class="px-7 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                </button>
                <button @click="$dispatch('create'), $wire.show=true" class="ml-1 px-7 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Add Category
                </button>
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
                        <td @click="$dispatch('update'); $wire.show = true" class="py-2 px-4 text-teal-400 cursor-pointer">
                            Edit
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
    @include('livewire.component.confirm-modal')
    @include('livewire.component.notifikasi')
    @include('livewire.component.modal-form')
</div>

<script>
function checkboxHandler() {
    return {
        items: @js($items),
        selectedItems: @entangle('selectedItems'),
        open: @entangle('open'),
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
