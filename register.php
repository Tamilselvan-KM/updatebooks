<!-- Modal -->
<div class="modal fade" id="registerForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-center">REGISTER</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p class="text-center">Please register your account</p>
            <div class="modal-body">
                <form action="./includes/registeration.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"
                            name="user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"
                            name="user_full_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                            name="user_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"
                            name="user_password" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-success me-2" type="submit" name="regbtn">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-center">LOGIN</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./includes/login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"
                            name="user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"
                            name="user_password" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-success me-2" type="submit" name="logbtn">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Admin Login-->
<div class="modal fade" id="adminloginForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-center">ADMIN LOGIN</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./includes/adminlogin.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"
                            name="admin_user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"
                            name="admin_password" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-success me-2" type="submit" name="adminlogbtn">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>