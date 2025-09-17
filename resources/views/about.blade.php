@extends('layouts.main')

@section('content')

<!-- ABOUT BANNER -->
<section class="relative bg-gradient-to-r from-primary to-darkblue py-24 text-center text-white overflow-hidden animate-banner">
    <div class="relative z-10 max-w-4xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Tentang PT. TETAP SETIA JAYA</h1>
        <p class="text-lg font-light">
            Mitra terpercaya di bidang penyediaan bahan kimia industri di Indonesia, menghadirkan solusi inovatif, berkualitas, dan profesional.
        </p>
    </div>
</section>

<!-- COMPANY PROFILE -->
<section class="relative py-20 bg-white overflow-hidden animate-left">
    <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 px-4 items-center">
        <div>
            <img src="{{ asset('images/carousel-3.jpg') }}" alt="Tentang PT. Tetap Setia Jaya" class="rounded-lg shadow-lg">
        </div>
        <div>
            <h2 class="text-3xl font-bold text-primary mb-6">Profil Perusahaan</h2>
            <div class="text-justify text-gray-700 mb-4 leading-relaxed max-w-xl">
                <p class="mb-4">
                    PT. Tetap Setia Jaya didirikan pada tahun 2021 sebagai kelanjutan dari keberhasilan CV. Setia Jaya (2017). Sejak awal berdiri, perusahaan kami telah menjadi pemasok bahan kimia terkemuka yang melayani mitra bisnis di seluruh Indonesia.
                </p>
                <p class="mb-4">
                    Fokus utama kami adalah penyediaan bahan kimia industri, kimia farmasi, dan bahan kimia food grade yang berasal dari produsen dalam negeri maupun dari berbagai negara seperti China, Australia, Jepang, Korea, India, Jerman, Amerika Serikat, dan Singapura.
                </p>
                <p>
                    Dengan kantor pusat di Kota Bogor, kami memastikan kualitas produk dan layanan pengiriman terbaik bagi seluruh pelanggan kami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VISI & MISI -->
<section class="relative py-20 bg-gray-50 overflow-hidden animate-up">
    <div class="relative z-10 max-w-6xl mx-auto px-4 text-center mb-12">
        <h2 class="text-3xl font-bold text-darkblue mb-4">Visi & Misi</h2>
        <p class="text-gray-600">
            PT. Tetap Setia Jaya berkomitmen memenuhi kebutuhan bahan kimia industri secara profesional, efisien, dan berkualitas.
        </p>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 px-4">
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition text-justify">
            <h3 class="text-primary font-bold text-xl mb-3 text-center">Visi Kami</h3>
            <p class="text-gray-700 leading-relaxed">
                Menjadi perusahaan penyedia bahan kimia industri terdepan dan terpercaya di Indonesia, berfokus pada inovasi, kualitas, dan pelayanan prima.
            </p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition text-justify">
            <h3 class="text-primary font-bold text-xl mb-3 text-center">Misi Kami</h3>
            <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                <li>Penyediaan produk kimia berkualitas tinggi sesuai standar industri.</li>
                <li>Pembangunan hubungan jangka panjang dengan mitra bisnis.</li>
                <li>Peningkatan layanan pengiriman dan fleksibilitas kemasan sesuai permintaan pasar.</li>
                <li>Komitmen terhadap pelayanan maksimal bagi setiap pelanggan.</li>
            </ul>
        </div>
    </div>
</section>

<!-- KEUNGGULAN KAMI -->
<section class="relative py-20 bg-gradient-to-br from-gray-100 to-white overflow-hidden animate-right">
    <div class="relative z-10 text-center mb-12 px-4">
        <h2 class="text-3xl font-bold mb-4 text-primary">Keunggulan Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Mengapa ratusan klien industri mempercayakan kebutuhan bahan kimia mereka kepada PT. Tetap Setia Jaya.
        </p>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
        <div class="feature-card bg-white text-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all">
            <h4 class="font-bold text-lg mb-2">Produk Lengkap & Berkualitas</h4>
            <p class="text-gray-700 text-justify">Beragam jenis bahan kimia lokal & impor dengan kualitas terbaik dan sertifikasi resmi.</p>
        </div>
        <div class="feature-card bg-white text-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all">
            <h4 class="font-bold text-lg mb-2">Reputasi Terpercaya di Pulau Jawa</h4>
            <p class="text-gray-700 text-justify">Jejak distribusi yang stabil, relasi kuat dengan pelanggan industri di Jawa, dan efisiensi logistik yang sudah terbukti.</p>
        </div>
        <div class="feature-card bg-white text-primary rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all">
            <h4 class="font-bold text-lg mb-2">Harga Kompetitif</h4>
            <p class="text-gray-700 text-justify">Penawaran harga bersaing dengan fleksibilitas pemesanan sesuai kebutuhan industri Anda.</p>
        </div>
    </div>
</section>

<!-- ANIMATION SCRIPT -->
<script>
    const animateItems = [
        { selector: '.animate-banner', className: 'fade-in-down' },
        { selector: '.animate-left', className: 'slide-in-left' },
        { selector: '.animate-right', className: 'slide-in-right' },
        { selector: '.animate-up', className: 'fade-in-up' },
    ];

    animateItems.forEach(item => {
        const elements = document.querySelectorAll(item.selector);
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(item.className);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));
    });

    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        const delay = index * 100;
        card.style.transitionDelay = `${delay}ms`;
        card.classList.add('zoom-start');
        const cardObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    card.classList.add('zoom-active');
                    cardObserver.unobserve(card);
                }
            });
        }, { threshold: 0.3 });
        cardObserver.observe(card);
    });
</script>

<!-- ANIMATION STYLE -->
<style>
    /* General Animations */
    .fade-in-down {
        opacity: 1 !important;
        transform: translateY(0) !important;
        transition: opacity 1s ease, transform 1s ease;
    }
    .animate-banner {
        opacity: 0;
        transform: translateY(-50px);
    }

    .slide-in-left {
        opacity: 1 !important;
        transform: translateX(0) !important;
        transition: all 1s ease;
    }
    .animate-left {
        opacity: 0;
        transform: translateX(-50px);
    }

    .slide-in-right {
        opacity: 1 !important;
        transform: translateX(0) !important;
        transition: all 1s ease;
    }
    .animate-right {
        opacity: 0;
        transform: translateX(50px);
    }

    .fade-in-up {
        opacity: 1 !important;
        transform: translateY(0) !important;
        transition: all 1s ease;
    }
    .animate-up {
        opacity: 0;
        transform: translateY(40px);
    }

    .feature-card.zoom-start {
        opacity: 0;
        transform: scale(0.9);
    }

    .feature-card.zoom-active {
        opacity: 1 !important;
        transform: scale(1) !important;
        transition: transform 0.6s ease, opacity 0.6s ease;
    }
</style>

@endsection