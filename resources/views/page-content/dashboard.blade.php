@extends('app')

@section('content')
    @livewire('dashboard.transaction-report')

    <div class="block ml-0 lg:flex gap-x-7">
        @livewire('dashboard.income-chart', ['chart' => "chart", "judul" => "pemasukan", "colors" => "#00b2ff"])
        @livewire('dashboard.income-chart', ['chart' => "chart2", "judul" => "pengeluaran", "colors" => "#FF5733"])
    </div>

    <div class="block ml-0 lg:ml-2 lg:flex gap-x-7">
        @livewire('dashboard.bestseller-table')
        @livewire('dashboard.product-status')
    </div>
@endsection


