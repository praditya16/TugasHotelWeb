<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regis.css">
</head>

<body>
    <form action="proses_regis.php" method="POST">
        <h1>Registrasi</h1>
        <input type="hidden" name="id" id="id">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="Masukan Nama"><br><br>
        <label for="username">username :</label>
        <input type="username" name="username" id="username" placeholder="Masukan Username"><br><br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="password"><br><br>
        <label for="level">Level</label>
        <select name="level" id="level">
            <option value="admin">ADMIN</option>
            <option value="user">USER</option><br><br>
        </select>
        <button type="submit">Daftar</button>
    </form>
</body>

</html>