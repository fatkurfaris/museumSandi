<?php
$key = "";
$text = "";
$error = "";
$color = "#FF0000";


// $key = $_POST['key'];
// $text = $_POST['text'];

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
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <!-- <h2 class="mb-4">Welcome Admin</h2> -->
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow p-3 mb-5 bg-body">
                <div class="card-header">
                    <caption>
                        <h2 style="text-align: center;"><b>Vigenere Cipher</b></h2>
                    </caption>
                </div>
                <div class="card-body">
                    <form action="<?= HOMEUSER; ?>/Admin" method="post">
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