<div x-cloak x-data="{open:false, info:''}" x-show="open"
    x-init="$wire.on('show-notification', (messege) => {
        open = true;
        info = messege.messege;
        setTimeout(() => open = false, 3000);
    })"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-[-10px]"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300 transform"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-[-10px]"
    role="alert"
    class="fixed top-20 right-4 rounded-xl border border-gray-100 bg-white p-4 shadow-md">
    <div class="flex">
        <span class="flex text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p x-text="info" class="mt-0.5 ml-1 text-sm text-gray-700"></p>
        </span>

        <button @click="open = false" class="text-gray-500 transition hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
