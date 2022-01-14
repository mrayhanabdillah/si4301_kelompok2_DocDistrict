<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="gambar/logo.png">
    <title>
        Desa Cipanas | Home
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    

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
                        <?php if(session('login')): ?>
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
                        <a class="nav-link" href="<?php echo e(route('mydoc')); ?>">My Document</a>
                    </li>
                    <?php else: ?>
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
                    <?php endif; ?>
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
                    <?php if(session('login')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> <?php echo e($user -> nama); ?>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/user/<?php echo e(session('id')); ?>/edit">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-light formborder" data-bs-toggle="modal"
                            data-bs-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light formborder" style="margin-left:5px;" data-bs-toggle="modal"
                            data-bs-target="#signUp">Sign Up</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php if(session('berhasil_login')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('berhasil_login')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('berhasil_regis')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('berhasil_regis')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <?php if(session('gagal')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('gagal')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('gagal_regis')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('gagal_regis')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('logout')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('logout')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <?php if(session('passsalah1')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('passsalah1')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('passsalah2')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('passsalah2')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('tidak_terdaftar')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('tidak_terdaftar')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if(session('berhasil_update')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('berhasil_update')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

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
                        <h5>Welcome to Website Desa Cipanas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/cipanas.jpg" class="d-block w-100 gambarcar" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Website Desa Cipanas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/cipanas.jpg" class="d-block w-100 gambarcar" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Website Desa Cipanas</h5>
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
                <p><?php echo e(Str::limit($about,203)); ?><a href="/about">Read more</a></p>
            </div>
        </div>
    </div>

    <div class="container sm text-center text-light" style="margin-top:50px;background:#149BFC;">
        <h3>Artikel Terkini</h3>
    </div>
    <div class="container sm" style="margin-top:10px;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card">
                    <img src="gambar/cipanas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($a->judul_artikel); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($a->desc_artikel,250)); ?> <a href="/viewArtikel/<?php echo e($a->id_artikel); ?>">Read more</a></p>
                    </div>
                    <div class="card-footer">
                        <h5>Author By : <?php echo e($a->author_artikel); ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <script src="<?php echo e(asset('app.js')); ?>"></script>
<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si4301_kelompok2_DocDistrict\DocDistrict\resources\views/home.blade.php ENDPATH**/ ?>