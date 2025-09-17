@extends('layouts.main')

@section('content')

<!-- HERO SECTION WITH CAROUSEL -->
<section id="home" class="relative h-screen flex items-center justify-center text-center overflow-hidden">
    <!-- Carousel Images -->
    <div id="carouselSlides" class="absolute inset-0 w-full h-full">
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700"
            style="background-image: url('{{ asset('images/carousel-1.jpg') }}'); opacity: 1;"></div>
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700"
            style="background-image: url('{{ asset('images/carousel-3.jpg') }}'); opacity: 0;"></div>
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700"
            style="background-image: url('{{ asset('images/carousel-2.jpg') }}'); opacity: 0;"></div>
    </div>

    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <div class="relative z-10 px-4 text-white max-w-2xl">
        <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
            <span class="block">WELCOME TO</span>
            <span class="block">PT. TETAP SETIA JAYA</span>
        </h1>
        <p class="mb-6 text-sm md:text-lg font-light">
            GENERAL TRADING CHEMICAL,
            SPARE PART & SERVICES
        </p>
        <!-- <a href="{{ url('/contact') }}"
            class="bg-primary text-white font-bold px-6 py-3 rounded-lg hover:bg-lightblue hover:text-extradark transition">
            Contact Us
        </a> -->
    </div>

    <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white bg-primary hover:bg-lightblue rounded-full w-10 h-10 flex items-center justify-center font-bold z-20">
        ‹
    </button>
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white bg-primary hover:bg-lightblue rounded-full w-10 h-10 flex items-center justify-center font-bold z-20">
        ›
    </button>
</section>


<!-- SECTION SERVICES -->
<section id="services" class="relative py-20 bg-white overflow-hidden reveal-section">
        <div class="relative z-10 text-center mb-10 px-4">
        <p class="text-primary font-semibold mb-2">Mengapa Memilih Kami</p>
        <h2 class="text-2xl md:text-4xl font-bold text-extradark mb-4">
            Tentang PT. TETAP SETIA JAYA
        </h2>
        <p class="max-w-2xl mx-auto text-gray-500">
            Kami menyediakan bahan kimia lokal & impor serta dukungan teknis dari pengembangan hingga produksi.
            Dengan kualitas terjamin dan harga bersaing, kami siap membantu bisnis Anda tumbuh.
        </p>
        <a href="{{ url('/contact') }}" class="inline-block mt-6 bg-primary text-white px-6 py-3 rounded-full hover:bg-lightblue transition">
            Hubungi Kami
        </a>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
        @foreach([
            ['icon' => 'M5 13l4 4L19 7', 'title' => 'Produk Berkualitas & Lengkap', 'desc' => 'Menyediakan bahan kimia lokal & impor dengan kualitas terjamin untuk berbagai industri.'],
            ['icon' => 'M8 10h.01M12 10h.01M16 10h.01M9 16h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z', 'title' => 'Reputasi Terpercaya di Pulau Jawa', 'desc' => 'Jejak distribusi yang stabil, relasi kuat dengan pelanggan industri di Jawa, dan efisiensi logistik yang sudah terbukti.'],
            ['icon' => 'M14 9l-5 5m0 0l-5-5m5 5V3', 'title' => 'Harga Kompetitif', 'desc' => 'Menawarkan harga bersaing dengan fleksibilitas pemesanan sesuai kebutuhan pelanggan.']
        ] as $item)
        <div onclick="this.classList.toggle('scale-95')"
            class="group bg-white rounded-lg shadow-md p-6 text-center hover:bg-primary hover:text-white transition transform hover:-translate-y-2 duration-300 cursor-pointer">
            <div class="w-14 h-14 mx-auto mb-4 text-primary group-hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">{{ $item['title'] }}</h3>
            <p class="text-sm">{{ $item['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>


<!-- SECTION PRODUCTS -->
<section id="products" class="py-20 bg-gradient-to-br from-[#266CA9] to-[#0F2573] text-white relative overflow-hidden">

    <div class="relative text-center mb-12 px-4">
        <p class="text-lightblue font-semibold mb-2">Produk Kami</p>
        <h2 class="text-3xl md:text-4xl font-bold">
            Distributor <span class="text-green-400">Bahan Kimia</span> Terbaik untuk Anda
        </h2>
    </div>

    <div class="relative max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">

        <!-- Industrial Chemicals -->
        <a href="{{ url('/products/papper') }}" class="product-card slide-in-left bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/industrial.jpg" alt="Industrial Chemicals" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Papper & Pulp </h3>
            <p class="text-sm text-gray-600 mb-4">Produk kimia khusus untuk industri kertas dan pulp berkualitas.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>

        <!-- Fertilizer Chemicals -->
        <a href="{{ url('/products/fertilizer') }}" class="product-card slide-in-right bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/fertilizer.jpg" alt="Fertilizer Chemicals" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Fertilizer Chemicals</h3>
            <p class="text-sm text-gray-600 mb-4">Bahan kimia untuk industri pupuk berkualitas tinggi.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>

        <!-- Cosmetic & Personal Care -->
        <a href="{{ url('/products/cosmetic') }}" class="product-card slide-in-left bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/cosmetic.jpg" alt="Cosmetic & Personal Care" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Cosmetic & Personal Care</h3>
            <p class="text-sm text-gray-600 mb-4">Bahan kimia pilihan untuk industri kosmetik dan perawatan tubuh.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>

        <!-- Water Treatment -->
        <a href="{{ url('/products/water') }}" class="product-card slide-in-right bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/water.jpg" alt="Water Treatment" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Water Treatment</h3>
            <p class="text-sm text-gray-600 mb-4">Solusi bahan kimia untuk pengolahan air bersih dan limbah.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>

        <!-- Rubber & Gold -->
        <a href="{{ url('/products/rubber') }}" class="product-card slide-in-left bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/rubber.jpg" alt="Rubber & Gold" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Rubber & Gold</h3>
            <p class="text-sm text-gray-600 mb-4">Bahan kimia khusus industri karet dan pengolahan emas.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>

        <!-- Food & Beverage -->
        <a href="{{ url('/products/food') }}" class="product-card slide-in-right bg-white text-[#0F2573] rounded-xl p-6 shadow-lg border-b-4 border-primary hover:scale-105 transition transform duration-300 hover:border-green-400 cursor-pointer overflow-hidden">
            <img src="/images/food.jpg" alt="Food & Beverage" class="h-48 w-full object-cover rounded mb-4">
            <h3 class="font-bold text-xl mb-2">Food & Beverage</h3>
            <p class="text-sm text-gray-600 mb-4">Bahan kimia food grade untuk industri makanan dan minuman.</p>
            <span class="text-primary font-semibold hover:underline">Read More →</span>
        </a>
    </div>
</section>

<!-- Animations -->
<script>
    const revealSections = document.querySelectorAll('.reveal-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealSections.forEach(section => {
        observer.observe(section);
    });

    const productCards = document.querySelectorAll('.product-card');
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in-animate');
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    productCards.forEach(card => {
        cardObserver.observe(card);
    });
</script>

<style>
    .animate-fadeInUp {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s forwards;
    }
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .slide-in-left, .slide-in-right {
        opacity: 0;
        transform: translateX(50px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .slide-in-left {
        transform: translateX(-50px);
    }

    .slide-in-animate {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    .custom-clamp {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>

<!-- Optional Carousel -->
<script>
    const slides = document.querySelectorAll('.carousel-slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = (i === index) ? '1' : '0';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000);
</script>

@endsection
