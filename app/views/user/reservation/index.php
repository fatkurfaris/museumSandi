<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
            <ul class="list-unstyled components mb-5">
                <!-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> -->
                <li class="active">
                    <a href="<?= HOMEUSER; ?>/HomeLogin">Home</a>
                </li>
                <li>
                    <a href="<?= HOMEUSER; ?>/Reservation">Reservation</a>
                </li>
                <li>
                    <a href="<?= HOMEUSER; ?>/Settings">Settings</a>
                </li>
            </ul>

            <!-- <div class="footer">
                <p>
                  
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                   
            </div> -->

        </div>
    </nav>
    <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= HOMEUSER; ?>/HomeLogin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= HOMEUSER; ?>/Reservation">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= HOMEUSER; ?>/Settings">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= HOMEUSER; ?>/HomeLogin/Logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- 
        <a href="<?= HOMEUSER; ?>/reservation/detail/<?= $reservation['id']; ?>" class="badge text-bg-primary">Detail</a> -->
        <!-- Content Page -->

        <h2 class="mb-4">Museum Sandi</h2>
        <div class="bg-light">
            <div class="container">
                <?php Flasher::flash(); ?>
                <h1 align="center">Halaman Reservasi</h1>
                <table class="table">
                    <tr class="tr">
                        <th class="content">Username</th>
                        <th class="content">Keterangan</th>
                        <th class="content">Jumlah</th>
                        <th class="content">Jam</th>
                        <th class="content">Tanggal</th>
                        <th class="button">Status</th>
                        <th class="button">Function</th>
                    </tr>
                    <?php foreach ($data['reservasi'] as $reservation) : ?>
                        <tr class="tr">
                            <td class="content"> <?= $reservation['username']; ?></td>
                            <td class="content"> <?= $reservation['Keterangan']; ?></td>
                            <td class="content"> <?= $reservation['Jumlah']; ?></td>
                            <td class="content"> <?= $reservation['Jam']; ?></td>
                            <td class="content"> <?= $reservation['Tanggal']; ?></td>
                            <td class="content"> <?= $reservation['status']; ?></td>
                            <td class="button">
                                <button class="edit">edit</button>
                                <!-- <button class="hapus">Hapus</button> -->
                                <button class="hapus" onclick="return confirm('yakin?' )"><a href="<?= HOMEUSER; ?>/Reservation/hapus/<?= $data['id']; ?>">Hapus</a></button>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>




                <button id="myBtn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    Buat Reservasi
                </button>
            </div>
        </div>






        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text1">Buat Reservasi</h2>
                    <span class="close">&times;</span>

                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the Modal Body</p>
                    <p>Some other text...</p> -->
                    <form action="<?= HOMEUSER; ?>/Reservation/tambahReservasi" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input disabled type="text" class="form-control" id="username" name="username" value=<?= $reservation['username']; ?>>
                        </div>
                        <div class="mb-3">
                            <label for="Keterangan" class="form-label">Keterangan</label>
                            <textarea type="textarea" class="form-control" id="Keterangan" aria-describedby="Keterangan" name="Keterangan" rows="3"></textarea>

                        </div>
                        <div class="mb-3">
                            <label for="Jumlah" class="form-label">Jumlah Pengunjung</label>
                            <input type="number" class="form-control" id="Jumlah" aria-describedby="Jumlah" name="Jumlah">

                        </div>
                        <div class="mb-3">
                            <label for="Jam" class="form-label">Jam Kunjungan</label>
                            <input type="time" class="form-control" id="Jam" aria-describedby="Jam" name="Jam">
                        </div>
                        <div class="mb-3">
                            <label for="Tanggal" class="form-label">Tanggal Kunjungan Pengunjung</label>
                            <input type="date" class="form-control" id="Tanggal" aria-describedby="Tanggal" name="Tanggal">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Buat Reservasi</button>

                </div>
                </form>
                <!-- <div class="modal-footer">
                    <h3 class="text1">Modal Footer</h3>
                </div> -->
            </div>


        </div>

    </div>


    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>