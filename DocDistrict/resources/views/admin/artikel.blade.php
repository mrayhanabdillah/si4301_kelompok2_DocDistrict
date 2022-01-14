<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>
        Admin
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <div class="sidenav">
        <header>Dashboard Admin</header>
        <ul>
            <li><a class="active" href="/artikel">Artikel</a></li>
            <li><a href="/DocWarga">Dokumen Warga</a></li>
            <li><a href="#">Dokumen Desa</a></li>
            <li><a href="#">Dokumen Penting</a></li>
            <li><a href="{{route('logoutAdmin')}}">Logout</a></li>
        </ul>
    </div>

    <div class="mainboard">
        <div class="container sm shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Artikel</h3>
            @if ($artikels->count() > 0)
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Artikel
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Author Artikel</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikels as $i)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$i->judul_artikel}}</td>
                        <td>{{$i->author_artikel}}</td>
                        <form action="/artikel/delete/{{$i->id_artikel}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><a class="btn btn-warning" href="/artikel/detail/{{$i->id_artikel}}" type="button">Edit</a> <button class="btn btn-danger">Delete</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Artikel
            </button>
            @endif

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/addArtikel" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-bold">Nama Author</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{$admin->nama_admin}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label fw-bold">Judul Artikel</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Judul Artikel">
                                </div>
                                <div class="mb-3">
                                    <label for="desk" class="form-label">Deskripsi Artikel</label>
                                    <textarea class="form-control" id="desk" name="desk" rows="5"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>