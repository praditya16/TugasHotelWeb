<div class="form-container">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="pemesanan.css">
    </head>

    <body>

        <h1>Executive Room</h1>

        <div class="form-container">
            <form action="proses_pemesanan.php" method="post">
                <input type="hidden" name="id_pengunjung" id="id_pengunjung">
                <label for="nama_pengunjung">Nama Pengunjung: </label>
                <input type="text" id="nama_pengunjung" name="nama_pengunjung" placeholder=""><br><br>

                <label for="alamat">Alamat: </label>
                <input type="text" id="alamat" name="alamat" placeholder=""><br><br>

                <label for="no_telepon">Nomor Telepon: </label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder=""><br><br>

                <input type="hidden" name="id_kamar" id="id_kamar">
                <label for="type_kamar">Type Kamar: </label>
                <select id="type_kamar" name="type_kamar" required>
                    <option value="EXECUTIVE">Executive</option>
                </select>

                <label for="lantai">Lantai: </label>
                <select id="lantai" name="lantai" required>
                    <option value="3">3</option>
                </select>

                <label for="fasilitas">Fasilitas: </label>
                <select id="fasilitas" name="fasilitas" required>
                    <option value="WIFI">WIFI</option>
                    <option value="Air Panas">Air Panas</option>
                    <option value="WIFI dan Air Panas">WIFI dan Air Panas</option>
                </select>

                <h2>Pesan Kamar</h2>

                <input type="hidden" id="id_pembayaran" name="id_pembayaran">

                <label for="no_kamar">No Kamar: </label>
                <select id="no_kamar" name="no_kamar" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <label for="check_in">Check IN: </label>
                <input type="time" id="check_in" name="check_in" min="00:00" max="24:00" required><br><br>

                <label for="check_out">Check OUT: </label>
                <input type="time" id="check_out" name="check_out" min="00:00" max="24:00" required><br><br>

                <label for="total_harga">Total Harga: </label>
                <select id="total_harga" name="total_harga" required>
                    <option value="500000">500000</option>
                </select>

                <button type="submit">Bayar</button>
            </form>
        </div>

    </body>

    </html>