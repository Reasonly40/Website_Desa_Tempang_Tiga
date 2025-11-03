<footer class="bg-gray-800 text-gray-300 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
            
            <div class="md:col-span-2">
                <h3 class="text-lg font-semibold text-white mb-4" style="font-family: 'Merriweather', serif;">
                    Desa Tempang Tiga
                </h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Website resmi Pemerintah Desa Tempang Tiga, Kecamatan Langowan Utara, Kabupaten Minahasa.
                </p>
            </div>
            
            <div>
                <h3 class="text-base font-semibold text-gray-200 mb-4 uppercase tracking-wider">Kontak</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-map-location-dot text-lg text-blue-300 mt-1 flex-shrink-0 w-5 text-center"></i>
                        <span class="text-sm text-gray-400">
                            Jln. Raya Tempang Tiga, Kec. Langowan Utara, Kab. Minahasa, Sulawesi Utara 95694
                        </span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-envelope text-lg text-blue-300 mt-1 flex-shrink-0 w-5 text-center"></i>
                        <a href="mailto:info@tempangtiga.desa.id" class="text-sm text-gray-400 hover:text-white transition">
                            info@tempangtiga.desa.id
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <hr class="border-gray-700 mb-8">

        <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left space-y-6 md:space-y-0">
            
            <div class="flex space-x-5">
                <a href="#" title="Facebook" class="text-gray-400 hover:text-white transition text-xl">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" title="Instagram" class="text-gray-400 hover:text-white transition text-xl ml-5">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" title="YouTube" class="text-gray-400 hover:text-white transition text-xl ml-5">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>

            <div class="text-sm text-gray-400 space-y-1">
                <p>© {{ date('Y') }} Pemerintah Desa Tempang Tiga. Hak Cipta Dilindungi.</p>
                
                <p>
                    Dikembangkan oleh 
                    <a href="{{ route('pengembang') }}" class="font-semibold text-gray-300 hover:text-white transition">
                        KKT 144 UNSRAT Posko Tempang Tiga
                    </a>
                </p>
            </div>
            
        </div>
    </div>
</footer>