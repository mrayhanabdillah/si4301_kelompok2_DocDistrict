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
            <li><a href="/artikel">Artikel</a></li>
            <li><a class="active" href="/DocWarga">Dokumen Warga</a></li>
            <li><a href="#">Dokumen Desa</a></li>
            <li><a href="#">Dokumen Penting</a></li>
            <li><a href="{{route('logoutAdmin')}}">Logout</a></li>
        </ul>
    </div>

    <div class="mainboard">
        <div class="container sm shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Document Warga</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID_DokumenWarga</th>
                        <th scope="col">ID_Doc</th>
                        <th scope="col">Nama Dokumen</th>
                        <th scope="col">ID_User</th>
                        <th scope="col">Nama Pengaju</th>
                        <th scope="col">Alamat Pengaju</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docs as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->id_mydoc}}</td>
                        <td>{{$d->id_doc}}</td>
                        <td>{{$d->doc->title_doc}}</td>
                        <td>{{$d->id_user}}</td>
                        <td>{{$d->user->nama}}</td>
                        <td>{{$d->user->alamat}}</td>
                        <td>{{$d->status}}</td>
                        <form action="/update/{{$d->id_mydoc}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <td><button type="submit" class="btn btn-primary formborder">Terima</button></td>
                        </form>
                        <form action="/tolak/{{$d->id_mydoc}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <td><button type="submit" class="btn btn-danger formborder">Tolak</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            