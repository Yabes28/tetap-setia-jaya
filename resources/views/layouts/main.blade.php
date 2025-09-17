<!-- FILE: resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. TETAP SETIA JAYA</title>
    <meta name="description" content="PT. TETAP SETIA JAYA – Trusted industrial chemical supplier in Indonesia.">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <meta property="og:title" content="PT. TETAP SETIA JAYA">
    <meta property="og:description" content="Trusted industrial chemical supplier in Indonesia.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F1B40',
                        lightblue: '#7FDBFF',
                        darkblue: '#001F3F',
                        extradark: '#02111E',
                        superdark: '#010D1A',
                    }
                }
            }
        }
    </script>
    <style>
        .page-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 4px;
            z-index: 9999;
            pointer-events: none;
        }
        .page-overlay div {
            background-color: #041D56;
            transform: scaleY(0);
            transform-origin: bottom;
        }
        .page-overlay.active {
            pointer-events: auto;
        }
        body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #041D56;
            border-radius: 4px;
        }
        body::-webkit-scrollbar-track {
            background: #f0f0f0;
        }
        .custom-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>
</head>

<body id="page-transition" class="bg-white text-superdark font-sans scroll-smooth">

<!-- OVERLAY COLOR WIPE -->
<div id="page-overlay" class="page-overlay">
    <div></div>
    <div></div>
    <div></div>
</div>

<!-- HEADER -->
<header id="mainHeader" class="fixed w-full z-50 transition duration-300 ease-in-out bg-transparent">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-4">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/logo_tsj.png') }}" alt="Logo PT. Tetap Setia Jaya" class="w-20 h-20 logo-scroll-effect transition-transform">
            <span class="font-bold text-lg text-white">PT. TETAP SETIA JAYA</span>
        </div>

        <!-- Tombol Hamburger -->
        <button id="menu-button" class="block md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Menu Navigasi Utama -->
        <nav id="menu-nav" class="hidden md:flex flex-col md:flex-row absolute md:static top-20 left-0 w-full md:w-auto bg-primary md:bg-transparent font-semibold text-white text-sm space-y-2 md:space-y-0 md:space-x-6 px-4 md:px-0 py-4 md:py-0">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-lightblue font-bold border-b-2 border-lightblue' : 'hover:text-lightblue' }}">Beranda</a>
            <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-lightblue font-bold border-b-2 border-lightblue' : 'hover:text-lightblue' }}">Tentang Kami</a>
            <!-- <a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'text-lightblue font-bold border-b-2 border-lightblue' : 'hover:text-lightblue' }}">Layanan</a> -->
            <div class="relative">
                <button id="products-button" class="hover:text-lightblue flex items-center">
                    Produk
                    <svg class="ml-1 w-4 h-4 transform transition duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Produk -->
                <div id="products-dropdown" class="absolute hidden bg-white text-superdark shadow-lg rounded-lg mt-2 z-50 min-w-[200px] transition-opacity duration-300 opacity-0 group-hover:block">
                    <a href="{{ url('/products') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors border-b font-semibold">Semua Produk</a>
                    <a href="{{ url('/products/fertilizer') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Fertilizer Chemicals</a>
                    <a href="{{ url('/products/water') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Water Treatment</a>
                    <a href="{{ url('/products/rubber') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Rubber & Gold</a>
                    <a href="{{ url('/products/papper') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Papper & Pulp</a>
                    <a href="{{ url('/products/cosmetic') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Cosmetic & Personal Care</a>
                    <a href="{{ url('/products/food') }}" class="block px-4 py-2 hover:bg-primary hover:text-white transition-colors">Food & Beverage</a>
                </div>
            </div>

            <a href="{{ url('/contact') }}" class="bg-lightblue hover:bg-white text-primary font-bold px-4 py-2 rounded-lg transition">
                Kontak Kami
            </a>
        </nav>
    </div>
</header>

