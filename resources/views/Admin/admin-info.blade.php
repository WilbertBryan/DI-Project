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

    <style>
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
    </style>
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
                <h2>Info</h2>
                 <!-- Button to Create New Item -->
                 <a href="/admin-addnewinfo"> <button type="button" class="btn btn-primary mb-4">Create New Item</button></a>
                 <form class="d-flex" action="#">
                    <input class="form-control me-2" type="search" name="search_input" id="search_input" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                 <br>
                <!-- Table to Display Items -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="h4">Items List</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($info as $i)
                                    <tr>
                                        <th scope="row">{{ ($info->currentPage() - 1) * $info->perPage() + $loop->iteration }}</th> <!-- Row number -->
                                        <td>{{ $i->title }}</td>
                                        <td style="width:600px;">{{ $i->short_description }}</td>
                                        <td>
                                            <a href="{{route('GetEditInfo', ['id' => $i->id])}}"><button class="btn btn-warning btn-sm">Edit</button> </a>
                                            <a href="{{route('DeleteInfo', ['id' => $i->id])}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $info->links() }}
                    </ul>
                </nav>
            </div>
        </main>
    </div>

</body>
</html>
