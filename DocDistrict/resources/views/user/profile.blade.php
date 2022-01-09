<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>
        Desa Cipanas | Profile
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    @extends('modal')

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #149BFC;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid box1">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#"><img src="{{asset('gambar/logo.png')}}"
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
                        @if (session('login'))
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
                        @else
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                        Keterangan Kematian</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                        Pengajuan Bansos dan Beasiswa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Kartu
                                        Keluarga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                        Pengajuan Kehilangan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Akta
                                        Lahir</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal"
                                        data-bs-target="#login">Pembuatan SKCK</a></li>
                            </ul>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guide">Guide</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (session('login'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $users->nama }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-light formborder" data-bs-toggle="modal"
                                data-bs-target="#login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light formborder" style="margin-left:5px;" data-bs-toggle="modal"
                                data-bs-target="#signUp">Sign Up</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (session('passsalah1'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('passsalah1') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('passsalah2'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('passsalah2') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container sm box3 shadow-lg p-3 mb-5 bg-body rounded">
        <h3 class="text-center">Profile</h3>
        <form action="/user/{{Session::get('id')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control formborder" id="nama" name="nama" value="{{$users->nama}}">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control formborder" id="email" name="email" value="{{$users->email}}"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="noHP" class="form-label fw-bold">Nomor HP</label>
                <input type="text" class="form-control formborder" id="noHP" name="noHP" value="{{$users->noHP}}">
            </div>
            @if (($users->ttl) == null)
            <div class="mb-3">
                <label for="ttl" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" class="form-control formborder" id="ttl" name="ttl">
            </div>
            @else
            <div class="mb-3">
                <label for="ttl" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" class="form-control formborder" id="ttl" name="ttl" value="{{$users->ttl}}">
            </div>
            @endif
            @if (($users->alamat) == null)
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control formborder" id="alamat" name="alamat" placeholder="Jl Buah Batu">
            </div>
            @else
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control formborder" id="alamat" name="alamat" value="{{$users->alamat}}">
            </div>
            @endif
            @if (($users->nik) == null)
            <div class="mb-3">
                <label for="nik" class="form-label fw-bold">NIK</label>
                <input type="text" class="form-control formborder" id="nik" name="nik" placeholder="123123123123">
            </div>
            @else
            <div class="mb-3">
                <label for="nik" class="form-label fw-bold">NIK</label>
                <input type="text" class="form-control formborder" id="nik" name="nik" value="{{$users->nik}}">
            </div>
            @endif
            <div class="mb-3">
                <label for="pass" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control formborder" id="pass" name="pass">
            </div>
            <div class="mb-3">
                <label for="passcon" class="form-label fw-bold">Password Confirm</label>
                <input type="password" class="form-control formborder" id="passcon" name="passcon">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Update Profile</button>
            </div>
        </form>