<div>
    @yield('content')
</div>

<footer class="bg-gradient-to-b from-darkblue to-superdark text-white py-10">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8 text-sm">
        
        <!-- Logo & Company Description -->
        <div>
            <img src="{{ asset('images/logo_tsj.png') }}" alt="Logo PT. Tetap Setia Jaya" class="w-28 mb-4">
            <p class="mb-2 font-bold">PT. TETAP SETIA JAYA</p>
            <p class="text-lightblue font-semibold mb-2 leading-relaxed">
                GENERAL TRADING CHEMICAL,<br>
                SPARE PART & SERVICES
            </p>
            <p class="leading-relaxed">
                Berdiri tahun 2021 sebagai kelanjutan dari CV. Setia Jaya (2017). Kami adalah penyedia bahan kimia industri terpercaya di Indonesia.
            </p>
        </div>

        <!-- Address Section with Location Icon -->
        <div>
            <h4 class="font-bold mb-4">Alamat Kantor</h4>
            <div class="flex items-start mb-2">
                <!-- Icon Lokasi -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 mr-2 text-lightblue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c1.38 0 2.5-1.12 2.5-2.5S13.38 6 12 6s-2.5 1.12-2.5 2.5S10.62 11 12 11z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 22c4-4.5 6-7.5 6-10a6 6 0 10-12 0c0 2.5 2 5.5 6 10z"/>
                </svg>
                <p class="leading-relaxed">
                    <a href="https://www.google.com/maps/place/JL.+Johar+V+No.6,+Kedung+Waringin,+Tanah+Sareal,+Bogor"
                    target="_blank"
                    class="hover:text-lightblue transition">
                        JL. Johar V No.6 RT.004 RW.004,<br>
                        Kel. Kedung Waringin, Kec. Tanah Sareal,<br>
                        Kota Bogor, Jawa Barat
                    </a>
                </p>
            </div>
        </div>

        <!-- Contact Info with Better Icons -->
        <div>
            <h4 class="font-bold mb-4">Kontak</h4>
            <ul class="space-y-4 text-sm">
                <li class="flex items-start">
                    <!-- Icon Telepon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 mr-2 text-lightblue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.4 4.2a1 1 0 01-.24 1.04L8.41 11.6a11.05 11.05 0 005.98 5.98l2.68-2.68a1 1 0 011.04-.24l4.2 1.4a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C10.6 21 3 13.4 3 5V5z"/>
                    </svg>
                    (0251) 836 3389
                </li>
                <li class="flex items-start">
                    <!-- Icon Amplop (Email) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 mr-2 text-lightblue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V6a2 2 0 00-2-2H3a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    tetapsetiajaya.bogor@gmail.com
                </li>
                <li class="flex items-start">
                    <!-- Icon LinkedIn -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 mr-2 text-lightblue" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.76 0-5 2.24-5 
                        5v14c0 2.76 2.24 5 5 5h14c2.76 
                        0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 
                        19h-3v-10h3v10zm-1.5-11.3c-.97 
                        0-1.75-.79-1.75-1.75s.78-1.75 
                        1.75-1.75 1.75.78 
                        1.75 1.75-.78 1.75-1.75 
                        1.75zm13.5 11.3h-3v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 
                        0-2.16 1.46-2.16 2.97v5.7h-3v-10h2.88v1.37h.04c.4-.75 
                        1.38-1.54 2.85-1.54 3.05 
                        0 3.62 2.01 3.62 4.63v5.54z"/>
                    </svg>
                    <a href="https://www.linkedin.com/in/pt-tetap-setia-jaya-404198378/" 
                    target="_blank" 
                    class="hover:text-lightblue transition">
                    LinkedIn
                    </a>
                </li>
            </ul>
        </div>

        <!-- Navigation -->
        <div>
            <h4 class="font-bold mb-4">Navigasi</h4>
            <ul class="space-y-2">
                <li><a href="{{ url('/about') }}" class="hover:text-lightblue transition">Tentang Kami</a></li>
                <!-- <li><a href="{{ url('/services') }}" class="hover:text-lightblue transition">Layanan</a></li> -->
                <li><a href="{{ url('/contact') }}" class="hover:text-lightblue transition">Kontak</a></li>
            </ul>
        </div>

    </div>

    <!-- Bottom Footer -->
    <div class="text-center text-xs text-white mt-10 border-t border-white/20 pt-4">
        &copy; {{ now()->year }} PT. TETAP SETIA JAYA. All rights reserved.
    </div>
