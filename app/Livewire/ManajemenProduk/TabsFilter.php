<?php

namespace App\Livewire\ManajemenProduk;

use Livewire\Component;
use Livewire\Attributes\Url;

class TabsFilter extends Component
{
    #[Url]
    public $ActiveTabs;

    public function render()
    {
        return view('livewire.manajemen-produk.tabs-filter');
    }

    public function test() {}
}
