<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="icon" href="{{ asset('/image/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Info</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css"/>

    <style>
        .fullscreen-image {
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
    }

    @media (min-width: 760px) {
        .fullscreen-image {
            height: 100vh;
            object-fit: cover;
        }

        .carousel-caption {
            margin-left: -8%;
        }
    }

    @media (max-width: 759px) {
        .carousel-caption {
            display: block !important;
            text-align: left;
            left: 10%;
            right: 10%;
            bottom: 20px;
        }
    }
    .carousel-caption h5 {
            font-size: 1.6vw;
    }
    .carousel-caption p {
        font-size: 1.2vw;
    }

    .blurredbackground{
        display: inline-block;
        padding: 2px 15px;
        color: white;
        background-color: rgba(236, 216, 6, 0.5); /* Use rgba for background with alpha */
        border-radius: 10px; /* Rounded corners */
        border: 1px groove rgba(236, 216, 6, 0.5); /* Use rgba for border */
        text-align: center;
        font-size: 0.8vw;
    }
    .date-responsive {
        text-align: start; /* Align text to the start (left side) */
    }

    /* Alignment for medium screens and larger */
    @media (min-width: 768px) {
        .date-responsive {
            text-align: end; /* Align text to the end (right side) */
        }
    }
    .carousel-caption{
            margin-bottom: -30px;
        }
    .carousel-item {
        transition: transform 0.5s ease; /* Ensure smooth transitions */
    }
    .search{
        margin-top: 60px;
        margin-bottom: 50px;
        width: max-content;
        display:flex;
        align-items: center;
        padding: 14px;
        border-radius: 10px;
        border: 3px solid #D9D9D9;
        background:
    }
    @media screen and (min-width: 850px) {
        .search-input{
        width:500px;
        }
    }

    .search-input{
        margin-left: 14px;
        outline: none;
        border: none;
        background: transparent;
    }
    .nav-pills .nav-link {
        font-weight: 500;
        color: black;
    }
    .nav-pills .nav-link.active {
        background-color: #ECECEC; /* Gray color for active state */
        color: #000000; /* Optional: White text color for better contrast */
    }
    .labelbackground {
        display: inline-block;
        padding: 2px 15px;
        color: #000000;
        background-color: #ECD806; /* Use rgba for background with alpha */
        border-radius: 10px; /* Rounded corners */
        text-align: center;
        font-size: 12 px;
        margin-bottom: 10px;
        white-space: nowrap; /* Prevent line break within the label */
    }
    /* Remove Border Pagination */
    .pagination .page-link {
        border: none;
        color: black;
    }

    .pagination .page-item.active .page-link {
        background-color: #ECECEC;
        border-color: #ECECEC; /* Optional: Match border color to background */
        color: #000; /* Text color */
        border-radius: 5px;
    }
    .card-hover:hover .card{
        transform: translateY(-5px);
        transition: transform 0.3s ease-in-out;
    }

    </style>
