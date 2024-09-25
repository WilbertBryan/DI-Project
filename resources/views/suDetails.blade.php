<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Icon -->
    <link rel="icon" href="{{ asset('/image/favicon.ico') }}" type="image/x-icon">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>SU Details</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1C4CE1;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/image/logo.png') }}" alt=""
                        style="width: 50%; height: auto; margin-left: 2px">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link home-link" href="/">Home</a>
                        <a class="nav-item nav-link info-link" href="/info">Info</a>
                        <a class="nav-item nav-link tentangkami-link active" href="/tentangkami">Tentang Kami</a>
                        <a class="nav-item nav-link kritik&saran-link" href="/kritiksaran">Kritik & Saran</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link" href="#">Masuk</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <section id="home-image">
        <div class="d-none d-md-block text-start">
            <div class="textLabelImage">
                <h1>STUDENT UNION ISB</h1>
                <div class="row">
                    <div>
                        <p>Kabinet <span class="highlightS">SYNERGIA</span> 2024/2025</p>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('/image/home-image.png') }}" alt="" class="fullscreen-image">

    </section>

    <!-- DEPARTEMEN -->
    <section id="detailsAll">
        <div class="detailsBox">
            <h1>DEPARTEMEN</h1>

            <div class="container">
                <div class="row justify-content-center">
                    <!-- 1 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_HOD.png" alt="gambar 1" class="img-fluid" />
                            </div>
                            <a href="/" class="detailsLink">
                                <div class="detailsIsi">
                                    <div class="detailsJudul">
                                        <h4>Head of Department</h4>
                                    </div>
                                    <p>HOD</p>
                                    <a href="#detail-hod" class="btnSelengkapnya2">Selengkapnya</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_ED.png" alt="gambar 1" class="img-fluid" />
                            </div>
                            <a href="/" class="detailsLink">
                                <div class="detailsIsi">
                                    <div class="detailsJudul">
                                        <h4>External Development</h4>
                                    </div>
                                    <p>ED</p>
                                    <a href="#detail-ed" class="btnSelengkapnya2">Selengkapnya</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_ID.png" alt="gambar 1" class="img-fluid" />
                            </div>
                            <a href="/" class="detailsLink">
                                <div class="detailsIsi">
                                    <div class="detailsJudul">
                                        <h4>Internal Development</h4>
                                    </div>
                                    <p>ID</p>
                                    <a href="#detail-id" class="btnSelengkapnya2">Selengkapnya</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_ECM.png" alt="gambar 1" class="img-fluid" />
                            </div>
                            <a href="/" class="detailsLink">
                                <div class="detailsIsi">
                                    <div class="detailsJudul">
                                        <h4>Entertainment & Creative Media</h4>
                                    </div>
                                    <p>ECM</p>
                                    <a href="#detail-ecm" class="btnSelengkapnya2">Selengkapnya</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="row
                justify-content-center">

                    <!-- 5 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="col-sm-auto">
                            <div class="detailsKecil">
                                <div class="detailsGambar">
                                    <img src="./image/ALL_DI.png" alt="gambar 1" />
                                </div>
                                <a href="/" class="detailsLink">
                                    <div class="detailsIsi">
                                        <div class="detailsJudul">
                                            <h4>Digital Innovation</h4>
                                        </div>
                                        <p>DI</p>
                                        <a href="#detail-di" class="btnSelengkapnya2">Selengkapnya</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_FF.png" alt="gambar 1" />
                            </div>
                            <div class="detailsIsi">
                                <div class="detailsJudul">
                                    <h4>Finance & Fundraising</h4>
                                </div>
                                <p>FF</p>
                                <a href="#detail-ff" class="btnSelengkapnya2">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-padding">
                        <div class="detailsKecil">
                            <div class="detailsGambar">
                                <img src="./image/ALL_PDD.png" alt="gambar 1" />
                            </div>
                            <div class="detailsIsi">
                                <div class="detailsJudul">
                                    <h4>Publication, Documentation, & Design</h4>
                                </div>
                                <p>PDD</p>
                                <a href="#detail-pdd" class="btnSelengkapnya2">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="yellow-line"></div>
    </section>

    <!-- HOD -->
    <section id="detailsEach">
        <section id="detail-hod">
            <div class="heading-section">
                <div class="heading-line-HOD"></div>
                <div class="heading-text">
                    <h2>Head of Department</h2>
                    <p>Mengarahkan, memantau, dan memastikan seluruh divisi di ISB Student Union berjalan dengan baik
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Pres -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/HOD_Pres.png" alt="Nathan Gunawan" />
                        </div>
                    </div>

                    <!-- Vice Pres -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/HOD_VicePres.png" alt="Heidy Mudita S" />
                        </div>
                    </div>

                    <!-- Secre -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/HOD_Secre.png" alt="Carren Pearl Hadi" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Vice Secre -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/HOD_ViceSecre.png" alt="Jevon Invader K" />
                        </div>
                    </div>

                    <!-- Treasurer -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/HOD_Treasurer.png" alt="Valencia Melita C" />
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

    <!-- EXTERNAL DEVELOPMENT -->
    <section id="detailsEach">
        <section id="detail-ed">
            <div class="heading-section">
                <div class="heading-line"></div>
                <div class="heading-text">
                    <h2>External Development</h2>
                    <p>Menangani kegiatan dan program eksternal. Tujuan utama dari program-program yang dilaksanakan
                        adalah untuk memperkuat citra ISB di mata publik, baik di tingkat nasional maupun
                        internasional.
                        Selain itu, divisi ini juga memiliki tanggung jawab untuk menyusun program-program yang
                        berhubungan
                        dengan pelayanan masyarakat.</p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Koor.png" alt="Vincentia Jennifer E. T" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Member1.png" alt="Angela Melia Gunawan" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Member2.png" alt="Jessica Laurentia T" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Member 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Member3.png" alt="Natalie Grace W. K" />
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Member4.png" alt="Amanda Darwis" />
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ED_Member5.png" alt="Keenan Chan" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Proker ED -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Workshop Monsoon</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Studi Banding</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>EPIC National</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has
                                been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and
                                scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the
                                leap into
                                electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>EPIC INTERNATIONAL</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>ISB Care</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Lomba Data Science</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>

    <!-- INTERNAL DEVELOPMENT -->
    <section id="detailsEach">
        <section id="detail-id">
            <div class="heading-section">
                <div class="heading-line"></div>
                <div class="heading-text">
                    <h2>Internal Development</h2>
                    <p>Menangani semua kegiatan dan program internal. Tujuan utama dari program-program yang
                        dilaksanakan
                        adalah
                        untuk pengembangan mahasiswa-mahasiswi seluruh ISB, baik dalam bentuk penyambutan
                        mahasiswa/mahasiswi baru,
                        bonding, training, penghargaan, dan lain lain.</p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Koor.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Member1.png" alt="Felicia Tiffany" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Member2.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Member 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Member3.png" alt="Jefferson Wesley L" />
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Member4.png" alt="Dave Tristan H" />
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ID_Member5.png" alt="Stanley Wibowo" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Proker ID -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Prodi Day</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Orentation Camp</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Dean's Cup</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and
                                scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap
                                into
                                electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Red Carpet Night</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Bonding Day</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Inaguration Night</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Entertainment & Creative Media -->
    <section id="detailsEach">
        <section id="detail-ecm">
            <div class="heading-section">
                <div class="heading-line"></div>
                <div class="heading-text">
                    <h2>Entertainment & Creative Media</h2>
                    <p>Meningkatkan awareness serta citra dari ISB kepada seluruh mahasiswa, dosen, staff Universitas
                        Ciputra,
                        bahkan hingga seluruh masyarakat Indonesia, melalui konten social media yang menghibur dan
                        bermutu,
                        memperkenalkan ISB dan segala program kerjanya, serta entertainment lainnya seperti podcast,
                        daily
                        routines,
                        parody, dan masih banyak lagi.</p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR 1-->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Koor1.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- KOOR 2-->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Koor2.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Member1.png" alt="Felicia Tiffany" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Member2.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Member 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Member3.png" alt="Jefferson Wesley L" />
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Member4.png" alt="Dave Tristan H" />
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/ECM_Member5.png" alt="Stanley Wibowo" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Proker ECM -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Daily Content</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Public Relations</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Monthly Podcast</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and
                                scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap
                                into
                                electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Info Lomba</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Birthday Post</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

    <!-- DIGITAL INNOVATION -->
    <section id="detailsEach">
        <section id="detail-di">
            <div class="heading-section">
                <div class="heading-line"></div>
                <div class="heading-text">
                    <h2>DIGITAL INNOVATION</h2>
                    <p>Membuat dan mengembangkan sebuah situs web yang bertujuan untuk menyediakan informasi yang
                        beragam,
                        mulai dari apresiasi, penghargaan, informasi penting, berita terkini, pengumuman rekrutmen
                        kepanitiaan, hingga info dan
                        pendaftaran lomba Situs\web ini juga dirancang untuk menerima masukan dan saran dari pengguna.
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/DI_Koor.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/DI_Member1.png" alt="Felicia Tiffany" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/DI_Member2.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/DI_Member3.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>



                </div>
            </div>


            <!-- Proker DI -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Website SU</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Coming Soon</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

    <!-- Finance & Fundraising -->
    <section id="detailsEach">
        <section id="detail-ff">
            <div class="heading-section">
                <div class="heading-line"></div>
                <div class="heading-text">
                    <h2>Finance & Fundraising</h2>
                    <p>Memastikan terselenggaranya kegiatan penggalangan dana dan manajemen keuangan yang efektif dalam
                        rangka mendukung berbagai kegiatan dan program Student Union. Divisi ini memiliki tanggung jawab
                        untuk mengelola segala aspek terkait
                        inisiatif penggalangan dana, termasuk program kerja, seminar, open PO, dan penjualan lainnya,
                        guna
                        memastikan tersedianya
                        sumber daya finansial yang memadai.</p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/FF_Koor.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/FF_Member1.png" alt="Felicia Tiffany" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/FF_Member2.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Proker FF -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Seminar</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Penjualan Merch SU</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Penjualan Pin</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and
                                scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap
                                into
                                electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Bazaar EPIC National</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- PDD -->
    <section id="detailsEach">
        <section id="detail-pdd">
            <div class="heading-section">
                <div class="heading-line-PDD"></div>
                <div class="heading-text">
                    <h2>Publication, Documentation, & Design</h2>
                    <p>Mendokumentasikan setiap kegiatan serta membuat materi visual yang menarik dan informatif.
                        Selain itu, divisi ini juga membangun citra positif organisasi melalui berbagai media.</p>
                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- KOOR -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Koor.png" alt="Kezia Elice Yulianto" />
                        </div>
                    </div>

                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Member1.png" alt="Felicia Tiffany" />
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Member2.png" alt="Felicia Kathrin V. H" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row
            justify-content-center">

                    <!-- Member 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Member3.png" alt="Jefferson Wesley L" />
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Member4.png" alt="Dave Tristan H" />
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8 col-padding-member">
                        <div class="members-picture">
                            <img src="./image/PDD_Member5.png" alt="Stanley Wibowo" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Proker PDD -->

            <div class="container my-4">
                <div class="row row-proker">
                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Workshop PDD Internal</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="custom-card">
                            <h3>Workshop PDD External</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="custom-card">
                            <h3>Videoshoot &Photoshoot SU ISB</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and
                                scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap
                                into
                                electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

    <section id="detailsEach"> </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1C4CE1;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                        <img src="{{ asset('/image/footer-logo.png') }}" alt=""
                            style="width: 100%; height: auto;" class="logo">
                        <p style="font-size: 12px;">
                            Kami berkomitmen untuk memberikan kesempatan yang setara kepada seluruh mahasiswa/mahasiswi
                            ISB untuk dapat berkreasi dan berinovasi.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-4 mb-md-0 ms-auto mt-3">
                        <h5>Page</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="/" class="text-white">Home</a></li>
                            <li><a href="/info" class="text-white">Info</a></li>
                            <li><a href="/tentangkami" class="text-white">Tentang Kami</a></li>
                            <li><a href="/kritiksaran" class="text-white">Kritik & Saran</a></li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-4 mb-md-0 mt-3">
                        <h5>Follow Us</h5>
                        <ul class="list-unstyled mb-0 follow-us">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF"
                                    class="bi bi-tiktok" viewBox="0 0 16 16" opacity="0.6">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                </svg>
                                <a href="https://www.tiktok.com/@suisb_uc?_t=8orOpR4fQLx&_r=1" target="_blank"
                                    class="text-white">@suisb_uc</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF"
                                    class="bi bi-instagram" viewBox="0 0 16 16" opacity="0.6">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                                <a href="https://www.instagram.com/suisb_uc" target="_blank"
                                    class="text-white">@suisb_uc</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF"
                                    class="bi bi-envelope" viewBox="0 0 16 16" opacity="0.6">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                </svg>
                                <a href="mailto:su.isb@ciputra.ac.id" class="text-white">su.isb@ciputra.ac.id</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF"
                                    class="bi bi-youtube" viewBox="0 0 16 16" opacity="0.6">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                </svg>
                                <a href="#!" class="text-white">@studentunionisb</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->
        <br><br>
    </footer>
    <div class="text-center p-3">
        Copyright © Digital Innovation
    </div>
    <!-- Footer -->
</body>

</html>
