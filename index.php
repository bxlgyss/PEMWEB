<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Aspirasi Pengaduan Online Tuban</title>
    <link rel="icon" href="img/LOGO LAPOR.png">
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('https://img.artguru-cdn.com/image/aigc/ce8f6ab85574aab3a84aafe1e5eaefd2_3448_1940.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #tuban {
            width: 50px;
        }

        @media only screen and (max-width: 950px) {
            #formsearch {
                margin-left: 25px;
                margin-right: 25px;
            }

            #jaya {
                width: 50px;
            }
        }

        .background-hitam {
            background-color: white;
            color: white;
            padding: 50px;
        }
    </style>
    <?php include "navbar.html" ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TUBAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="7. Pengaduan.php">Pengaduan</a>
                            <a class="dropdown-item" href="3. INFORMASIRUANGBERITA.php">Ruang Berita</a>
                            <a class="dropdown-item" href="6. LacakPengaduan.php">Lacak Pengaduan</a>
                            <a class="dropdown-item" href="4. STATISTIK.php">Statistik & Analisis</a>
                            <a class="dropdown-item" href="2. GALERIPENGADUAN.php">Galeri Pengaduan</a>
                            <a class="dropdown-item" href="INTANSINEGARA.php">Intansi Negara</a>
                            <a class="dropdown-item" href="KATEGORIPENGADUAN.php">Kategori Pengaduan</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="notification.html">Notifikasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_edit.php">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-end" style="padding-bottom: 150px;">
                <div class="col-12 text-center">
                    <div class="row">
                        <div class="col-md-8" style="margin-left: auto; margin-right: auto; justify-content: center;">
                            <img id="Tuban" style="width: 180px; height: 180px; margin-top: -20px;"
                                src="img/LOGO LAPOR.png">
                            <img id="Tuban" style="width: 75px; height: 80px; margin-top: -40px;"
                                src="https://3.bp.blogspot.com/-WhNGV-kha0Q/UDtxkTKidnI/AAAAAAAAGsc/Yyfo_FTO_z0/s1600/LOGO+KABUPATEN+TUBAN.png">
                            <h2 class="text-white"
                                style="text-shadow: 2px 2px 4px #000000; font-weight: bold; margin-top: 10px; font-size: 37px;">
                                Sukses Tuban untuk Indonesia Emas 2045</h2>
                            <p class="text-white" style="text-shadow: 2px 2px 4px #000000; font-size: 22px;">
                                Selamat datang di Website Layanan Pengaduan Tuban! Kami hadir untuk mendengarkan dan
                                menindaklanjuti setiap keluhan dan masukan Anda demi menciptakan Tuban yang lebih baik.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <svg style="margin-top: -18%; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,192L120,208C240,224,480,256,720,256C960,256,1200,224,1320,208L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide carousel-centered" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2023/02/09/ilustrasi-gempa_43.jpeg?w=300&q=80"
                        class="d-block w-100" alt="...">
                    <a href="https://news.detik.com/berita/d-7355293/gempa-m-3-9-guncang-tuban"
                        class="carousel-caption d-none d-md-block">
                        <h5>Gempa M 3,9 Guncang Tuban</h5>
                        <p>Badan Meteorologi Klimatologi dan Geofisika (BMKG) menyampaikan terjadi gempa bumi di Tuban,
                            Jawa Timur. Gempa tersebut dilaporkan berkekuatan Magnitudo (M) 3,9.
                            Menurut BMKG, gempa terjadi pada pukul Kamis (23/5/2024) pukul 23.46 WIB. Lokasi gempa
                            berada.....More</p>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="https://www.bloktuban.com/image/posts/2024/05/2PIJpoSmqAw4F37QiNeXwhv0pd3Xr07kYLtZNALz.jpg"
                        class="d-block w-100" alt="...">
                    <a href="https://www.bloktuban.com/2024/05/27/lakukan-kesalahan-12-spbe-terima-sanksi-pertamina-patra-niaga"
                        class="carousel-caption d-none d-md-block">
                        <h5>Lakukan Kesalahan, 12 SPBE Terima Sanksi Pertamina Patra Niaga</h5>
                        <p>Menindaklanjuti hasil pemeriksaan Kementerian Perdagangan melalui Direktorat Jenderal
                            Perlindungan Konsumen dan Tata Tertib Niaga terkait pengawasan terhadap BDKT (Berat dalam
                            Keadaan Terbungkus), Pertamina Patra Niaga segera.....More</p>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2024/05/17/polres-tuban-program-polisi-sahabat-anak-polsanak-1_169.jpeg?w=700&q=90"
                        class="d-block w-100" alt="...">
                    <a href="https://www.detik.com/jatim/berita/d-7345126/polantas-tuban-ajak-anak-tertib-lalu-lintas-lewat-polsanak"
                        class="carousel-caption d-none d-md-block">
                        <h5>Polantas Tuban Ajak Anak Tertib Lalu Lintas Lewat Polsanak</h5>
                        <p>Polres Tuban menggelar Program Polisi Sahabat Anak (Polsanak). Progran ini digelar untuk
                            menumbuhkan rasa disiplin dan taat aturan berlalu lintas sejak dini.
                            Ratusan murid dari TK Bhayangkari 68 Tuban terlihat sangat.....More</p>
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
    </section>
    <svg style="margin-top: -18%; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,192L120,208C240,224,480,256,720,256C960,256,1200,224,1320,208L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>
    <section class="why-choose-us">
        <div class="container">
            <div class="layanan-text">
                <h2>Layanan</h2>
                <p>Kami memberikan wadah bagi masyarakat Tuban untuk menyampaikan atau pengaduan kepada pemerintah dalam
                    hal yang berhubungan dengan kemajuan daerah Tuban.
                    Sampaikan kepada kami melalui beberapa layanan pengaduan dibawah ini untuk Tuban lebih maju
                </p>
            </div>
            <div id="layanan" class="why-choose-us-items">
                <a style="color: #760504;" href="7. Pengaduan.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-complaint-100.png" alt="complaint" />
                    <h3>Pengaduan</h3>
                </a>
                <a style="color: #760504;" href="3. INFORMASIRUANGBERITA.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-news-100.png" alt="news" />
                    <h3>Ruang Berita</h3>
                </a>
                <a style="color: #760504;" href="6. LacakPengaduan.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-search-100.png" alt="search" />
                    <h3>Lacak Pengaduan</h3>
                </a>
                <a style="color: #760504;" href="4. STATISTIK.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-statistic-100.png" alt="statistics" />
                    <h3>Statistik dan Analisis</h3>
                </a>
                <a style="color: #760504;" href="2. GALERIPENGADUAN.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-gallery-100.png" alt="stack-of-photos" />
                    <h3>Galeri Pengaduan</h3>
                </a>
                <a style="color: #760504;" href="INTANSINEGARA.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-state-100.png" alt="Instansi-negara" />
                    <h3>Instansi Negara</h3>
                </a>
                <a style="color: #760504;" href="KATEGORIPENGADUAN.php" class="item item-1">
                    <img width="100" height="100" src="img/icons8-category-100.png" alt="category" />
                    <h3>Kategori Pengaduan</h3>
                </a>
            </div>
        </div>
    </section>

    <svg style="margin-top: -18%; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,192L120,208C240,224,480,256,720,256C960,256,1200,224,1320,208L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>

    <section class="background-hitam">
    </section>

    <footer>

        <?php include "footer.html" ?>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z"
        crossorigin="anonymous"></script>
    <script>
        var myCarousel = document.querySelector('#carouselExampleCaptions')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: true
        })

        document.addEventListener("DOMContentLoaded", function () {
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownItems.forEach(item => {
                item.addEventListener('mouseover', function () {
                    this.classList.add('bg-info');
                    this.classList.add('text-white');
                });

                item.addEventListener('mouseleave', function () {
                    this.classList.remove('bg-info');
                    this.classList.remove('text-white');
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function () {
            const infoBoxes = document.querySelectorAll('.card');

            infoBoxes.forEach(box => {
                box.addEventListener('mouseover', function () {
                    this.classList.add('bg-info');
                    this.classList.add('text-white');
                });

                box.addEventListener('mouseleave', function () {
                    this.classList.remove('bg-info');
                    this.classList.remove('text-white');
                });
            });
        });

        window.onscroll = function () {
            var navbar = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
    </script>
</body>

</html>