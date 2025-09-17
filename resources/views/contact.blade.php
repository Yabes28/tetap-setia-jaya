@extends('layouts.main')

@section('content')

<!-- BANNER CONTACT US -->
<section class="relative bg-gradient-to-r from-primary to-darkblue py-20 text-center text-white overflow-hidden animate-banner">
    <div class="relative z-10 max-w-5xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Contact PT. TETAP SETIA JAYA</h1>
        <p class="text-lg font-light">
            Hubungi kami untuk segala kebutuhan bahan kimia industri Anda. Kami siap melayani dengan profesional, cepat, dan berkualitas.
        </p>
    </div>
</section>

<!-- CONTACT ICONS SECTION -->
<section class="relative py-20 bg-white text-center animate-up">
    <div class="max-w-xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-primary mb-6">Hubungi Kami Langsung</h2>
        <p class="text-gray-600 mb-12">
            Kami siap melayani Anda melalui kontak berikut:
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto px-4 items-start">

        <!-- TELEPON -->
        <div class="flex flex-col items-center feature-card">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                width="80" height="80" class="mb-4 text-[#041D56]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
            </svg>
            <p class="font-bold text-primary text-xl mb-2">Telepon</p>
            <p class="text-darkblue font-semibold text-lg mb-4">(0251) 836 3389</p>
            <a href="tel:+622518363389"
               class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-lightblue hover:text-primary font-bold transition">
                Hubungi via Telepon
            </a>
        </div>

        <!-- EMAIL -->
        <div class="flex flex-col items-center feature-card">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                width="80" height="80" class="mb-4 text-[#041D56]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
            </svg>
            <p class="font-bold text-primary text-xl mb-2">Email</p>
            <p class="text-darkblue font-semibold text-lg mb-4">tetapsetiajaya.bogor@gmail.com</p>
            <a href="mailto:tetapsetiajaya.bogor@gmail.com"
               class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-lightblue hover:text-primary font-bold transition">
                Kirim Email
            </a>
        </div>

    </div>
</section>

<!-- ANIMATION STYLE -->
<style>
    .feature-card {
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0;
        transform: scale(0.9);
    }
    .feature-card.zoom-active {
        opacity: 1 !important;
        transform: scale(1) !important;
    }
    .animate-banner, .animate-up {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 1s ease, transform 1s ease;
    }
    .fade-in-down, .fade-in-up {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
</style>

<script>
    const featureCards = document.querySelectorAll('.feature-card');
    const cardObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('zoom-active');
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    featureCards.forEach(card => cardObserver.observe(card));

    const banners = document.querySelectorAll('.animate-banner, .animate-up');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    banners.forEach(el => observer.observe(el));
</script>

@endsection
