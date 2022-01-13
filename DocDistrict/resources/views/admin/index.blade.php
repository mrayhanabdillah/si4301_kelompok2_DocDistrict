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

    <div class="navtop">
        <ul>
            <li><a class="list">test</a></li>
            <li><a class="list">test</a></li>
            <li><a class="list">test</a></li>
    </div>

    <div class="sidenav">
        <header>Dashboard Admin</header>
        <ul>
            <li><a href="{{route('logoutAdmin')}}">Logout</a></li>
            <li><a class="active" href="#">Overview</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Pengeluaran</a></li>
            <li><a href="#">Produk</a></li>
        </ul>
    </div>

    <div class="mainboard">
        <h3>Test</h3>