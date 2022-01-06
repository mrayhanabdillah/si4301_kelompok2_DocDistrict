<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>
        Desa Cipanas | Guide
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

    <script src="<?php echo e(asset('app.js')); ?>"></script>
<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si4301_kelompok2_DocDistrict\DocDistrict\resources\views/guide.blade.php ENDPATH**/ ?>