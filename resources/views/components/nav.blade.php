<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    nav{
        font-family: 'Poppins', sans-serif;
    }
</style>

<nav class="bg-black fixed top-0 left-0 w-full z-20">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-white text-xl font-bold">UNIVERSITAS JEMBER</div>

            <ul class="hidden md:flex space-x-6 text-white text-lg">
                <li class="hover:underline cursor-pointer">BERANDA</li>
                <li class="hover:underline cursor-pointer">TENTANG KAMI</li>
                <li class="hover:underline cursor-pointer">OUTLET</li>
                <li class="hover:underline cursor-pointer">KEBERLANJUTAN</li>
                <li class="hover:underline cursor-pointer">BERITA</li>
                <li class="hover:underline cursor-pointer">KARIR</li>
                <li class="hover:underline cursor-pointer">PRESTASI</li>
                <li class="hover:underline cursor-pointer">CONTACTS</li>

            </ul>

            <button id="menu-btn" class="block md:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-black">
            <ul class="space-y-4 text-white text-lg px-6 py-4">
                <li class="hover:underline cursor-pointer">BERANDA</li>
                <li class="hover:underline cursor-pointer">TENTANG KAMI</li>
                <li class="hover:underline cursor-pointer">OUTLET</li>
                <li class="hover:underline cursor-pointer">KEBERLANJUTAN</li>
                <li class="hover:underline cursor-pointer">BERITA</li>
                <li class="hover:underline cursor-pointer">KARIR</li>
                <li class="hover:underline cursor-pointer">PRESTASI</li>
                <li class="hover:underline cursor-pointer">CONTACTS</li>

            </ul>
        </div>
    </nav>
