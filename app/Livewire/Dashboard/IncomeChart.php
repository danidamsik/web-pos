<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class IncomeChart extends Component
{
    public $data;
    public $categories;
    public $chart, $judul, $colors;
    
    public function mount($chart, $judul, $colors) {
        $this->data = [35, 51, 49, 62, 69, 91, 148];
        $this->categories = ['sen', 'sel', 'rab', 'kam', 'jum', 'sab', 'mingg', 'Aug', 'Sep'];
        $this->chart = $chart;
        $this->judul = $judul;
        $this->colors = $colors;
    }
    
    public function render()
    {
        return view('livewire.dashboard.income-chart');
    }
}
