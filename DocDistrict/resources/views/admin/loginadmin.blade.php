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

    <div class="loginadmin">
        <div class="boxadmin shadow-lg p-3 mb-5 bg-body rounded">
            <div class="mb-5">
                <h3 class="text-center">Login Admin</h3>
            </div>
            <form action="/login-admin" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control formborder" id="email" name="email"
                        placeholder="username@example.com">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control formborder" id="pass" name="pass" placeholder="Password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Login</button>
                </div>
            </form>