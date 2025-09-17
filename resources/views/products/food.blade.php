@extends('layouts.main')

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
    animation: slideFadeZoomIn 0.9s cubic-bezier(0.33, 1, 0.68, 1) both;
}
</style>

@php
    $products = [
        [ 'name' => 'Acetic Acid', 'description' => 'Digunakan sebagai bahan tambahan makanan dan pengatur keasaman.' ],
        [ 'name' => 'Glycerine', 'description' => 'Bahan pelembab alami dalam industri makanan dan minuman.' ],
        [ 'name' => 'Citric Acid', 'description' => 'Pengatur keasaman alami dan pengawet makanan.' ],
        [ 'name' => 'Soda Ash', 'description' => 'Digunakan untuk pengaturan pH dalam industri makanan.' ],
        [ 'name' => 'Xanthan Gum', 'description' => 'Bahan pengental alami yang digunakan dalam produk makanan dan minuman.' ],
        [ 'name' => 'Corn Starch', 'description' => 'Digunakan sebagai pengental, pengisi, dan bahan tambahan makanan.' ],
        [ 'name' => 'Ammonium Bicarbonate', 'description' => 'Digunakan sebagai agen pengembang dalam produk bakery.' ],
        [ 'name' => 'Sodium Nitrite', 'description' => 'Pengawet makanan yang digunakan dalam produk daging olahan.' ],
        [ 'name' => 'Potassium Carbonate', 'description' => 'Bahan tambahan untuk pengolahan makanan dan pembuatan mie.' ],
        [ 'name' => 'Sodium Bicarbonate', 'description' => 'Bahan pengembang dalam industri bakery dan pengatur pH.' ],
        [ 'name' => 'Dextrose', 'description' => 'Gula alami sebagai pemanis dan sumber energi pada produk minuman.' ],
        [ 'name' => 'Sodium Chloride', 'description' => 'Bahan utama sebagai garam dapur dan pengawet makanan.' ],
    ];
@endphp

