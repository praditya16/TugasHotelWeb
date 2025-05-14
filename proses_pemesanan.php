<?php
include 'koneksi.php';

$id_pengunjung = $_POST['id_pengunjung'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$id_kamar = $_POST['id_kamar'];
$type_kamar = $_POST['type_kamar'];
$lantai = $_POST['lantai'];
$fasilitas = $_POST['fasilitas'];
$id_pembayaran = $_POST['id_pembayaran'];
$no_kamar = $_POST['no_kamar'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$total_harga = $_POST['total_harga'];


$querypengunjung = "INSERT INTO pengunjung (id_pengunjung, nama_pengunjung, alamat, no_telepon) VALUES ('$id_pengunjung','$nama_pengunjung','$alamat','$no_telepon')";

if (mysqli_query($conn, $querypengunjung)) {
    $id_pengunjung = mysqli_insert_id($conn);

    $querykamar = "INSERT INTO kamar (id_kamar, type_kamar, lantai, fasilitas) VALUES ('$id_kamar','$type_kamar','$lantai','$fasilitas')";
    if (mysqli_query($conn, $querykamar))
        $id_kamar = mysqli_insert_id($conn);

    $querypembayaran = "INSERT INTO pembayaran (id_pembayaran, id_kamar, no_kamar, check_in, check_out, total_harga) VALUES ('$id_pembayaran','$id_kamar','
    $no_kamar','$check_in','$check_out','$total_harga')";
    if (mysqli_query($conn, $querypembayaran)) {
        echo "<script>alert('Pemesanan berhasil!'); window.location='info.php';</script>";
        echo "Pemesanan Berhasil";
    } else {
        echo "Error Pada pembayaran" . mysqli_error($conn);
    }
} else {
    echo "ERROR" . mysqli_error($conn);
}

mysqli_close($conn);
