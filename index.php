<?php
$conn = mysqli_connect("localhost", "root", "", "portofolio");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<?php
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$skills = mysqli_query($conn, "SELECT * FROM skills");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyrus Alfredo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div id="Web">
        
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">ZYRUS ALFREDO</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item"><a class="nav-link" href="#Beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Tentang">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Sertifikat">Sertifikat</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- SECTION BERANDA -->

    <section id="Beranda" class="py-5">
        <div class="container">
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-lg-7">
                    <h5 class="text-cyan mb-3">Halo, Saya</h5>
                    <h1 class="display-3 fw-bold mb-3">
                        <?= htmlspecialchars($profile['name'] ?? 'Nama belum tersedia'); ?>
                    </h1>
                    <h2 class="h4 text-secondary mb-4">
                        Mahasiswa Sistem Informasi 2024
                    </h2>
                <p class="lead text-muted mb-5">
                    <span class="text-white">Asisten Laboratorium (Dasar-Dasar Pemrograman & Analitik Visualisasi Data) serta fokus pada pengembangan perangkat lunak dan analisis data.</span> 
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start mb-4">
                    <a href="https://linkedin.com/in/zyrusalfredo" target="_blank" class="btn btn-outline-cyan px-3 py-2 social-btn d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-linkedin me-2" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H3.337v7.225zm-1.56-8.213c.637 0 1.158-.52 1.158-1.158 0-.638-.52-1.158-1.158-1.158-.638 0-1.158.52-1.158 1.158 0 .638.52 1.158 1.158 1.158zM13.227 13.251V9.35c0-2.09-.447-3.694-2.888-3.694-1.173 0-1.956.645-2.277 1.258h-.032V6.169H5.85v7.082h2.418v-3.856c0-1.016.192-2.002 1.447-2.002 1.238 0 1.254 1.158 1.254 2.067v3.79z"/>
                        </svg>
                        LinkedIn
                    </a>

                    <a href="https://instagram.com/zyrusalfredo" target="_blank" class="btn btn-outline-light px-3 py-2 social-btn instagram-btn d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8.001 16c2.172 0 2.444-.01 3.298-.048.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.445.01 10.173 0 8 0zm0 1.44c2.136 0 2.389.008 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.844.047 1.097.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.282.11-.705.24-1.485.276-.844.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.035-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm0 2.446a4.115 4.115 0 1 0 0 8.23 4.115 4.115 0 0 0 0-8.23zM8 11.06a3.06 3.06 0 1 1 0-6.12 3.06 3.06 0 0 1 0 6.12zM12.44 4.53a1.07 1.07 0 1 1-2.139 0 1.07 1.07 0 0 1 2.14 0z"/>
                        </svg>
                        Instagram
                    </a>
                </div>
                </div>
                
                <div class="col-lg-5 text-center">
                    <div class="img-glow-wrapper">
                        <img src="/images/Profil/Zyrus Alfredo.png" alt="Zyrus Alfredo" class="img-fluid rounded-4 profile-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Section Tentang Saya & Keahlian -->

    <section id="Tentang" class="py-5 bg-navy-darker">
        <div class="container">
            <div class="row title-wrapper">
                <div class="col-12 text-center">
                    <h3 class="text-cyan fw-bold mb-5">Pengalaman</h3>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/LogoPraktisi.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">Asisten Laboratorium</h5>
                                <p class="text-white small mb-2">Dasar-Dasar Pemograman & Analitik Visualisasi Data<span class="text-secondary">| Agu 2025 - Sekarang</span></p>
                                <p class="text-secondary small">Membantu mahasiswa memahami logika pemrograman dasar dan analisis data serta teknik visualisasi data secara efektif.</p>
                                <img src="images/Foto(Pengalaman)/aslab.jpeg" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 800px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/LogoGPSI.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">Full Stack Developer</h5>
                                <p class="text-white small mb-2">Gereja GPSI Filadelfia Samarinda<span class="text-secondary">| Feb 2025 - Sekarang</span></p>
                                <p class="text-secondary small">Berkolaborasi dalam tim untuk merancang dan mengembangkan website resmi Gereja GPSI Filadelfia Samarinda guna memudahkan penyebaran informasi gereja.</p>
                                <img src="images/Foto(Pengalaman)/WebGPSI.jpeg" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 500px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/InforsaLogo.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">Volunteer Information Technology Speaker</h5>
                                <p class="text-white small mb-2">Information System Association (INFORSA)<span class="text-secondary">| Sep 2025 - Nov 2025</span></p>
                                <p class="text-secondary small">Berkontribusi dalam program kerja Goes To School, Departemen Relations and Community Services untuk memberikan edukasi, materi, serta motivasi dalam dunia IT ke berbagai SMA & SMK di Samarinda.</p>
                                <img src="images/Foto(Pengalaman)/ProkerInforsa.JPG" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 500px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/logo-umkt.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">Peserta Hackathon TechnoFest IT v 2.25</h5>
                                <p class="text-white small mb-2">Universitas Muhammadiyah Kalimantan Timur<span class="text-secondary">| Jun 2025</span></p>
                                <p class="text-secondary small">Sebagai peserta lomba Hackathon TechnoFest IT v 2.25 di Kalimantan Timur, membuat aplikasi yang inklusif & berkelanjutan. </p>
                                <img src="images/Foto(Pengalaman)/TechnoFest.jpg" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 800px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/InforsaLogo.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">Staff Professional Skill Development - Scientfic and Expertise Division</h5>
                                <p class="text-white small mb-2">Information System Association (INFORSA)s<span class="text-secondary">| Des 2024 - Des 2025</span></p>
                                <p class="text-secondary small">Bergabung pada kepengurusan Information System Association 2024-2025 pada departemen Professional Skill Development, divisi Scientfic and Expertise Division</p>
                                <img src="images/Foto(Pengalaman)/PSD.jpeg" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 800px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="experience-card p-4 rounded-4 shadow h-100">
                        <div class="d-flex align-items-start">
                            <img src="images/logo/Logo_PLN.png" class="rounded-3 me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h5 class="text-white fw-bold mb-1">IT Operations & Business Support Intern</h5>
                                <p class="text-white small mb-2">Magang PLN Icon Plus<span class="text-secondary">| Jul 2023 - Des 2023</span></p>
                                <p class="text-secondary small">Terlibat dalam pemeliharaan operasional IT dan mendukung kebutuhan teknis bisnis harian perusahaan.</p>
                                <img src="images/Foto(Pengalaman)/magangpln.jpg" class="rounded-3 img-fluid border-glow-thin mt-2" style="max-height: 400px; width: 500px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                </div>

            <div class="py-4"></div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="text-cyan fw-bold mb-4 text-center">Keahlian</h3>
                </div>

                <div class="col-md-8">
                    <?php while($skill = mysqli_fetch_assoc($skills)) { ?>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-white mb-2">
                                <span><?= $skill['name']; ?></span>
                                <span><?= $skill['level']; ?></span>
                            </div>
                            <div class="progress bg-dark">
                                <div class="progress-bar bg-cyan-glow" style="width: <?= $skill['level']; ?>"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Sertifikat -->

    <section id="Sertifikat" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="text-cyan fw-bold">Sertifikat & Penghargaan</h3>
                    <div class="mx-auto mt-2" style="width: 50px; height: 3px; background: #00d4ff; box-shadow: 0 0 10px #00d4ff;"></div>
                </div>
            </div>

            <div class="row g-4">
                <?php while($cert = mysqli_fetch_assoc($certificates)) { ?>
                    <div class="col-md-4">
                        <div class="cert-card p-3 rounded-4 h-100">
                            <div class="cert-img-container mb-3 overflow-hidden rounded-3">
                                <img src="<?= $cert['image']; ?>" class="img-fluid cert-img">
                            </div>
                            <h5 class="text-white fw-bold mb-2"><?= $cert['judul']; ?></h5>
                            <p class="text-secondary small mb-0"><?= $cert['tahun']; ?></p>
                            <p class="text-cyan small fw-bold"><?= $cert['penerbit']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

        </div>

</body>
</html>