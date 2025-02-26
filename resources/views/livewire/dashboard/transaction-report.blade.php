<div>
<p class="text-[#fe6806] mb-3 font-bold text-3xl">Dashboard</p>

 <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
    <div class="col-span-1 lg:col-span-2 w-full bg-gray-900 p-4 rounded-lg flex space-x-4 text-white">
        <div class="flex-1">
            <label for="start-date" class="block text-sm mb-2 mt-2">Dari Tanggal</label>
            <div class="relative">
                <input type="date" id="start-date" class="w-5/6 bg-gray-800 text-white text-xs p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600">
            </div>
        </div>
        <div class="flex-1">
            <label for="end-date" class="block text-sm mb-2 mt-2">Sampai Tanggal</label>
            <div class="relative">
                <input type="date" id="end-date" class="w-5/6 bg-gray-800 text-white text-xs p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600">
            </div>
        </div>
    </div>
    
    
    {{-- div berikutnya --}}
    <article class="flex items-center gap-4 rounded-lg bg-gray-900 p-6">
        <span class="rounded-full bg-gray-700 p-3 text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-8"
            fill="none"
            viewBox="0 0 24 24"
            stroke="white"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
            />
          </svg>
        </span>
      
        <div>
          <p class="text-2xl font-medium text-white">200</p>
      
          <p class="text-sm text-white">Total Order</p>
        </div>
      </article>

    <article class="flex items-end justify-between rounded-lg bg-gray-900 p-6">
        <div class="flex items-center gap-4">
          <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
          </span>
      
          <div>
            <p class="text-sm text-white">Pemasukan</p>
      
            <p class="text-2xl font-medium text-white">Rp12.0000</p>
          </div>
        </div>
      
        <div class="ml-2 inline-flex gap-2 w-20 rounded-sm bg-green-100 p-1 text-green-600">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
            />
          </svg>
      
          <span class="w-14 pr-2 text-xs font-medium"> omset </span>
        </div>
      </article>
      
      <article class="flex items-end justify-between rounded-lg bg-gray-900 p-6">
        <div class="flex items-center gap-4">
          <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
          </span>
      
          <div>
            <p class="text-sm text-white">Pengeluaran</p>
      
            <p class="text-2xl font-medium text-white">Rp15.000</p>
          </div>
        </div>
      
        <div class="inline-flex gap-2 w-20 rounded-sm bg-red-100 p-1 text-red-600">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"
            />
          </svg>
      
          <span class="w-15 pr-2 text-xs font-medium"> expense </span>
        </div>
      </article>

      <article class="flex items-end justify-between rounded-lg bg-gray-900 p-6">
        <div class="flex items-center gap-4">
          <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
          </span>
      
          <div>
            <p class="text-sm text-white">Laba</p>
      
            <p class="text-2xl font-medium text-white">Rp12.0000</p>
          </div>
        </div>
      
        <div class="ml-2 inline-flex gap-2 rounded-sm bg-blue-300 p-1 text-blue-600">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
            />
          </svg>
      
          <span class="w-16 pr-0 text-xs font-medium">laba bersih</span>
        </div>
      </article>
  </div>
</div>