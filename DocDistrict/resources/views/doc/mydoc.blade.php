<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="gambar/logo.png">
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
                        <a class="navbar-brand" href="#"><img src="gambar/logo.png"
                                style="height: 36px; width: 64px;"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Documents
                        </a>
                        @if (session('login'))
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/document?id_doc=1">Surat Pengajuan Keterangan
                                    Kematian</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/document?id_doc=2">Surat Pengajuan Bansos dan
                                    Beasiswa</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/document?id_doc=3">Surat Pengajuan Kartu Keluarga</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/document?id_doc=4">Surat Pengajuan Kehilangan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/document?id_doc=5">Surat Pengajuan Akta Lahir</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/document?id_doc=6">Surat Pengajuan Pembuatan SKCK</a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('mydoc') }}">My Document</a>
                    </li>
                    @else
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Keterangan Kematian</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Bansos dan Beasiswa</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Kartu Keluarga</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Kehilangan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Akta Lahir</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat
                                Pengajuan Pembuatan SKCK</a></li>
                    </ul>
                    @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (session('login'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ $user -> nama }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/user/{{ session('id') }}/edit">Profile</a></li>
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

    <div class="container sm box3 shadow-lg p-3 mb-5 bg-body rounded">
        <h3 class="text-center">My Document</h3>
        @if ($mydocs->count() > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($mydocs as $i)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $i->doc->title_doc }}</h5>
                        <p class="card-text">{{ $i->doc->desc_doc }}</p>
                        @if (($i->status) == "Belum Siap")
                        <p class="fw-bold">Status:</p>
                        <p class="fw-bold" style="color:red;">{{ $i -> status}}</p>
                        <form action="/mydoc/delete/{{ $i-> id_mydoc}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger formborder" type="submit">Hapus</button>
                            <a href="#" class="btn btn-secondary formborder disabled" tabindex="-1" aria-disabled="true"
                                role="button" data-bs-toggle="button">Download</a>
                        </form>
                        @elseif (($i->status) == "Di Tolak")
                        <p class="fw-bold">Status:</p>
                        <p class="fw-bold" style="color:red;">{{ $i -> status}}</p>
                        <form action="/mydoc/delete/{{ $i-> id_mydoc}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger formborder" type="submit">Hapus</button>
                            <a href="#" class="btn btn-secondary formborder disabled" tabindex="-1" aria-disabled="true"
                                role="button" data-bs-toggle="button">Download</a>
                        </form>
                        @else
                        <p class="fw-bold">Status:</p>
                        <p class="fw-bold">{{ $i -> status}}</p>
                        <form action="/mydoc/delete/{{ $i-> id_mydoc}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger formborder" type="submit">Hapus</button>
                        </form>
                        <form action="/download/{{ $i-> id_mydoc}}" method="POST">
                            @csrf
                            <button class="btn btn-primary formborder" type="submit">Download</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <br>
            <h5 class="text-center">Tidak Ada Dokumen</h5>
            @endif
        </div>
    </div>