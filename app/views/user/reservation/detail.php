<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['reservasi']['username']; ?></h5>
            <p class="card-text"><?= $data['reservasi']['Keterangan']; ?></p>
            <p class="card-text"><?= $data['reservasi']['Jumlah']; ?></p>
            <p class="card-text"><?= $data['reservasi']['Jam']; ?></p>
            <p class="card-text"><?= $data['reservasi']['status']; ?></p>
            <!-- <a href="<?= HOMEUSER ?>/mahasiswa" class="btn btn-primary">Kembali</a> -->
        </div>
    </div>
</div>