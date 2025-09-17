@extends('layouts.main')
@section('title', 'Produk | PT. Tetap Setia Jaya')
@section('description', 'Daftar lengkap kategori bahan kimia industri dari PT. Tetap Setia Jaya.')

@section('content')

<style>
@keyframes slideFadeZoomIn {
    0% {
        opacity: 0;
        transform: translateY(60px) scale(0.95);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}
.animate-slideFadeZoomIn {
    animation: slideFadeZoomIn 0.9s ease-out both;
}
</style>

<!-- HERO SECTION -->
<section id="hero-section" class="bg-primary text-white text-center py-24">
    <div class="max-w-4xl mx-auto px-4 animate-slideFadeZoomIn" style="animation-delay: 0.1s">
        <h1 class="text-5xl font-extrabold mb-6 leading-tight">Produk PT. TETAP SETIA JAYA</h1>
        <p class="text-lightblue text-xl">Solusi bahan kimia industri terpercaya yang terbagi dalam kategori berikut.</p>
    </div>
</section>

<!-- CATEGORIES SECTION -->
@php
    $categories = [
        ['id' => 'fertilizer', 'title' => 'Fertilizer Chemicals', 'link' => '/products/fertilizer', 'desc' => 'Pupuk kimia dan bahan pendukung pertanian.', 'bg' => '#F1F5FF', 'products' => [
            ['name' => 'Ammonium Sulphate', 'desc' => 'Memberikan sulfur dan nitrogen untuk tanaman.'],
            ['name' => 'Ammonium Chloride', 'desc' => 'Sumber nitrogen yang efisien untuk pupuk.'],
            ['name' => 'Nitric Acid', 'desc' => 'Digunakan dalam produksi pupuk dan bahan kimia.'],
        ]],
        ['id' => 'water', 'title' => 'Water Treatment', 'link' => '/products/water', 'desc' => 'Solusi kimia untuk pengolahan air bersih & limbah.', 'bg' => '#EAF7FB', 'products' => [
            ['name' => 'Aluminium Sulfate / Tawas', 'desc' => 'Koagulan utama dalam pengolahan air.'],
            ['name' => 'Calcium Hydroxide', 'desc' => 'Digunakan untuk penyesuaian pH air.'],
            ['name' => 'Kaporit', 'desc' => 'Disinfektan umum untuk air bersih.'],
        ]],
        ['id' => 'rubber', 'title' => 'Rubber & Gold', 'link' => '/products/rubber', 'desc' => 'Bahan kimia untuk karet, pertambangan & emas.', 'bg' => '#FFF6F1', 'products' => [
            ['name' => 'Stearic Acid', 'desc' => 'Agen pengolahan dalam produksi karet.'],
            ['name' => 'Caustic Soda', 'desc' => 'Digunakan dalam ekstraksi dan pengolahan.'],
            ['name' => 'Sodium Metabisulphite', 'desc' => 'Agen reduksi dan pengawet.'],
        ]],
        ['id' => 'papper', 'title' => 'Paper & Pulp', 'link' => '/products/papper', 'desc' => 'Kimia khusus industri kertas & pulp.', 'bg' => '#F5F5F5', 'products' => [
            ['name' => 'Caustic Soda', 'desc' => 'Digunakan untuk pemutihan dan pemisahan serat.'],
            ['name' => 'Sodium Sulfide / SN', 'desc' => 'Memecah lignin pada proses pulp.'],
            ['name' => 'Flake', 'desc' => 'Digunakan dalam proses pengolahan pulp.'],
        ]],
        ['id' => 'cosmetic', 'title' => 'Cosmetic & Personal Care', 'link' => '/products/cosmetic', 'desc' => 'Bahan kimia untuk kosmetik & perawatan diri.', 'bg' => '#FDF2FA', 'products' => [
            ['name' => 'Propylene Glycol (PG)', 'desc' => 'Pelarut dan humektan dalam kosmetik.'],
            ['name' => 'Citric Acid', 'desc' => 'Pengatur pH dan pengawet alami.'],
            ['name' => 'Glycerin', 'desc' => 'Pelembab alami untuk kulit.'],
        ]],
        ['id' => 'food', 'title' => 'Food & Beverage', 'link' => '/products/food', 'desc' => 'Bahan tambahan makanan & minuman yang aman.', 'bg' => '#FFFCEB', 'products' => [
            ['name' => 'Acetic Acid', 'desc' => 'Agen pengasam dan pengawet.'],
            ['name' => 'Glycerine', 'desc' => 'Pelembab dan pelarut dalam makanan.'],
            ['name' => 'Citric Acid', 'desc' => 'Penambah rasa asam alami.'],
        ]],
    ];
@endphp

@foreach($categories as $index => $cat)
<section id="{{ $cat['id'] }}" class="py-24" style="background-color: {{ $cat['bg'] }};">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 animate-slideFadeZoomIn" style="animation-delay: {{ 0.2 + $index * 0.2 }}s">
            <div>
                <h2 class="text-3xl font-bold text-primary mb-2">{{ $cat['title'] }}</h2>
                <p class="text-gray-600 opacity-80">{{ $cat['desc'] }}</p>
            </div>
            <a href="{{ $cat['link'] }}" class="mt-6 md:mt-0 bg-primary text-white font-semibold py-3 px-8 rounded-full shadow hover:bg-darkblue transition-all duration-300">Lihat Detail</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($cat['products'] as $pindex => $product)
            <div class="bg-white rounded-2xl shadow-md p-6 product-card animate-slideFadeZoomIn" style="animation-delay: {{ 0.3 + $pindex * 0.1 }}s">
                <h3 class="font-semibold text-primary text-lg mb-2">{{ $product['name'] }}</h3>
                <p class="text-gray-600 text-sm">{{ $product['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

@endsection
