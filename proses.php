<?php
if (empty($_POST['hobi'])) {
    echo "Semua field harus diisi!";
    exit;
}


$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tingkat = $_POST['tingkat'];
$gender = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];


$pecah = implode(", ", $hobi);


echo "nama saya adalah $nama_depan $nama_belakang saya sekolah tingkat $tingkat jenis kelamin saya $gender dan hobi saya $pecah";


?>