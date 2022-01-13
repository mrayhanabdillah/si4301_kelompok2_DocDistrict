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
            <li><a class="active" href="#">Artikel</a></li>
            <li><a href="#">Dokumen Warga</a></li>
            <li><a href="#">Dokumen Desa</a></li>
            <li><a href="#">Dokumen Penting</a></li>
            <li><a href="{{route('logoutAdmin')}}">Logout</a></li>
        </ul>
    </div>

    <div class="mainboard">
        <h3>Test</h3>