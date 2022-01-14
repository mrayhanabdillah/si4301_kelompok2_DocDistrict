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
            <h3>Update Artikel</h3>
            <form action="/artikel/update/{{$artikel->id_artikel}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama Author</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$admin->nama_admin}}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label fw-bold">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$artikel->judul_artikel}}">
                </div>
                <div class="mb-3">
                    <label for="desk" class="form-label fw-bold">Deskripsi Artikel</label>
                    <textarea class="form-control" id="desk" name="desk" rows="5">{{$artikel->desc_artikel}}</textarea>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="/artikel">Back</a>
                    <button type="submit" class="btn btn-primary">Update Artikel</button>
                </div>
            </form>