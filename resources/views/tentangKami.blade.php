<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('/image/favicon.ico') }}" type="image/x-icon">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tentang Kami</title>
    <!-- CSS -->


    <link rel="stylesheet" href="styles2.css"/>

</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #1C4CE1;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('/image/logo.png')}}" alt=""  style="width: 50%; height: auto; margin-left: 2px">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link home-link" href="/" >Home</a>
                        <a class="nav-item nav-link info-link" href="/info">Info</a>
                        <a class="nav-item nav-link tentangkami-link active" href="/tentangkami" >Tentang Kami</a>
                        <a class="nav-item nav-link kritik&saran-link" href="/kritiksaran">Kritik & Saran</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link" href="#">Masuk</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

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

    <!-- synergia-filosofi -->
    <section id = "tentangkami-1">
    <div class="synergia-filosofi">
        <div class="filosofi-text">
            <h1>SYNERGIA PHILOSOPHY</h1>
            <h2>"ETERNAL GROWTH IN UNITY"</h2>
            <p>Dengan menggabungkan simbol <span class="highlight">tangga</span> (mempresentasikan "Growth" atau "Pertumbuhan") dan simbol <span class="highlight">infinity</span> (mempresentasikan "Eternal" atau "Keabadian"), logo <span class="highlight">Synergia</span> tidak hanya memvisualisasikan harapan untuk pertumbuhan personal/tim yang berkelanjutan, tetapi juga mengingatkan bahwa perjalanan ini adalah investasi jangka panjang menuju perbaikan diri yang tak terbatas, dengan kata lain <span class="highlight">Eternal Growth In Unity</span>.</p>
        </div>
        <div class="synergia-image">
            <img src="{{asset('/image/synergia-1.png')}}" alt="Synergia Logo">
        </div>
    </div>
    <div class="yellow-line">
    </div>
    </section>

    <!-- Visi-misi -->
    <section id="visimisi" class="py-5">
        <div class="container text-center">
            <h1 class="visi-title">VISI</h1>
            <p class="visi-text">
                Menyalakan bara semangat dalam setiap mahasiswa untuk 'Surpass Yesterday's Self',
                melalui kolaborasi, inovasi, dan dukungan yang saling memperkuat di lingkungan kampus ISB.
            </p>

            <h1 class="misi-title mt-5">MISI</h1>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card p-3 text-center">
                        <img src="{{asset('/image/medali.png')}}" alt="medali-1" class="img-fluid mb-3 medali-img">
                        <p >Memberikan kesempatan yang setara kepada seluruh mahasiswa/mahasiswi ISB untuk dapat berkreasi dan berinovasi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card p-3 text-center">
                        <img src="{{asset('/image/medali.png')}}" alt="medali-2" class="img-fluid mb-3 medali-img">
                        <p>Menciptakan lingkungan yang nyaman dan suportif untuk berproses bersama.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card p-3 text-center">
                        <img src="{{asset('/image/medali.png')}}" alt="medali-3" class="img-fluid mb-3 medali-img">
                        <p>Mendorong setiap mahasiswa/mahasiswi untuk menjadi versi terbaik dari diri mereka masing-masing melalui program-program yang kami buat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More About Us -->
    <section id="more-about-us" class="container my-5">
        <div class="row align-items-center">
            <!-- Left side (More About Us text) -->
            <div class="col-md-4 text-center text-md-start">
                <h1 class="more-title">MORE<br>ABOUT<br>US</h1>
            </div>

            <!-- Right side (Statistics) -->
            <div class="col-md-8">
                <div class="row text-center">
                    <div class="col-4">
                        <h2 class="stat-number">31</h2>
                        <hr class="stat-line">
                        <p class="stat-label">Program Kerja</p>
                    </div>
                    <div class="col-4">
                        <h2 class="stat-number">7</h2>
                        <hr class="stat-line">
                        <p class="stat-label">Departemen</p>
                    </div>
                    <div class="col-4">
                        <h2 class="stat-number">37</h2>
                        <hr class="stat-line">
                        <p class="stat-label">Anggota</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail Button -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary btn-detail">Detail</a>
        </div>

    </section>

    <div class="yellow-line">
    </div>

    <!-- FAQ -->
    <section id="faq">
        <div class="faq-container container">
            <div class="row faq-row">
                <div class="col-md-6">
                    <img src="{{asset('/image/faq.png')}}" alt="Gambar FAQ" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Frequently Asked Questions</h2>
                    <p>Ada pertanyaan seputar Student Union ISB? Berikut jawaban dari pertanyaan yang sering diajukan sejauh ini</p>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Lorem Ipsum?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why do we use it?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    It is a long established fact that a reader will be distracted by the readable content.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where can I get some?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Where can I get some?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    Where can I get some?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available.
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>









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
                <img src="{{asset('/image/footer-logo.png')}}" alt="" style="width: 100%; height: auto;" class="logo">
                <p style="font-size: 12px; color:white">
                Kami berkomitmen untuk memberikan kesempatan yang setara kepada seluruh mahasiswa/mahasiswi ISB untuk dapat berkreasi dan berinovasi.
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF" class="bi bi-tiktok" viewBox="0 0 16 16" opacity="0.6">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                    </svg>
                    <a href="https://www.tiktok.com/@suisb_uc?_t=8orOpR4fQLx&_r=1" target="_blank" class="text-white">@suisb_uc</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF" class="bi bi-instagram" viewBox="0 0 16 16" opacity="0.6">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                    <a href="https://www.instagram.com/suisb_uc" target="_blank" class="text-white">@suisb_uc</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF" class="bi bi-envelope" viewBox="0 0 16 16" opacity="0.6">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    <a href="mailto:su.isb@ciputra.ac.id" class="text-white">su.isb@ciputra.ac.id</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#DFF5FF" class="bi bi-youtube" viewBox="0 0 16 16" opacity="0.6">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                    <a href="https://youtube.com/@studentunionisbuniversitas7785?si=qZsfVPIEwYQyAtBs" target="_blank" class="text-white">@studentunionisb</a>
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
    <div class="text-center p-3" >
        Copyright © Digital Innovation
    </div>
    <!-- Footer -->
</body>
</html>


