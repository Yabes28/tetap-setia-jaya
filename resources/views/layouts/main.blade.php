<!-- FILE: resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. TETAP SETIA JAYA</title>
    <meta name="description" content="PT. TETAP SETIA JAYA – Trusted industrial chemical supplier in Indonesia.">
    <meta name="google-site-verification" content="zOp7dMEjL1Js0bpSIUzfjneloosd2-Oq94_tWsd">
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
        .body-lock {
            overflow: hidden;
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

<!-- HEADER (responsive, clean) -->
    <header id="mainHeader" class="fixed inset-x-0 top-0 z-50 bg-transparent transition-colors duration-300">
    <div class="mx-auto max-w-7xl px-4 py-4 flex items-center justify-between">
        <!-- Logo + Brand -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
        <img src="{{ asset('images/logo_tsj.png') }}" alt="Logo PT. Tetap Setia Jaya"
            class="h-14 w-14 object-contain transition-transform duration-300 logo-scroll-effect">
        <span class="block font-extrabold tracking-wide text-white text-sm sm:text-base md:text-lg max-w-[45vw] truncate">
            PT. TETAP SETIA JAYA
        </span>
    </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-6 font-semibold text-white text-sm">
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-lightblue border-b-2 border-lightblue pb-1' : 'hover:text-lightblue' }}">Beranda</a>
        <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-lightblue border-b-2 border-lightblue pb-1' : 'hover:text-lightblue' }}">Tentang Kami</a>

        <!-- Products (hover dropdown on desktop) -->
        <div class="relative group">
            <button class="inline-flex items-center hover:text-lightblue">
            Produk
            <svg class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
            </svg>
            </button>
            <div class="absolute right-0 mt-2 w-56 rounded-lg bg-white p-2 shadow-lg ring-1 ring-black/5
                        opacity-0 pointer-events-none translate-y-1 transition
                        group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-0">
            <a href="{{ url('/products') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Semua Produk</a>
            <a href="{{ url('/products/fertilizer') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Fertilizer Chemicals</a>
            <a href="{{ url('/products/water') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Water Treatment</a>
            <a href="{{ url('/products/rubber') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Rubber &amp; Gold</a>
            <a href="{{ url('/products/papper') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Papper &amp; Pulp</a>
            <a href="{{ url('/products/cosmetic') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Cosmetic &amp; Personal Care</a>
            <a href="{{ url('/products/food') }}" class="block rounded-md px-3 py-2 text-sm hover:bg-primary/10">Food &amp; Beverage</a>
            </div>
        </div>

        <a href="{{ url('/contact') }}" class="rounded-lg bg-lightblue px-4 py-2 font-bold text-primary hover:bg-white transition">Kontak Kami</a>
        </nav>

        <!-- Hamburger (mobile) -->
        <button id="menu-button" class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-md text-white ring-1 ring-white/20"
                aria-expanded="false" aria-controls="mobile-panel">
        <!-- icon hamburger -->
        <svg id="icon-open" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <!-- icon close -->
        <svg id="icon-close" class="hidden h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
        </button>
    </div>

    <!-- Backdrop -->
    <div id="backdrop" class="fixed inset-0 z-40 hidden bg-black/50"></div>

    <!-- Mobile Slide Panel -->
    <div id="mobile-panel"
        class="fixed top-0 right-0 z-50 hidden h-full w-80 max-w-[86%] translate-x-full bg-primary text-white shadow-xl transition-transform">
        <div class="flex items-center justify-between px-4 py-4 border-b border-white/10">
        <span class="font-bold">Menu</span>
        <button id="close-panel" class="h-9 w-9 inline-flex items-center justify-center rounded-md ring-1 ring-white/20">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        </div>

        <nav class="px-4 py-3 space-y-1 text-sm font-semibold">
        <a href="{{ url('/') }}" class="block rounded-md px-3 py-2 hover:bg-white/10">Beranda</a>
        <a href="{{ url('/about') }}" class="block rounded-md px-3 py-2 hover:bg-white/10">Tentang Kami</a>

        <!-- Produk (accordion mobile) -->
        <details id="mobile-products" class="group rounded-md">
            <summary class="list-none flex items-center justify-between rounded-md px-3 py-2 hover:bg-white/10 cursor-pointer">
            <span>Produk</span>
            <svg class="h-4 w-4 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
            </svg>
            </summary>
            <div class="mt-1 space-y-1 pl-3">
            <a href="{{ url('/products') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Semua Produk</a>
            <a href="{{ url('/products/fertilizer') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Fertilizer Chemicals</a>
            <a href="{{ url('/products/water') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Water Treatment</a>
            <a href="{{ url('/products/rubber') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Rubber &amp; Gold</a>
            <a href="{{ url('/products/papper') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Papper &amp; Pulp</a>
            <a href="{{ url('/products/cosmetic') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Cosmetic &amp; Personal Care</a>
            <a href="{{ url('/products/food') }}" class="block rounded-md px-3 py-2 text-white/90 hover:bg-white/10">Food &amp; Beverage</a>
            </div>
        </details>

        <a href="{{ url('/contact') }}" class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-lightblue px-4 py-2 font-bold text-primary hover:bg-white transition">Kontak Kami</a>
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
                Berdiri tahun 2021 sebagai kelanjutan dari CV. Setia Jaya (2007). Kami adalah penyedia bahan kimia industri terpercaya di Indonesia.
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

  // Sticky Header Effect
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('bg-primary');
      header.classList.remove('bg-transparent');
      logo?.classList.add('scale-110');
    } else {
      header.classList.remove('bg-primary');
      header.classList.add('bg-transparent');
      logo?.classList.remove('scale-110');
    }
  });

  // ===== Mobile panel toggle =====
  const menuBtn = document.getElementById('menu-button');
  const panel = document.getElementById('mobile-panel');
  const closePanel = document.getElementById('close-panel');
  const backdrop = document.getElementById('backdrop');
  const iconOpen = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  function openMenu() {
    panel.classList.remove('hidden');
    backdrop.classList.remove('hidden');
    requestAnimationFrame(() => {
      panel.classList.remove('translate-x-full');
    });
    document.body.classList.add('body-lock');
    menuBtn.setAttribute('aria-expanded', 'true');
    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
  }

  function closeMenu() {
    panel.classList.add('translate-x-full');
    backdrop.classList.add('hidden');
    document.body.classList.remove('body-lock');
    menuBtn.setAttribute('aria-expanded', 'false');
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
    // sembunyikan panel setelah animasi
    setTimeout(() => panel.classList.add('hidden'), 250);
  }

  menuBtn?.addEventListener('click', () => {
    const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
    expanded ? closeMenu() : openMenu();
  });

  closePanel?.addEventListener('click', closeMenu);
  backdrop?.addEventListener('click', closeMenu);

  // Tutup panel saat klik link di dalam panel
  panel?.addEventListener('click', (e) => {
    const a = e.target.closest('a[href]');
    if (a && !a.target) closeMenu();
  });

  // ===== Page Transition Overlay milikmu (biarkan) =====
  const overlay = document.getElementById('page-overlay');
  window.addEventListener('load', () => {
    overlay.classList.add('active');
    gsap.fromTo(
      overlay,
      { opacity: 1 },
      { opacity: 0, duration: 0.5, ease: "power2.out", onComplete: () => overlay.classList.remove('active') }
    );
  });

  document.addEventListener('click', function (e) {
    const link = e.target.closest('a[href]');
    if (!link) return;
    const href = link.getAttribute('href') || '';
    if (href.startsWith('#') || href.startsWith('mailto:') || link.hasAttribute('target')) return;
    // kalau panel terbuka dan klik link, biarkan closeMenu() yang handle
    if (panel && !panel.classList.contains('hidden') && panel.contains(link)) return;

    e.preventDefault();
    overlay.classList.add('active');
    gsap.to(overlay, {
      opacity: 1,
      duration: 0.4,
      ease: "power2.inOut",
      onComplete: () => { window.location = href; }
    });
  });

  // Fix back-forward cache di iOS/Safari
  window.addEventListener('pageshow', (event) => {
    if (event.persisted) window.location.reload();
  });
</script>


</body>
</html>