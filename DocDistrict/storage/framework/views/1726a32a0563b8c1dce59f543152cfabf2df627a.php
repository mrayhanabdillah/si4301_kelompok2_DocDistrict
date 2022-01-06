<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>
        Desa Cipanas | Home
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
                            <input class="form-check-input" type="checkbox" value="" onclick="myFunction()" id="showpass">
                            <label class="form-check-label" for="showpass">
                                Show the Password
                            </label>
                        </div>
                        <div class="mb-3">
                            <button type="button"
                                class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Login</button>
                        </div>
                        <p style="color:slategray;">Dont have an account yet? <a href="" class="fw-bold" style="text-decoration:none;color:black;" data-bs-target="#signUp" data-bs-toggle="modal">Register for Free</a></p>
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
                            <input type="email" class="form-control formborder" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label fw-bold">Telephone</label>
                            <input type="text" class="form-control formborder" id="noHp" placeholder="Input your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control formborder" id="pass" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="passcon" class="form-label fw-bold">Password Confirm</label>
                            <input type="password" class="form-control formborder" id="passcon" placeholder="Password Confirm">
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Sign Up</button>
                        </div>
                        <p style="color:slategray;">Already have an account? <a href="" class="fw-bold" style="text-decoration:none;color:black;" data-bs-target="#login" data-bs-toggle="modal">Sign In</a></p>
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                        <a class="nav-link" href="/guide">Guide</a>
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
    <script src="<?php echo e(asset('app.js')); ?>"></script>
    <?php /**PATH C:\xampp\htdocs\si4301_kelompok2_DocDistrict\project-x\resources\views/home.blade.php ENDPATH**/ ?>