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
        Desa Cipanas | Profile
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
                        <a class="nav-link" href="/">Home</a>
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
                            <li><a class="dropdown-item" href="/document?id_doc=3">Surat Pengajuan Kartu
                                    Keluarga</a></li>
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
                            <li><a class="dropdown-item" href="/document?id_doc=6">Surat Pengajuan Pembuatan SKCK</a></li>
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
                            <i class="fa fa-user" aria-hidden="true"></i> <?php echo e($users -> nama); ?>

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

    <div class="container sm box3 shadow-lg p-3 mb-5 bg-body rounded">
        <h3 class="text-center">Profile</h3>
        <form action="/user/<?php echo e(Session::get('id')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control formborder" id="nama" name="nama"
                            value="<?php echo e($users->nama); ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control formborder" id="email" name="email"
                            value="<?php echo e($users->email); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="noHP" class="form-label fw-bold">Nomor HP</label>
                <input type="text" class="form-control formborder" id="noHP" name="noHP" value="<?php echo e($users->noHP); ?>">
            </div>
            <?php if(($users->ttl) == null): ?>
            <div class="mb-3">
                <label for="ttl" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" class="form-control formborder" id="ttl" name="ttl">
            </div>
            <?php else: ?>
            <div class="mb-3">
                <label for="ttl" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" class="form-control formborder" id="ttl" name="ttl" value="<?php echo e($users->ttl); ?>">
            </div>
            <?php endif; ?>
            <?php if(($users->alamat) == null): ?>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control formborder" id="alamat" name="alamat" placeholder="Jl Buah Batu">
            </div>
            <?php else: ?>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control formborder" id="alamat" name="alamat" value="<?php echo e($users->alamat); ?>">
            </div>
            <?php endif; ?>
            <?php if(($users->nik) == null): ?>
            <div class="mb-3">
                <label for="nik" class="form-label fw-bold">NIK</label>
                <input type="text" class="form-control formborder" id="nik" name="nik" placeholder="123123123123">
            </div>
            <?php else: ?>
            <div class="mb-3">
                <label for="nik" class="form-label fw-bold">NIK</label>
                <input type="text" class="form-control formborder" id="nik" name="nik" value="<?php echo e($users->nik); ?>">
            </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="pass" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control formborder" id="pass" name="pass">
            </div>
            <div class="mb-3">
                <label for="passcon" class="form-label fw-bold">Password Confirm</label>
                <input type="password" class="form-control formborder" id="passcon" name="passcon">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Update
                    Profile</button>
            </div>
        </form>
<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si4301_kelompok2_DocDistrict\DocDistrict\resources\views/user/profile.blade.php ENDPATH**/ ?>