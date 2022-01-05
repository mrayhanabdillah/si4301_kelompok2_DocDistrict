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
                        <a class="nav-link active" href="/about">About</a>
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

    <script src="{{asset('app.js')}}"></script>