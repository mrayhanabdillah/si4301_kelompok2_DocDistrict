<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Login</h3>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control formborder" id="email" placeholder="username@example.com">
                    </div>
                    <div class="mb-2">
                        <label for="pass" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control formborder" id="pass" placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" onclick="myFunction()" id="showpass">
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
                <form action="/user" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control formborder" id="nama" name="nama" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control formborder" id="email" name="email" placeholder="username@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">Telephone</label>
                        <input type="text" class="form-control formborder" id="noHp" name="noHP"
                            placeholder="0815XXXXXXX">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control formborder" id="pass" name="pass" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="passcon" class="form-label fw-bold">Password Confirm</label>
                        <input type="password" class="form-control formborder" id="passcon" name="passcon"
                            placeholder="Password Confirm">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto formborder">Sign
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