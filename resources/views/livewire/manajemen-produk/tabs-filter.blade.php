<div x-data="{ActiveTab : $wire.entangle('ActiveTabs') }" class="mx-auto justify-center mb-5 bg-gray-900 w-full lg:w-1/2 text-sm rounded-lg p-2 flex space-x-1">
    <button @click="$wire.ActiveTabs = 'All'" :class="ActiveTab === 'All' ? 'bg-gray-800 text-cyan-400' : ''" class="flex items-center space-x-2 text-white px-3 py-1 rounded-lg">
        <span>All</span>
    </button>
    <button @click="$wire.ActiveTabs = 'stok banyak'" :class="ActiveTab === 'stok banyak' ? 'bg-gray-800 text-cyan-400' : ''" class="flex items-center space-x-2 text-gray-300 hover:bg-gray-800 px-2 py-1 rounded-lg">
        <span>Stock Banyak</span>
        <span class="bg-green-700 text-xs bg-opacity-50 border border-green-700 text-green-300 px-2 py-0 rounded-lg">12</span>
    </button>
    <button @click="$wire.ActiveTabs = 'stok sedikit'" :class="ActiveTab === 'stok sedikit' ? 'bg-gray-800 text-cyan-400' : ''" class="flex items-center space-x-2 text-gray-300 hover:bg-gray-800 px-2 py-1 rounded-lg">
        <span>Stock Sedikit</span>
        <span class="bg-yellow-700 text-xs bg-opacity-50 border border-yellow-700 text-yellow-300 px-2 py-0 rounded-lg">2</span>
    </button>
    <button @click="$wire.ActiveTabs = 'stok habis'" :class="ActiveTab === 'stok habis' ? 'bg-gray-800 text-cyan-400' : ''" class="flex items-center space-x-2 text-gray-300 hover:bg-gray-800 px-2 py-1 rounded-lg">
        <span>Stock Habis</span>
        <span class="bg-red-700 text-xs bg-opacity-50 border border-red-700 text-red-300 px-2 py-0 rounded-lg">6</span>
    </button>
</div>

