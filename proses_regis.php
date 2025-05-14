<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$queryruser = "INSERT INTO user (id, nama, username, password, level) VALUES ('$id','$nama','$username','$password','$level')";
if (mysqli_query($conn, $queryruser)) {
    echo '
            <script>
                alert("data telah ditambahkan")
                document.location.href = "login.php"
            </script>
        ';
} else {
    echo "Error Pada registrasi" . mysqli_error($conn);
}
mysqli_close($conn);
