<!-- <div class="container ">

    
    <h1 align="center">Halaman Login</h1>
    <form action="<?= HOMEUSER; ?>/Login/Logins" method="POST">
        <div class=" mb-3">
            <label for="Username" class="form-label">Username</label>
            <input name="username" type="username" class="form-control" id="username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label class="text2">
                <a href="<?= HOMEUSER; ?>/Register" class="register-text">
                    <h6>Belum punya akun?</h6>
                </a>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->

<section style="background-color: #212529;">

    <!-- <section> -->
    <?php Flasher::flash(); ?>
    <div class="container ">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">

                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="<?= HOMEUSER; ?>/img/login.png" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" height="100px" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="<?= HOMEUSER; ?>/Login/Logins" method="POST">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                                        <span class="h1 fw-bold mb-0">Museum Sandi</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke dalam akun anda</h5>

                                    <div class="form-outline mb-4">
                                        <input name="username" type="username" id="username" type="text" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input name="password" type="password" id="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Kata Sandi</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Masuk</button>
                                    </div>

                                    <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                    <p class="" style="color: #393f81;">Belum Punya Akun? <a href="<?= HOMEUSER; ?>/Register" style="color: #393f81;">Daftar Disini</a></p>
                                    <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a> -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>