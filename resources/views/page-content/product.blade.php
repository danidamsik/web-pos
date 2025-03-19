@extends('app')

@section('content')
<p class="text-[#fe6806] mb-3 font-bold text-3xl">Product List</p>

@livewire('manajemen-produk.tabs-filter')
@livewire('manajemen-produk.product')

@endsection
