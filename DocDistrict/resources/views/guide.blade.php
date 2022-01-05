<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>
        Project X
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Login</h3>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control formborder" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-2">
                            <label for="pass" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control formborder" id="pass" placeholder="Password">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" onclick="myFunction()"
                                id="showpass">
                            <label class="form-check-label" for="showpass">
                                Show the Password
                            </label>
                        </div>
                        <div class="mb-3">
                            <button type="button"
                                class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Login</button>
                        </div>
                        <p style="color:slategray;">Dont have an account yet? <a href="" class="fw-bold"
                                style="text-decoration:none;color:black;" data-bs-target="#signUp"
                                data-bs-toggle="modal">Register for Free</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Sign Up</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control formborder" id="nama" placeholder="Input your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control formborder" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label fw-bold">Telephone</label>
                            <input type="text" class="form-control formborder" id="noHp"
                                placeholder="Input your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control formborder" id="pass" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="passcon" class="form-label fw-bold">Password Confirm</label>
                            <input type="password" class="form-control formborder" id="passcon"
                                placeholder="Password Confirm">
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Sign
                                Up</button>
                        </div>
                        <p style="color:slategray;">Already have an account? <a href="" class="fw-bold"
                                style="text-decoration:none;color:black;" data-bs-target="#login"
                                data-bs-toggle="modal">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #149BFC;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid box1">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#"><img src="gambar/logo.png"
                                style="height: 36px; width: 64px;"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Documents
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Surat Keterangan Kematian</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Surat Pengajuan Bansos dan Beasiswa</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Kartu Keluarga</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Surat Pengajuan Kehilangan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Akta Lahir</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Pembuatan SKCK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/guide">Guide</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="{{asset('app.js')}}"></script>