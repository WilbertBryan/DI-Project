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
                    <a href="/admin-home" class="nav-link text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/admin-info" class="nav-link text-white active"  aria-current="page">
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
                <h2>Edit Info</h2>
                <form method="post" action="{{route('PostEditInfo')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $info->id }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$info->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="lomba" {{ $info->category == 'lomba' ? 'selected' : '' }}>Lomba</option>
                            <option value="open-recruitment" {{ $info->category == 'open-recruitment' ? 'selected' : '' }}>Open Recruitment</option>
                            <option value="berita" {{ $info->category == 'berita' ? 'selected' : '' }}>Berita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image_path" class="form-label">Image</label>
                        <br>
                        @if($info->image_path)
                            <!-- Display the existing image -->
                            <img src="{{ asset( $info->image_path) }}" alt="Existing Image" style="max-width: 200px; max-height: 200px;">
                        @endif
                        <!-- File input for uploading a new image -->
                        <input class="form-control" type="file" id="image_path" name="image_path" accept="image/*">

                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="2" placeholder="Enter short description">
                            {{ $info->short_description }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea class="form-control" id="long_description" name="long_description" rows="5" placeholder="Enter long description">
                            {{$info->long_description}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="register" class="form-label">Register Link</label>
                        <input type="text" class="form-control" id="register" name="register" placeholder="Enter download link">
                    </div>
                    <div class="mb-3">
                        <label for="download" class="form-label">Download Guidebook Link</label>
                        <input type="text" class="form-control" id="download" name="download" placeholder="Enter download link" value="{{$info->download}}">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website Link</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter website link" value="{{$info->website}}">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram Link</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter Instagram link" value="{{$info->instagram}}">
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp Link</label>
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter WhatsApp link" value="{{$info->whatsapp}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
    </div>
    <script>
        // Remove extra spaces from textarea
        document.addEventListener('DOMContentLoaded', function() {
            var textarea = document.getElementById('short_description','long_description');
            textarea.value = textarea.value.trim();
        });
        document.addEventListener('DOMContentLoaded', function() {
            var textarea = document.getElementById('long_description');
            textarea.value = textarea.value.trim();
        });
        </script>
</body>
</html>
