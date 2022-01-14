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
        Desa Cipanas | About
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
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
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
                        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="btn btn-outline-light formborder" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light formborder" style="margin-left:5px;" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container sm box3 shadow-lg p-3 mb-5 bg-body rounded">
        <h3>Profil Desa</h3>
        <img src="gambar/cipanas.jpg" class="gambarprofil">
        <p>Menurut sejarahnya Desa Cipanas mulai berdiri sejak tahun 1926, dan secara adminitratif resmi berdiri pada
            tahun 1936, kemudian Desa Cipanas mengalami pemekaran wilayah pada tanggal 1 Oktober 1977, menjadi 3 ( tiga
            ) Desa yaitu :</p>

        <p>Desa Cipanas sebagai Desa asal , Desa Cipendawa dan Desa Sindanglaya sebagai desa-desa pemekaran (
            berdasarkan Surat Keputusan Bapak Bupati KDH TK II Cianjur tanggal 1 Oktober 1977 Nomor
            :100/HK.021.1/PM/015.3/1977 ).</p>

        <p>Kemudian pada tahun 1982 Desa Cipanas mengalami pemekaran wilayah kembali menjadi 3 ( tiga ) Desa yaitu :
            Desa Cipanas sebagai Desa asal, Desa Gadog dan Desa Sukatani seabagai desa pemekaran ( berdasarkan Surat
            keputusan Gubernur KDH TK I Jawa Barat nomor :146.1/SK/1382-Pem dan SK Bupati KDH TK II Cianjur nomor
            :146.1/199/Pem/1982 ).</p>

        <p>Pada tanggal 12 Oktober 2004 wilayah Kecamatan Pacet dimekarkan menjadi 2 ( dua ) kecamatan berdasarkan
            Peraturan Daerah ( Perda ) Kabupaten Cianjur Nomor : 07 Tahun 2004 , yaitu Kecamatan Pacet sebagai Kecamatan
            Induk atau asal dan Kecamatan Cipanas sebagai kecamatan pemekaran, dan Desa Cipanas masuk ke wilayah
            Kecamatan Cipanas.</p>

        <p>Mengenai asal usul nama Desa Cipanas adalah berasal dari kata “Ci-panas” menurut bahasa Sunda terdiri dari
            dua suku kata yaitu “Ci” artinya Cai atau Zat Cair dan “Panas” artinya hangat sekali atau bersuhu relatif
            tinggi ,maka Cipanas sama artinya dengan “Air Panas” , desanya bernama Cipanas tetapi udaranya berhawa
            dingin dan sejuk.</p>

        <p>Pemberian nama Desa Cipanas di ambil dari nama sumber mata air panas yang berasal dari Gunung Gede , hingga
            kini keberadaannya terpelihara di komplek Istana Kepresidenan Cipanas.</p>

        <p>Sumber mata air panas tersebut konon airnya mengandung unsur belerang sehingga berkhasiat untuk menyembuhkan
            penyakit kulit (seperti kudis) dll . Dimana dahulu sumber mata air panas tersebut dapat digunakan bebas oleh
            masyarakat dan terbuka untuk umum , tetapi sekarang hanya tamu-tamu khusus kenegaraan dan atau yang telah
            memiliki izin yang dapat melihat dan menyentuh air panas tersebut karena berada dilingkungan Istana
            kepresidenan Cipanas .</p>
    </div>


    <script src="<?php echo e(asset('app.js')); ?>"></script>
<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si4301_kelompok2_DocDistrict\DocDistrict\resources\views/about.blade.php ENDPATH**/ ?>