<!-- SECTION INTRO -->
<section class="bg-[#0F2573] py-20 text-white" id="foodbeverage-section">
    <div class="max-w-7xl mx-auto px-4 text-center animate-slideFadeZoomIn">
        <div class="mb-10 animate-slideFadeZoomIn" style="animation-delay: 0.1s">
            <img src="{{ asset('images/food-banner.jpg') }}" alt="Food & Beverage Chemicals" class="mx-auto rounded-xl shadow-lg w-full max-w-4xl object-cover h-72 border-4 border-white">
        </div>
        <h1 class="text-3xl md:text-4xl font-bold mb-4 animate-slideFadeZoomIn" style="animation-delay: 0.2s">
            Food & Beverage Chemicals
        </h1>
        <p class="text-white/80 max-w-3xl mx-auto text-base md:text-lg mb-10 leading-relaxed animate-slideFadeZoomIn" style="animation-delay: 0.3s">
            Kami menyediakan bahan kimia food grade yang aman dan sesuai standar industri makanan dan minuman, untuk menjaga kualitas produk dan mendukung bisnis kuliner Anda.
        </p>
    </div>

    <!-- PRODUK LIST -->
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-xl font-semibold text-white mb-6 text-center animate-slideFadeZoomIn" style="animation-delay: 0.4s">Daftar Produk Utama</h2>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-left text-[#0F2573]">
            @foreach ($products as $index => $product)
                <li class="bg-[#F5F9FF] hover:bg-[#E4F0FF] p-4 rounded-lg shadow-sm transition duration-200 border border-blue-100 animate-slideFadeZoomIn"
                    style="animation-delay: {{ 0.1 + ($index * 0.08) }}s;">
                    <h3 class="text-md font-bold text-primary mb-1">{{ $product['name'] }}</h3>
                    <p class="text-sm text-gray-600 leading-snug">{{ $product['description'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<!-- ALL PRODUCTS SECTION -->
<section id="all-products" class="bg-white py-16 text-[#0F2573]">
    <div class="max-w-7xl mx-auto px-4 text-center mb-8 animate-slideFadeZoomIn">
        <h2 class="text-2xl font-bold mb-4">Produk Lainnya</h2>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Kami juga menyediakan berbagai bahan kimia lainnya untuk kebutuhan industri Anda:
        </p>
    </div>

    <div class="text-center my-10">
        <button id="toggleButton" class="w-full sm:w-auto bg-primary text-white font-semibold py-3 px-8 rounded-full hover:bg-darkblue transition animate-slideFadeZoomIn"
            style="animation-delay: 0.2s"
            onclick="
                const section = document.getElementById('product-wrapper');
                section.classList.toggle('hidden');
                this.innerText = section.classList.contains('hidden') ? 'Lihat Semua Produk' : 'Sembunyikan Produk';">
            Lihat Semua Produk
        </button>
    </div>

    <div id="product-wrapper" class="hidden">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 text-sm text-gray-700 leading-relaxed">
            @php
                $products = ['Acrylic Acid', 'Acetic Acid', 'Aluminium Hydroxide', 'Aluminium Oxide', 'Aluminium Stearate', 'Aluminium Sulphate',
                    'Alkohol', 'Ammoniak Liquid', 'Ammonium Bicarbonate', 'Ammonium Persulphate', 'Barium Sulphate', 'Barium Chloride',
                    'Barium Carbinate', 'Bentonit', 'Benzoic Acid', 'Biocide', 'Calcium Fluoride', 'Calcium Nitrate', 'Calcium Stearate',
                    'Calcium Sulphate', 'Calcium Hydroxide', 'Caustic Soda (NaOH)', 'Chromium', 'Chlorin Liquid / NAOCL', 'Copper Oxide',
                    'Copper Sulfate', 'Corn Starch', 'Corrosion Inhibitors', 'Chromosal', 'Calcium Propionate', 'Diammonium Phospate',
                    'Dextrin', 'Dextrose', 'Disodium Phospate', 'Dipropylen Glycol', 'E D T A', 'Ethyl Acetate', 'Ferric Chloride',
                    'Ferrous Sulfate', 'Flocculant Anionic', 'Formic Acid', 'Glycerine', 'Hydrates Lime', 'Hydrazine Hydate',
                    'Hydrochloric Acid', 'Hydroflouric Acid', 'Hydrogen Peroxide', 'Iron Oxide', 'Iso Propyl Alcohol', 'Kaporit / TCCA',
                    'Lem Bening', 'Lauric Acid', 'Lithopone', 'Mala Chite Green', 'Maltose Syrup', 'Malto Dextrin', 'Magnesium Carbonate',
                    'Magnesium Chloride', 'Magnesium Oxide', 'Magnesium Sulphate', 'Manganese Dioxide', 'Manganese Greensand',
                    'Manganese Oxide', 'Manganese Sulphate', 'Monosodium Glutamate', 'Sodium Hydrosulphite', 'Sodium Metabisulphite',
                    'Sodium Nitrite', 'Sodium Sulphate', 'Sodium Trisphospate', 'SN Flake / Sodium Sulpide', 'Sulphuric Acid',
                    'Sulfamic Acid', 'Sodium Carboxymethyl', 'Sodium Tripolyphosphate', 'Stearic Acid', 'Talc Powder', 'Tartaric Acid',
                    'Titanium Dioxide', 'Trisodium Phospate', 'Trisodium Citrate', 'TEG', 'UREA', 'MAP Methylene Blue', 'MEA, DMEA',
                    'Methyl Paraben', 'Methanol', 'Methylene Chloride', 'Nitric Acid', 'Natrium Klorida', 'Natrium Bisulphite',
                    'Oxalic Acid', 'Parafin Wax', 'Petrosin', 'Phosporic Acid', 'PAC', 'Potassium Carbonate', 'Potassium Chloride',
                    'Potassium Citrate', 'Potassium Nitrate', 'Potassium Hydroxide', 'Potassium Permanganate', 'Potassium Sorbate',
                    'Propylene Glycol (PG)', 'Poly Ethylene Glycol (PEG)', 'Poly Propylene Glycol (PPG)', 'Siligacel', 'Soda Ash',
                    'Sodium Acetate', 'Sodium Bicarbonate', 'Sodium Bisulfate / NaHSO4', 'Sodium Bisulfate / NaHSO3', 'Sodium Benzoat',
                    'Sodium Chloride', 'Sodium Citrate', 'Sodium Formate', 'Sodium Gluconate', 'Sodium Hexamete Phospate', 'Sodium Humate',
                    'Waterglass', 'White Oil', 'White Spirit', 'Xanthan Gum', 'Zinc Chloride', 'Zinc Sulfate'
                    ];
                $columns = array_chunk($products, ceil(count($products) / 3));
            @endphp
            @foreach($columns as $col)
                <ul class="space-y-2">
                    @foreach($col as $product)
                        <li class="animate-slideFadeZoomIn">{{ $product }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray('.animate-slideFadeZoomIn').forEach((el, i) => {
            gsap.from(el, {
                opacity: 0,
                y: 60,
                scale: 0.95,
                duration: 0.8,
                ease: "power2.out",
                delay: i * 0.05,
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });
    });
</script>
@endpush
