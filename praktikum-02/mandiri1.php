<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<body>
    <hr>
    <div style="display: flex; margin-left: 10px; margin-top:25px">
        <div class="container">
            <form method="POST" action="mandiri1.php">
                <div class="form-group row">
                    <label for="pelanggan" class="col-4 col-form-label">Nama Pelanggan</label>
                    <div class="col-8">
                        <input id="pelanggan" name="pelanggan" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Barang Elektronik</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Barang" id="Barang_0" type="radio" class="custom-control-input" value="tv" required="required">
                            <label for="Barang_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Barang" id="Barang_1" type="radio" class="custom-control-input" value="kulkas" required="required">
                            <label for="Barang_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Barang" id="Barang_2" type="radio" class="custom-control-input" value="mesin" required="required">
                            <label for="Barang_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-warning">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="card" >
                <h5 class="card-header" style="background-color: #F0FFFF; color:black;">
                    Daftar Barang dan Harga
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        TV : 4.200.000
                    </p>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Kulkas : 3.100.000
                    </p>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Mesin Cuci : 3.800.000
                    </p>
                </div>
                <div class="card-footer" style="background-color: #F0FFFF; color:black; ">
                    Harga Dapat Saja Berubah.
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr color="black"><br>
    <div class="row">
        <div class="col-md-3" >
            <?php

            $proses = $_POST["proses"];
            $nama_cs = $_POST["pelanggan"];
            $pilih_barang = $_POST["Barang"];
            $jumlah_barang = $_POST["jumlah"];

            $pilihan_barang;
            if ($pilih_barang == "tv") {
                $pilihan_barang = "TV";
            } elseif ($pilih_barang == "kulkas") {
                $pilihan_barang = "Kulkas";
            } elseif ($pilih_barang == "mesin") {
                $pilihan_barang = "Mesin Cuci";
            } else {
                $pilihan_barang = "Tidak Ada";
            }

            // buat total belanja 
            $total_belanja;
            if ($pilihan_barang == "TV") {
                $total_belanja = 4200000 * $jumlah_barang;
            } elseif ($pilihan_barang == "Kulkas") {
                $total_belanja = 3100000 * $jumlah_barang;
            } elseif ($pilihan_barang == "Mesin") {
                $total_belanja = 3100000 * $jumlah_barang;
            } else {
                $total_belanja = "-";
            }
            ?>

            <h5>DETAIL BELANJA</h5>
            <?= "Nama Pelanggan : " . $nama_cs; ?>
            <br>
            <?= "Pilihan Barang Elektronik : " . $pilihan_barang; ?>
            <br>
            <?= "Jumlah : " . $jumlah_barang; ?>
            <br>
            <?= "Total : Rp. " . number_format($total_belanja, 0, ".", "."); ?>
        </div>
    </div>
    </div>

</body>

</html>