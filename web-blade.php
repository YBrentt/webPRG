<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - PT ITogether</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Konfigurasi Font (Inter) -->
    <style>
        @import url('https_://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Kelas kustom untuk transisi yang mulus */
        .page-section {
            display: none; /* Sembunyikan semua halaman secara default */
            animation: fadeIn 0.5s ease-in-out;
        }
        .page-section.active {
            display: block; /* Tampilkan halaman yang aktif */
        }
        /* Animasi Fade-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* Gaya untuk link navigasi aktif */
        .nav-link.active {
            font-weight: 600;
            color: #7b9efeff; /* biru tua */
            border-bottom: 2px solid #1D4ED8;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header dan Navigasi -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-700">
                PT ITogether
            </div>
            <div class="space-x-6">
                <!-- Link navigasi ini akan dikontrol oleh JavaScript -->
                <a href="#home" class="nav-link text-gray-600 hover:text-blue-700 transition duration-300 pb-1 active">Beranda</a>
                <a href="#about" class="nav-link text-gray-600 hover:text-blue-700 transition duration-300 pb-1">Tentang Kami</a>
                <a href="#contact" class="nav-link text-gray-600 hover:text-blue-700 transition duration-300 pb-1">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Konten Utama (Wadah Halaman) -->
    <main class="container mx-auto p-6">

        <!-- 1. Halaman Beranda -->
        <section id="home-page" class="page-section active">
            <div class="relative rounded-lg shadow-xl overflow-hidden h-[60vh] min-h-[400px] flex items-center justify-center text-center text-white bg-gray-800">
                <!-- Gambar Banner Utama -->
                <img src="https"
                     onerror="this.onerror=null; this.src='https://placehold.co/1200x600/334155/e2e8f0?text=Task+Mate';"
                     alt="Banner Perusahaan" 
                     class="absolute inset-0 w-full h-full object-cover opacity-50">
                
                <!-- Konten Teks di atas Banner -->
                <div class="relative z-10 p-8">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">
                        PT ITogether
                    </h1>
                    <p class="text-xl md:text-2xl font-light">
                        With You Always.
                    </p>
                </div>
            </div>
            
            <!-- Pengantar Singkat -->
            <div class="bg-white p-8 rounded-lg shadow-md mt-8 text-center">
                <h2 class="text-3xl font-semibold mb-4">Selamat Datang</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Kami adalah solusi harian Anda untuk semua kebutuhan dan tugas. Melalui aplikasi mobile kami, TaskMate hadir untuk membuat hidup Anda lebih ringan, bebas repot, dari berbelanja, mengantar barang, hingga mengurus antrean. Tugas apa pun, kami Mate-nya..
                </p>
                <button onclick="showPage('about-page')" class="mt-6 bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                    Pelajari Lebih Lanjut
                </button>
            </div>
        </section>

        <!-- 2. Halaman Tentang Kami -->
        <section id="about-page" class="page-section">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-4xl font-bold text-center mb-8">Tentang Kami</h2>
                
                <!-- Deskripsi dan Sejarah -->
                <div class="mb-10">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-700">Deskripsi Perusahaan</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                       TaskMate hadir sebagai jawaban atas tantangan kesibukan modern yang menuntut kecepatan. Kami bukan sekadar penyedia jasa, tetapi sebuah platform aplikasi yang menghubungkan Anda dengan para asisten personal ('Mate') terpercaya untuk menyelesaikan segala urusan, besar maupun kecil.
                    <p class="text-gray-700 leading-relaxed">
                        Kami percaya bahwa teknologi adalah kunci untuk membuka potensi penuh setiap bisnis. Tim ahli kami berdedikasi untuk merancang, membangun, dan mengelola solusi teknologi yang tidak hanya efisien tetapi juga skalabel dan aman.
                        
                        Fokus kami adalah pada kecepatan, keamanan, dan fleksibilitas layanan yang terintegrasi penuh dalam genggaman Anda. Dengan TaskMate APK, Anda dapat mendelegasikan berbelanja, mengantar dokumen, mengurus perizinan, hingga menemani orang tua—semua hanya dengan beberapa ketukan. Kami bertujuan memberikan ketenangan pikiran dan mengembalikan waktu berharga Anda agar Anda bisa fokus pada hal yang paling Anda nikmati.
                    </p>
                </div>

                <!-- Visi dan Misi -->
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                        <h3 class="text-2xl font-semibold mb-3 text-blue-700">Visi Kami</h3>
                        <p class="text-gray-700">
                        Menjadi aplikasi jasa suruh dan asisten pribadi digital terdepan di Indonesia yang terintegrasi penuh dalam kehidupan sehari-hari masyarakat.                         </p>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                        <h3 class="text-2xl font-semibold mb-3 text-blue-700">Misi Kami</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Menyediakan platform (APK) yang cepat, intuitif, dan aman untuk pemesanan jasa suruh dan layanan personal.</li>
                            <li>Membangun jaringan 'Mate' yang luas, terpercaya, dan selalu siap sedia melayani dengan standar profesionalisme tinggi.</li>
                            <li>Memperluas jenis layanan untuk mencakup hampir semua kebutuhan personal, menjadikan TaskMate solusi satu-satunya bagi segala urusan.</li>
                        </ul>
                    </div>
                </div>

                <!-- Struktur Organisasi -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6 text-center text-blue-700">Struktur Organisasi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <!-- Card Anggota Tim -->
                        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                            <img src="https" onerror="this.onerror=null; this.src='https://placehold.co/150x150/e0e7ff/3730a3?text=Rama.';" alt="CEO" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-200">
                            <h4 class="text-xl font-semibold">Luthfianto Ramadhan</h4>
                            <p class="text-gray-500">Chief Executive Officer (CEO)</p>
                        </div>
                        <!-- Card Anggota Tim -->
                        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                            <img src="https" onerror="this.onerror=null; this.src='https://placehold.co/150x150/e0e7ff/3730a3?text=Brandon.';" alt="CTO" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-200">
                            <h4 class="text-xl font-semibold">Brandon</h4>
                            <p class="text-gray-500">Chief Technology Officer (CTO)</p>
                        </div>
                        <!-- Card Anggota Tim -->
                        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                            <img src="https" onerror="this.onerror=null; this.src='https://placehold.co/150x150/e0e7ff/3730a3?text=Aima.';" alt="COO" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-200">
                            <h4 class="text-xl font-semibold">Aima Ledyana Sari</h4>
                            <p class="text-gray-500">Chief Operating Officer (COO)</p>
                        </div>
                        <!-- Card Anggota Tim -->
                        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                            <img src="https" onerror="this.onerror=null; this.src='https://placehold.co/150x150/e0e7ff/3730a3?text=Tiara.';" alt="COO" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-200">
                            <h4 class="text-xl font-semibold">Anisya Tiara Putri</h4>
                            <p class="text-gray-500">Admin (Adm)</p>
                        </div>
                        <!-- Card Anggota Tim -->
                        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                            <img src="https" onerror="this.onerror=null; this.src='https://placehold.co/150x150/e0e7ff/3730a3?text=Adon.';" alt="COO" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-200">
                            <h4 class="text-xl font-semibold">Grasia Michael Adonai</h4>
                            <p class="text-gray-500">Marketing (M)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Halaman Kontak Kami -->
        <section id="contact-page" class="page-section">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-4xl font-bold text-center mb-8">Hubungi Kami</h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Informasi Kontak -->
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold text-blue-700 mb-2">Alamat Kantor</h3>
                            <p class="text-gray-700">
                                Pojok Selo <br>
                                Tawangsari Sukoharjo<br>
                                Jawa Tengah , 57561, Indonesia
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-700 mb-2">Email</h3>
                            <p class="text-gray-700 hover:text-blue-600">
                                <a href="mailto:info@IToghether.id">info@itogether.id</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-700 mb-2">Telepon</h3>
                            <p class="text-gray-700 hover:text-blue-600">
                                <a href="tel:+6281271090015">(021) 555-1234</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-700 mb-2">Jam Kerja</h3>
                            <p class="text-gray-700">
                                Senin - Jumat: 08:00 - 17:00 WIB
                            </p>
                        </div>
                    </div>

                    <!-- Form Kontak -->
                    <div>
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Kirimkan Pesan</h3>
                        <form id="contact-form" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" id="name" name="name" required
                                       class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required
                                       class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Pesan Anda</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                        class="w-full bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                        <!-- Pesan Sukses (tersembunyi) -->
                        <div id="success-message" class="hidden mt-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md">
                            Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 mt-12 py-6 text-center">
        <div class="container mx-auto px-6">
            <p>&copy; 2025 PT ITogether. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- JavaScript untuk Navigasi Halaman -->
    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const pages = document.querySelectorAll('.page-section');
        const contactForm = document.getElementById('contact-form');
        const successMessage = document.getElementById('success-message');

        // Fungsi untuk menampilkan halaman berdasarkan ID
        function showPage(pageId) {
            // Sembunyikan semua halaman
            pages.forEach(page => {
                page.classList.remove('active');
            });
            
            // Tampilkan halaman yang diminta
            const activePage = document.getElementById(pageId);
            if (activePage) {
                activePage.classList.add('active');
            }

            // Perbarui status aktif pada link navigasi
            navLinks.forEach(link => {
                if (link.hash === '#' + pageId.replace('-page', '')) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Ganti hash di URL (opsional, untuk tampilan)
            // history.pushState(null, null, '#' + pageId.replace('-page', ''));
        }

        // Tambahkan event listener ke setiap link navigasi
        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault(); // Mencegah perilaku default link
                const pageId = event.target.hash.substring(1) + '-page'; // (misal: 'home' -> 'home-page')
                showPage(pageId);
            });
        });

        // Menangani submit form kontak (simulasi)
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Mencegah form submit
            
            // Tampilkan pesan sukses
            successMessage.classList.remove('hidden');
            
            // Kosongkan form
            contactForm.reset();

            // Sembunyikan pesan sukses setelah 5 detik
            setTimeout(() => {
                successMessage.classList.add('hidden');
            }, 5000);
        });

        // Menampilkan halaman yang benar saat memuat
        // (Misalnya jika URL memiliki hash #about)
        document.addEventListener('DOMContentLoaded', () => {
            const currentHash = window.location.hash;
            let startPage = 'home-page'; // Halaman default
            
            if (currentHash === '#about') {
                startPage = 'about-page';
            } else if (currentHash === '#contact') {
                startPage = 'contact-page';
            }
            
            showPage(startPage);
        });
    </script>

</body>
</html>
