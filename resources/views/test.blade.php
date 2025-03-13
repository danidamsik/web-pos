<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modal Konfirmasi Hapus</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    
    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" x-show="show" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-20 right-4 bg-blue-500 text-white text-sm px-4 py-2 rounded-lg shadow-md">
        <span class="font-semibold">Info:</span> Ini adalah notifikasi sederhana.
    </div>
    
    

</body>
</html>