</footer>

<a href="#contact" class="fixed bottom-4 left-4 right-4 bg-lightblue text-primary font-bold text-center py-3 rounded-lg shadow-lg md:hidden z-50">Hubungi Kami</a>
<button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="hidden fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 md:block">↑</button>

<script>
    const header = document.getElementById('mainHeader');
    const logo = document.querySelector('.logo-scroll-effect');
    const menuButton = document.getElementById('menu-button');
    const menuNav = document.getElementById('menu-nav');
    const overlay = document.getElementById('page-overlay');
    const productsBtn = document.getElementById('products-button');
    const productsDropdown = document.getElementById('products-dropdown');

    // Sticky Header Effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-primary');
            header.classList.remove('bg-transparent');
            logo.classList.add('scale-110');
        } else {
            header.classList.remove('bg-primary');
            header.classList.add('bg-transparent');
            logo.classList.remove('scale-110');
        }
    });

    // Mobile Menu Toggle
    menuButton?.addEventListener('click', () => {
        menuNav?.classList.toggle('hidden');
    });

    // Page Transition on Load
    window.addEventListener('load', () => {
        overlay.classList.add('active');
        gsap.fromTo(
            overlay,
            { opacity: 1 },
            {
                opacity: 0,
                duration: 0.5,
                ease: "power2.out",
                onComplete: () => overlay.classList.remove('active'),
            }
        );
    });

    // Page Transition on Link Click (Global Delegation)
    document.addEventListener('click', function (e) {
        const link = e.target.closest('a[href]');
        if (!link) return;

        const href = link.getAttribute('href');
        if (
            href.startsWith('#') ||
            href.startsWith('mailto:') ||
            link.hasAttribute('target')
        ) {
            return; // Skip anchor, email, or target="_blank"
        }

        e.preventDefault();
        overlay.classList.add('active');

        gsap.to(overlay, {
            opacity: 1,
            duration: 0.4,
            ease: "power2.inOut",
            onComplete: () => {
                window.location = href;
            }
        });
    });

    // Perbaiki tombol back: reload jika halaman kembali dari cache
    window.addEventListener('pageshow', function (event) {
        if (event.persisted) {
            console.log("Halaman kembali dari cache, melakukan reload...");
            window.location.reload();
        }
    });

    // Dropdown Produk Manual Toggle
    let dropdownOpen = false;

    productsBtn?.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdownOpen = !dropdownOpen;
        if (dropdownOpen) {
            productsDropdown.classList.remove('hidden');
            setTimeout(() => {
                productsDropdown.classList.add('opacity-100', 'scale-100');
                productsDropdown.classList.remove('opacity-0', 'scale-95');
            }, 10);
        } else {
            productsDropdown.classList.remove('opacity-100', 'scale-100');
            productsDropdown.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                productsDropdown.classList.add('hidden');
            }, 200);
        }
    });

    // Klik luar untuk menutup dropdown
    document.addEventListener('click', function (e) {
        if (dropdownOpen && !productsDropdown.contains(e.target) && !productsBtn.contains(e.target)) {
            dropdownOpen = false;
            productsDropdown.classList.remove('opacity-100', 'scale-100');
            productsDropdown.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                productsDropdown.classList.add('hidden');
            }, 200);
        }
    });
</script>

</body>
</html>