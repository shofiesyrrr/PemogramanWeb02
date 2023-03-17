<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <?php
    $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
    $ar_skill = ["HTML" => 10, "CSS" => 10, "Java Script" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    ?>

    <fieldset style="background-color: #a0ced9;">
        <legend>Form Registrasi IT Club Data Science</legend>

        <table>
            <tr>
                <th>
                    <form method="POST">

                </th>
            </tr>
            <tr>
                <td>NIM :
                </td>
                <td>
                    <input type="text" name="nim" value="" size="30">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap :
                </td>
                <td>
                    <input type="text" name="nama" value="" size="30">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin
                </td>
                <td>
                    <input type="radio" name="jk" value="L" size="30">Laki-laki
                    <input type="radio" name="jk" value="P" size="30">Perempuan
                </td>
            </tr>
            <tr>
                <td> Progam Studi :</td>
                <td>
                    <select name="prodi">
                        <?php
                        foreach ($ar_prodi as $prodi => $p) { ?>php

                        <option value="><?= $prodi ?>"><?= $p ?></option>
                        ?>
                    <?php } ?>
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Skill Programing :</td>
                <td>
                    <?php
                    foreach ($ar_skill as $skill => $s) {
                    ?>
                        <input type="checkbox" name="skill" value="<?= $s ?>"><?= $skill ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="proses"> Simpan </button>
                </td>
            </tr>
        </table>
    </fieldset>

    <?php
    if (isset($_POST['proses'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $listNilai = [];

    ?>
        <?php if (!empty($_POST['skill'])) {
            $skills = $_POST['skill'];
        } ?>
        NIM : <?= $nim ?><br />
        Nama : <?= $nama ?><br />
        Jenis Kelamin : <?= $jk ?><br />
        Program Studi : <?= $prodi ?><br />
        Skill Programing : <?= $skill ?><br />


    <?php
        function skor_skill($nilai)
        {
            if ($nilai >= 100 && $nilai <= 150) {
                return "Sangat Baik";
            } elseif ($nilai >= 60 && $nilai <= 100) {
                return "Baik";
            } elseif ($nilai >= 40 && $nilai <= 60) {
                return "Cukup";
            } elseif ($nilai >= 0 && $nilai <= 40) {
                return "Kurang";
            } else {
                return "Tidak Memadai";
            }
        }
        echo 'Kategori Skill :' . skor_skill($nilai);
        $nilai = array_sum($listNilai);
    } ?>
    <?php
    if (!empty($_POST['skill'])) {
        foreach ($skills as $skill) {

            if ($skill == 'HTML') {
                array_push($listNilai, 10);
            } else if ($skill == 'CSS') {
                array_push($listNilai, 10);
            } else if ($skill == 'JavaScript') {
                array_push($listNilai, 20);
            } else if ($skill == 'RWD Boostrap') {
                array_push($listNilai, 20);
            } else if ($skill == 'PHP') {
                array_push($listNilai, 30);
            } else if ($skill == 'Python') {
                array_push($listNilai, 30);
            } else {
                array_push($listNilai, 50);
            }

            echo $skill . ", ";
        }
    } ?>

</body>

</html>