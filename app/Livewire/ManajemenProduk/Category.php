<?php

namespace App\Livewire\ManajemenProduk;

use Livewire\Component;
use SebastianBergmann\Type\TrueType;

class Category extends Component
{
    public $selectedItems = [];
    public $open = False, $show = False;

    public $items = [
        ['id' => 1, 'name' => "Kategori 1", 'status' => true],
        ['id' => 2, 'name' => "Kategori 2", 'status' => false],
        ['id' => 3, 'name' => "Kategori 3", 'status' => true],
    ];
    public $kategori = ['name' => "category A", 'slug' => "hello", 'deskripsi' => "pejhdjshdjs", 'checked' => true];


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
        return view('livewire.manajemen-produk.category', ['items' => $this->items]);
    }
}
