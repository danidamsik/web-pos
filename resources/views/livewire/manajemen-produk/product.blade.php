<div x-data="CheckBoxHandler" class="container w-full bg-gray-900 rounded-lg px-4 py-6 text-white mx-auto">
    <div class="block lg:flex justify-between items-center mb-4 space-y-5 lg:space-y-0">
        <div class="grid grid-cols-2 gap-y-4 lg:flex gap-x-2">
            <div x-cloak x-show="$wire.show" class="w-screen h-screen fixed inset-0 bg-black bg-opacity-75"></div>
            <button @click="$wire.show=true, $dispatch('create')" class="ml-1 px-2 lg:px-7 py-2 text-xs font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-2 focus:ring-blue-300">
                Add Product
            </button>
            <button class="font-semibold ml-1 px-2 lg:px-7 flex py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-2 focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-1 lg:-ml-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                </svg>
                <p class="mt-0.5">Cetak Barcode</p>
            </button>
            <button @click="selectedItems.length > 0 && (open = true)" x-text="buttonText" class="col-span-2 px-1 lg:px-7 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-2 focus:ring-red-300">
            </button>
        </div>
        <div class="relative">
            <input class="bg-gray-800 text-white px-4 py-2 rounded-full border border-gray-600 focus:outline-none focus:ring-1 focus:ring-fuchsia-500 focus:border-fuchsia-500 pl-10" placeholder="Search" type="text"/>
            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full bg-gray-800 rounded-lg">
            <thead>
                <tr class="bg-gray-800 text-left text-white">
                    <th class="py-3 px-4"><input type="checkbox" x-model="allChecked" @change="toggleAll" /></th>
                    <th class="py-3 px-4">Nama Produk</th>
                    <th class="py-3 px-4">Gambar</th>
                    <th class="py-3 px-4">Kategori Produk</th>
                    <th class="py-3 px-4">Stok</th>
                    <th class="py-3 px-4">Harga</th>
                    <th class="py-3 px-4">Produk Aktif</th>
                    <th class="py-3 px-4">Barcode Produk</th>
                    <th class="py-3 px-4">Edit</th>
                </tr>
            </thead>
            <tbody class="bg-gray-900">
              <template x-for="item in items" :key="item.id">
                <tr class="border-b border-gray-700">
                    <td class="py-3 px-4">
                        <input type="checkbox"
                               :value="item.id"
                               x-model="selectedItems"
                               @change="checkStatus" />
                    </td>
                    <td class="py-3 px-4" x-text="item.name"></td>
                    <td class="py-3 px-4">
                        <img src="https://storage.googleapis.com/a1aa/image/9MFLdLVLoU0eFU3MYsjqgqE180gQPLud_MTiF6O1hao.jpg"
                             alt="Image of Susu Indomilk" class="rounded-full" width="40" height="40"/>
                    </td>
                    <td class="py-3 px-4" x-text="item.kategori"></td>
                    <td class="py-3 px-4" x-text="item.stok"></td>
                    <td class="py-3 px-4" x-text="item.harga"></td>
                    <td class="py-3 px-4">
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
                    <td class="py-3 px-4" x-text="item.barcode"></td>
                    <td @click="$wire.show=true, $dispatch('update')" class="flex py-3 px-4 text-green-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mt-0.5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    Edit</td>
                </tr>
              </template>
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mt-4">
        <div class="flex items-center">
            <select class="bg-gray-800 text-white px-4 py-2 rounded mr-2">
                <option>5</option>
                <option>10</option>
                <option>15</option>
            </select>
            <span>Per page</span>
        </div>

        <ol class="hidden lg:flex justify-center gap-1 text-xs font-medium">
            <!-- Previous Page -->
            <li>
                <a href="#" class="inline-flex size-8 items-center justify-center rounded-sm bg-gray-800 text-white rtl:rotate-180">
                    <span class="sr-only">Prev Page</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </li>

            <!-- Page Numbers -->
            <li>
                <a href="#" class="block size-8 rounded-sm bg-gray-800 text-center leading-8 text-white">1</a>
            </li>
            <li class="block size-8 rounded-sm bg-gray-800 text-center leading-8 text-white">2</li>
            <li>
                <a href="#" class="block size-8 rounded-sm bg-gray-800 text-center leading-8 text-white">3</a>
            </li>
            <li>
                <a href="#" class="block size-8 rounded-sm bg-gray-800 text-center leading-8 text-white">4</a>
            </li>

            <!-- Next Page -->
            <li>
                <a href="#" class="inline-flex size-8 items-center justify-center rounded-sm bg-gray-800 text-white rtl:rotate-180">
                    <span class="sr-only">Next Page</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </li>
        </ol>
    </div>
    @include('livewire.component.notifikasi')
    @include('livewire.component.confirm-modal')
    @include('livewire.component.modal-product')

</div>

<script>
    function CheckBoxHandler() {
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
        }
    }
</script>