</head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1C4CE1;">
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
                        <a class="nav-item nav-link info-link active" href="/info">Info</a>
                        <a class="nav-item nav-link tentangkami-link" href="/tentangkami" >Tentang Kami</a>
                        <a class="nav-item nav-link kritik&saran-link" href="/kritiksaran">Kritik & Saran</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link" href="#">Masuk</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- info-image -->
    <section id="info-image">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-ride="carousel" data-bs-touch="false" data-bs-interval="2000">
            <div class="carousel-inner">
              <!-- First Carousel -->
              <div class="carousel-item active">
                <img src="{{asset('/image/info-image.png')}}" class="d-block w-100 fullscreen-image" alt="...">
                <div class="carousel-caption d-none d-md-block text-start">
                    <div class="blurredbackground">
                       Berita
                    </div>
                    <h5>Kabinet SYNERGIA</h5>
                    <div class="row">
                        <div class="col-md-9 col-sm-11 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                        <div class="col-md-3 col-sm-2 date-responsive">
                            <p>24 Jan 2024</p>
                        </div>
                    </div>
                    <br>
                </div>
              </div>
              <!-- Second Carousel -->
              <div class="carousel-item">
                <img src="{{asset('/image/info-image.png')}}" class="d-block w-100 fullscreen-image" alt="...">
                <div class="carousel-caption d-none d-md-block text-start">
                    <div class="blurredbackground">
                       Open Recruitment
                    </div>
                    <h5>Kabinet SYNERGIA</h5>
                    <div class="row">
                        <div class="col-md-9 col-sm-11 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                        <div class="col-md-3 col-sm-2 date-responsive">
                            <p>24 Jan 2024</p>
                        </div>
                    </div>
                    <br>
                </div>
              </div>
              <!-- ThirdCarousel -->
              <div class="carousel-item">
                <img src="{{asset('/image/info-image.png')}}" class="d-block w-100 fullscreen-image" alt="...">
                <div class="carousel-caption d-none d-md-block text-start">
                    <div class="blurredbackground">
                       Lomba
                    </div>
                    <h5>Kabinet SYNERGIA</h5>
                    <div class="row">
                        <div class="col-md-9 col-sm-11 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                        <div class="col-md-3 col-sm-2 date-responsive">
                            <p>24 Jan 2024</p>
                        </div>
                    </div>
                    <br>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section id="info-informasi">
        <div class="container">
            <br><br>
            <h2 style="color: #1C4CE1;">Informasi</h2>
            <p style="color: #828282">lorem ipsum dolor sit amet consectetur adipiscing elit sed do </p>
            <!-- Search -->
            <form action="">
                <div class="search mx-auto">
                    <span class="search-icon material-symbols-outlined">search</span>
                    <input class="search-input" name="search_input" id="search_input" placeholder="Search Here" type="text">
                </div>
            </form>
            <!-- Filter -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Semua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lomba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Open Recruitment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Berita</a>
                        </li>
                    </ul>
                    <div>
                        <label for="sort" class="mr-2">Urutkan:</label>
                        <select id="sort" class="form-control d-inline-block w-auto">
                            <option>Terbaru</option>
                            <option>Terlama</option>
                        </select>
                    </div>
                </div>
                <!-- Cards Sectiion -->
                <div class="row">
                    <!-- Repeat this card structure for each event -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="card-hover" style="text-decoration: none; color: inherit;">
                            <div class="card h-100" style="border-radius: 15px; display: flex; flex-direction: column;">
                                <img src="{{asset('/image/oprec-epic.png')}}" class="card-img-top" alt="Event Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width:auto; height: 300px;">
                                <div class="card-body">
                                    <div class="labelbackground">
                                        Berita
                                    </div>
                                    <div class="d-flex flex-column" style="flex: 1;">
                                        <span class="badge badge-warning">Open Recruitment</span>
                                        <h5 class="card-title" style="color: #1C4CE1;">Open Recruitment EPIC 2025</h5>
                                        <p class="card-text" style="color: #1C4CE1;">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat ends -->
                    <!-- Repeat this card structure for each event -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="card-hover" style="text-decoration: none; color: inherit;">
                            <div class="card h-100" style="border-radius: 15px; display: flex; flex-direction: column;">
                                <img src="{{asset('/image/lokreatif.png')}}" class="card-img-top" alt="Event Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width:auto; height: 300px;">
                                <div class="card-body">
                                    <div class="labelbackground">
                                        Open Recruitment
                                    </div>
                                    <div class="d-flex flex-column" style="flex: 1;">
                                        <span class="badge badge-warning">Open Recruitment</span>
                                        <h5 class="card-title" style="color: #1C4CE1;">Open Recruitment EPIC 2025</h5>
                                        <p class="card-text" style="color: #1C4CE1;">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat ends -->
                    <!-- Repeat this card structure for each event -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="card-hover" style="text-decoration: none; color: inherit;">
                            <div class="card h-100" style="border-radius: 15px; display: flex; flex-direction: column;">
                                <img src="{{asset('/image/lokreatif.png')}}" class="card-img-top" alt="Event Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width:auto; height: 300px;">
                                <div class="card-body">
                                    <div class="labelbackground">
                                        Open Recruitment
                                    </div>
                                    <div class="d-flex flex-column" style="flex: 1;">
                                        <span class="badge badge-warning">Open Recruitment</span>
                                        <h5 class="card-title" style="color: #1C4CE1;">Open Recruitment EPIC 2025</h5>
                                        <p class="card-text" style="color: #1C4CE1;">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat ends -->
                    <!-- Repeat this card structure for each event -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="card-hover" style="text-decoration: none; color: inherit;">
                            <div class="card h-100" style="border-radius: 15px; display: flex; flex-direction: column;">
                                <img src="{{asset('/image/lokreatif.png')}}" class="card-img-top" alt="Event Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width:auto; height: 300px;">
                                <div class="card-body">
                                    <div class="labelbackground">
                                        Open Recruitment
                                    </div>
                                    <div class="d-flex flex-column" style="flex: 1;">
                                        <span class="badge badge-warning">Open Recruitment</span>
                                        <h5 class="card-title" style="color: #1C4CE1;">Open Recruitment EPIC 2025</h5>
                                        <p class="card-text" style="color: #1C4CE1;">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat ends -->
                </div>
            </div>
            <!-- Paging -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item me-3">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active me-3"><a class="page-link" href="#">1</a></li>
                    <li class="page-item me-3"><a class="page-link" href="#">2</a></li>
                    <li class="page-item me-3"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

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
                <p style="font-size: 12px;">
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
    <div class="text-center p-3" >
        Copyright © Digital Innovation
    </div>
    <script>
        //Filter tidak refresh
        document.querySelectorAll('.nav-pills .nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior
                document.querySelectorAll('.nav-pills .nav-link').forEach(function(link) {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
    </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
