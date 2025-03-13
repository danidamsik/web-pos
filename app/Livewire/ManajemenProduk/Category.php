<?php

namespace App\Livewire\ManajemenProduk;

use Livewire\Component;
use SebastianBergmann\Type\TrueType;

class Category extends Component
{
    public $selectedItems = [];
    
    public function test() {
        $this->selectedItems = [];
        
        $this->dispatch('show-notification');
    }

    public function render()
    {
        return view('livewire.manajemen-produk.category');
    }
}
