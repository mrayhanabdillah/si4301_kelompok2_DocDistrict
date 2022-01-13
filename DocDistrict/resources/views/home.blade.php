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
        Desa Cipanas | Home
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Documents
                        </a>
                        @if (session('login'))
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/document?id_doc=1">Surat Pengajuan Keterangan Kematian</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/document?id_doc=2">Surat Pengajuan Bansos dan Beasiswa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/document?id_doc=3">Surat Pengajuan Kartu Keluarga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Surat Pengajuan Kehilangan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Surat Pengajuan Akta Lahir</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Surat Pengajuan Pembuatan SKCK</a></li>
                            </ul>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('mydoc') }}">My Document</a>
                            </li>
                        @else
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Keterangan Kematian</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Bansos dan Beasiswa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Kartu Keluarga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Kehilangan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Akta Lahir</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#login">Surat Pengajuan Pembuatan SKCK</a></li>
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
                        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="btn btn-outline-light formborder" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light formborder" style="margin-left:5px;" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (session('berhasil_login'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil_login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('berhasil_regis'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil_regis') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('gagal_regis'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagal_regis') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('logout'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('logout') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
    @if (session('tidak_terdaftar'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('tidak_terdaftar') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('berhasil_update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil_update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container sm">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
                    <img src="gambar/cipanas.jpg" class="d-block w-100 gambarcar" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/cipanas.jpg" class="d-block w-100 gambarcar" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/cipanas.jpg" class="d-block w-100 gambarcar" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container sm box2">
        <div class="row align-item-center">
            <div class="col">
                <img src="gambar/cipanas.jpg" class="w-100 h-100">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem corporis suscipit officia est
                    similique provident ad in,
                    fugiat accusamus dolorem cumque tenetur repellat beatae laudantium cupiditate eum nobis unde
                    dolorum! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus beatae, fugiat
                    delectus a ad
                    similique sed sint soluta provident ipsa, accusamus eaque, molestiae vero consequuntur hic. Ullam
                    qui unde quisquam. Lorem ipsum dolor,
                    sit amet consectetur adipisicing elit. Nobis modi facere, facilis sequi totam est unde nostrum,
                    reiciendis consectetur voluptatem excepturi
                    debitis dolores alias officia aliquid consequatur enim inventore soluta.</p>
            </div>
        </div>
    </div>

    <div class="container sm text-center text-light" style="margin-top:50px;background:#149BFC;">
        <h3>Artikel Terkini</h3>
    </div>
    <div class="container sm" style="margin-top:10px;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sm text-center text-light" style="margin-top:50px;background:#149BFC;">
        <h3></h3>
    </div>

    <div class="container-fluid footer">
        <div class="container sm">
            <div class="container" style="width: 100%; height: 3px;background:white;"></div>
            <div class="row">
                <div class="col">
                    <img src="gambar/logo.png" class="w-75 h-75">
                </div>
                <div class="col">
                    <i class="fa fa-instagram" style="width:100px;height:50px;"></i>
                </div>
                <div class="col">
                    Column
                </div>
            </div>
            <div class="container" style="width: 100%; height: 3px;background:white;"></div>
        </div>
    </div>
    <!-- anjay pake javascript -->
    <script src="{{asset('app.js')}}"></script>