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
    <title>Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white p-3" style="min-height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">ADMIN SU ISB</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li >
                    <a href="#" class="nav-link text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin-home" class="nav-link text-white active"  aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/admin-info" class="nav-link text-white">
                        Info
                    </a>
                </li>
                <li>
                    <a href="/admin-kritikSaran" class="nav-link text-white">
                        Kritik & Saran
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Wilbert</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <div class="container mt-4">
                @include('alert')
                <h2 class="mb-4">Home</h2>

                <!-- Apresiasi Section -->
                <h4>Apresiasi</h4>
                <form method="post" action="{{route('PostApresiasi')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="mb-3">
                        <label for="apresiasiImage" class="form-label">Upload Apresiasi Images (Max: 2 Size: 1080 x 192-)</label>
                        <input type="file" class="form-control" id="apresiasiImage" name="apresiasiImage" accept="image/*" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="apresiasiText" class="form-label">Add Text for Apresiasi</label>
                        <textarea class="form-control" id="apresiasiText" name="apresiasiText" name="apresiasiText" rows="5" placeholder="Enter text for Apresiasi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Upload</button>
                </form>

                <div class="row">
                    @foreach ($apresiasi as $a)
                    <div class="col-6 mb-3">
                        <div class="card">
                            <img src="{{$a->image_path}}" class="card-img-top" alt="Image 1" style="width: 100%; height: 300px; object-fit: contain;">
                            <div class="card-body">
                                <!-- Form for updating the title and description -->
                                <form method="POST" action="{{ route('UpdateApresiasi', $a->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" class="form-control mb-2" id="title" name="title" value="{{$a->title}}">
                                    <textarea class="form-control mb-2" rows="2" name="description">{{$a->description}}</textarea>

                                    <div class="d-flex">
                                        <!-- Save Button -->
                                        <button type="submit" class="btn btn-success btn-sm me-2">Save Text</button>
                                </form>

                                <!-- Delete Form -->
                                <form method="POST" action="{{ route('DeleteApresiasi', $a->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Delete Button -->
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

                <!-- Konten Terbaru Section -->
                <h4>Konten Terbaru</h4>
                <form method="post" action="{{route('PostKonten')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="mb-2">
                        <label for="youtubeLink" class="form-label">YouTube Video Link (Max: 1)</label>
                        <input type="url" class="form-control" id="youtubeLink" name="youtubeLink" placeholder="Enter YouTube link">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Add Video</button>
                </form>
                <!-- Placeholder for YouTube video -->
                <div class="mb-5">
                    @if($konten)
                        <iframe width="560" height="315" src="{{ $konten->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <br>
                        <strong>{{$konten->title}} </strong>
                        <br>
                        <form action="{{ route('DeleteKonten', $konten->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a onclick="return confirm('Are you sure you want to delete this item?');">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </a>
                        </form>
                    @else
                        <p>No content available.</p>
                    @endif
                </div>
            </div>
        </main>
    </div>

</body>
</html>
