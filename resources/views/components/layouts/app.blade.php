<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
    </head>
    <style>
        [x-cloak] { display: none !important}
    </style>

<body x-data="{open:false}" class="bg-[#0e0e0e] h-screen">

    <!-- Navbar -->
    <nav class="bg-black text-white p-4 fixed z-20 top-0 left-0 w-full h-14 border-1 shadow-md z-50">
        <button @click="open = !open" class="lg:hidden -ml-3 -mt-2 flex flex-col gap-1 p-2">
            <span class="block w-7 h-1 bg-[#fe6806] rounded transition-transform duration-300" 
                  :class="open ? 'rotate-45 translate-y-2' : ''"></span>
            <span class="block w-7 h-1 bg-[#fe6806] rounded transition-opacity duration-300" 
                  :class="open ? 'opacity-0' : ''"></span>
            <span class="block w-7 h-1 bg-[#fe6806] rounded transition-transform duration-300" 
                  :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
        </button>
    </nav>

    <!-- Sidebar + Content Wrapper -->
    <div class="flex pt-14 h-screen"> <!-- pt-16 = Padding Top agar tidak tertutup Navbar -->

        <aside x-cloak x-show="open || window.innerWidth >= 1024" 
            x-transition:enter="transform transition ease-out duration-300"
            x-transition:enter-start="-translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transform transition ease-in duration-300"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="-translate-x-full opacity-0"
            class="fixed z-20 h-full left-0 flex-col w-64 px-5 py-8 bg-black">
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav x-data="{ activePage: window.location.pathname }" class="-mx-3 space-y-2 ">
                    <a :class="activePage === '/dashboard' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/dashboard" wire:navigate>
                        <svg :class="activePage === '/dashboard' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806"><path d="M96-144v-72h768v72H96Zm48-120v-264h96v264h-96Zm192 0v-456h96v456h-96Zm192 0v-336h96v336h-96Zm192 0v-552h96v552h-96Z"/></svg>

                        <span :class="activePage === '/dashboard' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Dashboard</span>
                    </a>

                    <a :class="activePage === '/transaction' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/transaction" wire:navigate>
                        <svg :class="activePage === '/transaction' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806">
                            <path d="M280-640q-33 0-56.5-23.5T200-720v-80q0-33 23.5-56.5T280-880h400q33 0 56.5 23.5T760-800v80q0 33-23.5 56.5T680-640H280Zm0-80h400v-80H280v80ZM160-80q-33 0-56.5-23.5T80-160v-40h800v40q0 33-23.5 56.5T800-80H160ZM80-240l139-313q10-22 30-34.5t43-12.5h376q23 0 43 12.5t30 34.5l139 313H80Zm260-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm120 160h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm120 160h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Z"/>
                        </svg>
                        <span :class="activePage === '/transaction' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Halaman Kasir</span>
                    </a>

                    <a :class="activePage === '/kategori' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/kategori" wire:navigate>
                        {{-- <svg :class="activePage === '/product' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806">
                            <path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                        </svg> --}}
                        <svg :class="activePage === '/kategori' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fe6806"><path d="m276-528 204-336 204 336H276ZM696-96q-70 0-119-49t-49-119q0-70 49-119t119-49q70 0 119 49t49 119q0 70-49 119T696-96Zm-552-24v-288h288v288H144Zm551.77-48Q736-168 764-195.77q28-27.78 28-68Q792-304 764.23-332q-27.78-28-68-28Q656-360 628-332.23q-28 27.78-28 68Q600-224 627.77-196q27.78 28 68 28ZM216-192h144v-144H216v144Zm188-408h152l-76-125-76 125Zm76 0ZM360-336Zm331 67Z"/></svg>
                        <span :class="activePage === '/kategori' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Kategori</span>
                    </a>
                    
                    <a :class="activePage === '/product' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/product" wire:navigate>
                        <svg :class="activePage === '/product' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806">
                            <path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                        </svg>
                        <span :class="activePage === '/product' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Product</span>
                    </a>
                    
                    <a :class="activePage === '/finance' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/finance" wire:navigate>
                        <svg :class="activePage === '/finance' ? 'stroke-black' : ''" class="-mr-1 group-hover:stroke-black" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#fe6806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-minimal">
                            <path d="M17 14h.01"/>
                            <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14"/>
                        </svg>
                        <span :class="activePage === '/finance' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Manajemen Keuangan</span>
                    </a>
                    
                    <a :class="activePage === '/settings' ? 'bg-[#fe6806]' : ''" class="group flex items-center px-3 p-3 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/settings" wire:navigate>
                        <svg :class="activePage === '/settings' ? 'stroke-black' : ''" class="-mr-1 group-hover:stroke-black" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#fe6806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-2">
                            <path d="M20 7h-9"/>
                            <path d="M14 17H5"/>
                            <circle cx="17" cy="17" r="3"/>
                            <circle cx="7" cy="7" r="3"/>
                        </svg>
                        <span :class="activePage === '/settings' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Pengaturan Toko</span>
                    </a>
                    
                </nav>
            </div>
        </aside>
        
        <!-- Content -->
        {{ $slot }}

    </div>
    @livewireScripts
</body>
