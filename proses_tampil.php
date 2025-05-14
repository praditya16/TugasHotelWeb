<?php
include '../koneksi/koneksi.php';

if (isset($_GET['id'])) {
    $id_admin = $_GET['id'];

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("SELECT * FROM tb_admin WHERE id_admin = ?");
    $stmt->bind_param("s", $id_admin);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();
    
    if (!$admin) {
        // Jika ID tidak ditemukan, redirect
        header("Location: tampil_admin.php");
        exit();
    }
} else {
    header("Location: tampil_admin.php");
    exit();
}
?>

<h2>Edit Admin</h2>
<form action="proses_edit_admin.php" method="POST">
    <input type="hidden" name="id_admin" value="<?php echo $admin['id_admin']; ?>">

    <label>Username:</label>
    <input type="text" name="username" value="<?php echo $admin['username']; ?>" required><br><br>

    <label>Password (Tanggal Lahir - yyyy-mm-dd):</label>
    <input type="date" name="password" value="<?php echo $admin['tanggal_lahir']; ?>" required><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $admin['nama']; ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $admin['email']; ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
