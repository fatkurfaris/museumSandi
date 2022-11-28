<!-- <div class="container ">
  
    <h1 align="center">Halaman Register</h1>
    <form action="<?= HOMEUSER; ?>/Register/tambah" method="post">
        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPhone1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="exampleInputGender" class="form-label">Gender</label>
            <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                <option value="Laki Laki" selected>Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label><a href="<?= HOMEUSER; ?>/Login" class="login-text">Login?</a> </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->

<section style="background-color: #212529;">

    <!-- <section> -->
    <?php Flasher::flash(); ?>
    <div class="container ">
        <div class="d-flex align-items-center mb-3 pb-1">
            <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
            <!-- <div></div>
            <h1 class="fw-bold mb-0" style="text-align: center; color: white;" align="center">Museum Sandi</h1> -->
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">

                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                                <span class="h1 fw-bold mb-0">DAFTAR AKUN</span>
                            </div>

                            <form action=" <?= HOMEUSER; ?>/Register/tambah" method="POST">
                                <div class="form-outline mb-4 ">
                                    <input name="username" type="text" id="username" class="form-control form-control-lg" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="password" type="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example17">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="phone" type="number" id="phone" class="form-control form-control-lg" />
                                    <label class="form-label" for="phone">Phone</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="address" type="text" id="address" class="form-control form-control-lg" />
                                    <label class="form-label" for="address">Address</label>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputGender" class="form-label">Gender</label>
                                    <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                                        <option value="Laki Laki" selected>Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="pt-1 mb-4">

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke dalam akun anda</h5>
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Masuk</button>
                                </div>

                                <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                <p class="" style="color: #393f81;">Sudah Punya Akun? <a href="<?= HOMEUSER; ?>/Login" style="color: #393f81;">Login</a></p>
                                <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a> -->
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>