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
    <div class="flex pt-14"> <!-- pt-16 = Padding Top agar tidak tertutup Navbar -->

        <aside x-cloak x-show="open || window.innerWidth >= 1024" 
            x-transition:enter="transform transition ease-out duration-300"
            x-transition:enter-start="-translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transform transition ease-in duration-300"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="-translate-x-full opacity-0"
            class="fixed z-20 h-full left-0 flex-col w-64 px-7 py-8 bg-black overflow-none lg:overflow-y-auto">
            <div class="flex flex-col justify-between flex-1 -ml-3 mt-0 h-screen">
                <nav x-data="{ activePage: window.location.pathname }" class="-mx-3 -mt-5 space-y-2">
                    <a :class="activePage === '/dashboard' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 ml-3 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/dashboard" wire:navigate>
                        <svg :class="activePage === '/dashboard' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806"><path d="M96-144v-72h768v72H96Zm48-120v-264h96v264h-96Zm192 0v-456h96v456h-96Zm192 0v-336h96v336h-96Zm192 0v-552h96v552h-96Z"/></svg>

                        <span :class="activePage === '/dashboard' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Dashboard</span>
                    </a>

                    <a :class="activePage === '/transaction' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 ml-3 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/transaction" wire:navigate>
                        <svg :class="activePage === '/transaction' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806">
                            <path d="M280-640q-33 0-56.5-23.5T200-720v-80q0-33 23.5-56.5T280-880h400q33 0 56.5 23.5T760-800v80q0 33-23.5 56.5T680-640H280Zm0-80h400v-80H280v80ZM160-80q-33 0-56.5-23.5T80-160v-40h800v40q0 33-23.5 56.5T800-80H160ZM80-240l139-313q10-22 30-34.5t43-12.5h376q23 0 43 12.5t30 34.5l139 313H80Zm260-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm120 160h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm120 160h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Zm0-80h40q8 0 14-6t6-14q0-8-6-14t-14-6h-40q-8 0-14 6t-6 14q0 8 6 14t14 6Z"/>
                        </svg>
                        <span :class="activePage === '/transaction' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Halaman Kasir</span>
                    </a>

                    <div x-data="{ open: true }" class="ml-3">
                        <button @click="open = !open" class="w-full py-2 pr-4 flex justify-between">
                            <span class="font-semibold text-white">Manajemen Product</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open">
                            <a :class="activePage === '/kategori' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/kategori" wire:navigate>
                                <svg :class="activePage === '/kategori' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fe6806"><path d="m276-528 204-336 204 336H276ZM696-96q-70 0-119-49t-49-119q0-70 49-119t119-49q70 0 119 49t49 119q0 70-49 119T696-96Zm-552-24v-288h288v288H144Zm551.77-48Q736-168 764-195.77q28-27.78 28-68Q792-304 764.23-332q-27.78-28-68-28Q656-360 628-332.23q-28 27.78-28 68Q600-224 627.77-196q27.78 28 68 28ZM216-192h144v-144H216v144Zm188-408h152l-76-125-76 125Zm76 0ZM360-336Zm331 67Z"/></svg>
                                <span :class="activePage === '/kategori' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Kategori</span>
                            </a>

                            <a :class="activePage === '/product' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 mt-3 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/product" wire:navigate>
                                <svg :class="activePage === '/product' ? 'fill-black' : ''" class="-mr-1 group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fe6806">
                                    <path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                                </svg>
                                <span :class="activePage === '/product' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Product</span>
                            </a>
                        </div>
                    </div>

                    <div x-data="{ open: true }" class="ml-3">
                        <button @click="open = !open" class="w-full py-2 pr-4 flex justify-between">
                            <span class="font-semibold text-white">Manajemen Keuangan</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open">
                            <a :class="activePage === '/pemasukan' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 my-1 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/pemasukan" wire:navigate>
                                <svg :class="activePage === '/pemasukan' ? 'stroke-black' : ''" class="-mr-1 group-hover:stroke-black" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#fe6806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-minimal">
                                    <path d="M17 14h.01"/>
                                    <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14"/>
                                </svg>
                                <span :class="activePage === '/pemasukan' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Pemasukan</span>
                            </a>
        
                            <a :class="activePage === '/pengeluaran' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 mt-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/pengeluaran" wire:navigate>
                                <svg :class="activePage === '/pengeluaran' ? 'stroke-black' : ''"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>
                                  
                                <span :class="activePage === '/pengeluaran' ? 'text-black' : ''" class="mx-1 text-sm font-medium">Pengeluaran</span>
                            </a>
        
                            <a :class="activePage === '/payment-method' ? 'bg-[#fe6806]' : ''" class="group flex items-center p-1 mt-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/payment-method" wire:navigate>
                                <svg :class="activePage === '/payment-method' ? 'stroke-black' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                                </svg>
                                <span :class="activePage === '/payment-method' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Metode Pembayaran</span>
                            </a>
                        </div>
                    </div>

                    <div x-data="{ open: true }" class="ml-2">
                        <button @click="open = !open" class="w-full py-2 pr-4 flex justify-between">
                            <span class="font-semibold text-white">Pengaturan Toko</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open">
                            <a :class="activePage === '/roles' ? 'bg-[#fe6806]' : ''" class="group flex items-center px-3 p-1 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/roles" wire:navigate>
                                <svg :class="activePage === '/roles' ? 'stroke-black' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                  </svg>
                                  
                                <span :class="activePage === '/roles' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Roles</span>
                            </a>
                            
                            <a :class="activePage === '/users' ? 'bg-[#fe6806]' : ''" class="group flex items-center px-3 p-1 mt-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/users" wire:navigate>
                                <svg :class="activePage === '/users' ? 'stroke-black' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>                               
                                <span :class="activePage === '/users' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Users</span>
                            </a>
                            
                            <a :class="activePage === '/printer-settings' ? 'bg-[#fe6806]' : ''" class="group flex items-center px-3 p-1 mt-2 text-[#fe6806] transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#fe6806] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-black" href="/printer-settings" wire:navigate>
                                <svg :class="activePage === '/printer-settings' ? 'stroke-black' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                  </svg>
                                                                 
                                <span :class="activePage === '/printer-settings' ? 'text-black' : ''" class="mx-2 text-sm font-medium">Pengaturan Printer</span>
                            </a>
                        </div>
                    </div>               
                </nav>
            </div>
        </aside>

        <main class="lg:ml-64 p-6 w-full">
            @yield('content')
        </main>

    </div>
    @livewireScripts
</body>
