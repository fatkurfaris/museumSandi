<div class="container ">
    <h1 align="center">Halaman Register</h1>
    <form>
        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <select class="form-select" aria-label="Default select example">
                <option value="Laki Laki" selected>Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label><a href="<?= HOMEUSER; ?>/Login" class="login-text">Login?</a> </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>