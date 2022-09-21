<div class="container ">
    <h1 align="center">Halaman Login</h1>
    <form>
        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
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
</div>