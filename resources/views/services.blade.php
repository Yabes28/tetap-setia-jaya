@extends('layouts.main')

@section('content')

<!-- HERO SECTION -->
<section class="animate-hero relative bg-gradient-to-r from-primary to-darkblue py-24 text-center text-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Layanan PT. TETAP SETIA JAYA</h1>
        <p class="text-lg font-light">
            Layanan profesional kami hadir untuk memenuhi setiap kebutuhan industri Anda dalam bidang bahan kimia.
        </p>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="relative py-20 bg-gray-50 overflow-hidden animate-services">
    <div class="absolute inset-0 bg-[url('/images/floating-cogs.svg')] bg-repeat opacity-5"></div>
    <div class="relative z-10">
        <div class="text-center mb-12 px-4">
            <h2 class="text-3xl font-bold text-darkblue mb-4">Layanan Unggulan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                PT. Tetap Setia Jaya berkomitmen memberikan layanan terbaik mulai dari konsultasi produk, penyediaan bahan kimia, hingga pengiriman dan dukungan teknis.
            </p>
        </div>

        <div class="service-cards max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-4">
            @foreach([
                ['title' => 'Penyediaan Produk Kimia', 'desc' => 'Kami menyediakan bahan kimia berkualitas dari berbagai kategori...'],
                ['title' => 'Konsultasi Teknis', 'desc' => 'Tim ahli kami siap membantu memberikan rekomendasi teknis produk...'],
                ['title' => 'Pengiriman Cepat & Aman', 'desc' => 'Didukung oleh jaringan logistik terpercaya, kami menjamin pengiriman...'],
                ['title' => 'Layanan Purna Jual', 'desc' => 'Komitmen kami tidak berhenti pada pengiriman. Kami menyediakan layanan...'],
                ['title' => 'Flexible Custom Solutions', 'desc' => 'Kami menawarkan solusi bahan kimia custom sesuai kebutuhan spesifik...']
            ] as $service)
            <div class="service-card bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition">
                <h3 class="text-primary font-bold text-xl mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-700 leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="animate-cta relative py-20 bg-gradient-to-br from-[#266CA9] to-[#0F2573] text-white text-center overflow-hidden">
    <div class="absolute inset-0 bg-[url('/images/floating-cogs.svg')] bg-contain bg-right opacity-10"></div>
    <div class="relative z-10 px-4">
        <h2 class="text-3xl font-bold mb-4">Percayakan Solusi Kimia Industri Anda pada Kami</h2>
        <p class="max-w-xl mx-auto mb-6">
            PT. Tetap Setia Jaya siap menjadi mitra bisnis Anda yang terpercaya dan profesional.
        </p>
        <a href="{{ url('/contact') }}" class="bg-white text-primary font-semibold px-8 py-3 rounded-full hover:bg-lightblue hover:text-extradark transition">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

<!-- ANIMATION SCRIPT -->
<script>
    const observerOptions = { threshold: 0.1 };

    const addAnimation = (selector, className) => {
        const elements = document.querySelectorAll(selector);
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(className);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        elements.forEach(el => observer.observe(el));
    };

    // Apply animations
    addAnimation('.animate-hero', 'fade-down');
    addAnimation('.animate-services', 'fade-up');
    addAnimation('.animate-cta', 'zoom-in');

    // Animate service cards sequentially
    const cards = document.querySelectorAll('.service-card');
    cards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 150}ms`;
        card.classList.add('card-hidden');
        const cardObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    card.classList.add('card-visible');
                    cardObserver.unobserve(card);
                }
            });
        }, observerOptions);
        cardObserver.observe(card);
    });
</script>

<!-- ANIMATION STYLES -->
<style>
    /* General */
    .fade-down {
        opacity: 1 !important;
        transform: translateY(0) !important;
        transition: opacity 1s ease, transform 1s ease;
    }
    .animate-hero {
        opacity: 0;
        transform: translateY(-40px);
    }

    .fade-up {
        opacity: 1 !important;
        transform: translateY(0) !important;
        transition: opacity 1s ease, transform 1s ease;
    }
    .animate-services {
        opacity: 0;
        transform: translateY(40px);
    }

    .zoom-in {
        opacity: 1 !important;
        transform: scale(1) !important;
        transition: all 1s ease;
    }
    .animate-cta {
        opacity: 0;
        transform: scale(0.95);
    }

    /* Service Cards Stagger */
    .card-hidden {
        opacity: 0;
        transform: translateY(30px);
    }

    .card-visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
        transition: all 0.8s ease;
    }
</style>

@endsection
