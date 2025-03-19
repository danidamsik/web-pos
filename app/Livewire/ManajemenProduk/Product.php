<?php

namespace App\Livewire\ManajemenProduk;

use Livewire\Component;

class Product extends Component
{
    public $open = False, $show = False, $selectedItems = [];

    public $items = [
        ['id' => 1, 'name' => "nama 1", 'gambar' => 'gambar1.jpg', 'kategori' => 'minuman', 'stok' => 20, 'harga' => 12000, 'status' => True, 'barcode' => 1213323232 ],
        ['id' => 2, 'name' => "nama 2", 'gambar' => 'gambar2.jpg', 'kategori' => 'minuman', 'stok' => 20, 'harga' => 12000, 'status' => False, 'barcode' => 1213323232],
        ['id' => 3, 'name' => "nama 3", 'gambar' => 'gambar3.jpg', 'kategori' => 'minuman', 'stok' => 20, 'harga' => 12000, 'status' => True, 'barcode' => 1213323232],
    ];

    public $product = ['id' => 2, 'name' => "nama 2", 'slug'=>'kecap-bango', 'gambar' => 'gambar2.jpg', 'kategori' => 'minuman', 'stok' => 20, 'harga' => 12000, 'status' => False, 'barcode' => 1213323232];

    public function test() {
        sleep(5);
        $this->open = False;
        $this->selectedItems = [];

        $this->dispatch('show-notification', messege: 'data berhasil dihapus');
    }

    public function proses() {
        sleep(5);
        $this->show = False;
        $this->dispatch('show-notification', messege: 'data berhasil disimpan');
    }

    public function render()
    {
        return view('livewire.manajemen-produk.product');
    }
}
