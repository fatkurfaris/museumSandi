<?php
$key = "";
$text = "";
$error = "";
$color = "#FF0000";


$key = $_POST['key'];
$text = $_POST['text'];

function decrypt($key, $text)
{
    // inisialisasi variable
    $ki = 0;
    $kl = strlen($key);
    $length = strlen($text);

    // lakukan perulangan untuk setiap abjad
    for ($i = 0; $i < $length; $i++) {
        // jika text merupakan alphabet
        if (ctype_alpha($text[$i])) {
            // jika text merupakan huruf kapital (semua)
            if (ctype_upper($text[$i])) {
                $x = ((ord($text[$i]) - ord("A")) - (ord($key[$ki]) - ord("A")) % 26);

                if ($x < 0) {
                    $x += 26;
                }

                $x = $x + ord("A");

                $text[$i] = chr($x);
            }

            // jika text merupakan huruf kecil (semua)
            else {
                $x = ((ord($text[$i]) - ord("a")) - (ord($key[$ki]) - ord("a")) % 26);

                if ($x < 0) {
                    $x += 26;
                }

                $x = $x + ord("a");

                $text[$i] = chr($x);
            }

            $ki++;
            if ($ki >= $kl) {
                $ki = 0;
            }
        }
    }

    // mengembalikan nilai text
    return $text;
}
function encrypt($key, $text)
{

    // inisialisasi variable
    $ki = 0;
    $kl = strlen($key);
    $length = strlen($text);

    // lakukan perulangan untuk setiap abjad
    for ($i = 0; $i < $length; $i++) {
        // jika text merupakan alphabet
        if (ctype_alpha($text[$i])) {
            // jika text merupakan huruf kapital (semua)
            if (ctype_upper($text[$i])) {
                $text[$i] = chr(((ord($text[$i]) - ord("A") + ord($key[$ki]) - ord("A")) % 26) + ord("A"));
            }
            // jika text merupakan huruf kecil (semua)
            else {
                $text[$i] = chr(((ord($text[$i]) - ord("a") + ord($key[$ki]) - ord("a")) % 26) + ord("a"));
            }

            $ki++;
            if ($ki >= $kl) {
                $ki = 0;
            }
        }
    }

    // mengembalikan nilai text
    return $text;
}


// jika menekan tombol enkripsi
if (isset($_POST['encrypt'])) {
    $text = encrypt($key, $text);
    $error = "Text berhasil di enkripsi!";
}

// jika menekan tombol dekripsi
if (isset($_POST['decrypt'])) {
    $text = decrypt($key, $text);
    $error = "Text berhasil di dekripsi!";
}



?>
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">

        <div class="p-4 pt-5">
            <!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a> -->
            <h2 class="mb-4" style=" color: white;">Selamat Datang <?php echo $data['username']; ?></h2>
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
                        
                    </p>
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



        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow p-3 mb-5 bg-body">
                    <div class="card-header">
                        <caption>
                            <h2 style="text-align: center;"><b>Vigenere Cipher</b></h2>
                        </caption>
                    </div>
                    <div class="card-body">
                        <form action="<?= HOMEUSER; ?>/HomeLogin" method="post">
                            <div class="form-group">
                                <label for="Kunci">Kunci</label>
                                <input type="text" class="form-control" name="key" id="kunci" aria-describedby="inputKunci" placeholder="Masukkan Kunci" value="<?php echo $key; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Plaintext">Plaintext</label>
                                <textarea class="form-control" name="text" id="text" rows="5"><?php echo $text; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-success" name="encrypt" value="Encrypt">Encrypt</button>
                            <button type="submit" class="btn btn-danger" name="decrypt" value="Decrypt">Decrypt</button>
                        </form>
                    </div>
                    <div class="card-footer text-center text-success">
                        <strong><?php echo $error; ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>