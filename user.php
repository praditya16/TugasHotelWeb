<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        /* Global Styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li,
        a,
        button {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            font-family: Arial, sans-serif;
            color: #333;
        }

        body {
            line-height: 1.6;
        }

        /* Header */
        header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        header .top-bar {
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        header .logo h1 {
            font-size: 2.5rem;
            margin: 10px 0;
        }

        header nav ul {
            display: flex;
            justify-content: center;
            gap: 20px;
            background: #333;
            padding: 10px 0;
        }

        header nav ul li a {
            color: white;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        header nav ul li a:hover {
            color: #f0a500;
        }

        /* Hero Section */
        .hero {
            background: url('img/b.jpg') no-repeat center center/cover;
            height: 80vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .hero .overlay {
            text-align: center;


        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 10px;
            color: rgb(255, 255, 255);
        }

        .hero h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: rgb(255, 255, 255);
        }

        .hero button {
            background: #f0a500;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .hero button:hover {
            background: #e38c00;
        }

        /* Rooms Section */
        .rooms {
            text-align: center;
            padding: 50px 20px;
            color: white;
        }

        .rooms h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: rgb(54, 145, 231);
        }

        .room-list {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .room {
            background: rgb(255, 253, 253);
            border: 1px solid #ddd;
            /* border-radius: 5px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); */
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .room:hover {
            transform: translateY(-5px);
        }

        .room img {
            width: 100%;
            height: auto;
        }

        .room h3 {
            font-size: 1.2rem;
            margin: 15px 0;
        }

        .room p {
            font-size: 1rem;
            color: #666;
        }

        .room button {
            background: #333;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .room button:hover {
            background: #555;
        }

        .container-room {
            display: flex;
            flex-direction: column;
        }

        /* Footer */
        footer {
            text-align: center;
            background: #222;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="top-bar">
            <span>Indonesia, Bandung City</span>
            <span>+62 835345435</span>
        </div>
        <div class="logo">
            <h1>Brunhilde Hotel</h1>
        </div>
        <nav>
            <ul>
                <li><a hre-f="#home">Beranda</a></li>
                <li><a href="regis.php">Registrasi</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="overlay">
            <h2>Welcome To Brunhilde Hotel</h2>
            <h3>Enjoy The Experience</h3>

        </div>
    </section>

    <section class="rooms">
        <div class="title">

            <h2>Type Kamar</h2>
        </div>

        <div class="room-list">
            <div class="room">
                <img src="img/s.jpg" alt="Deluxe Suite">
                <h3>Junior Suite</h3>
                <p>Rp 300.000 / Night</p>
                <p>1</p>
                <a href="pemesanan.php"><button>Pesan Kamar</button></a>
            </div>
            <div class="room">
                <img src="img/a.jpg" alt="Junior Suite">
                <h3>Deluxe Suite</h3>
                <p>900.000 / Night</p>
                <p>3</p>
                <a href="pemesanan2.php"><button>Pesan Kamar</button></a>
            </div>
            <div class="room">
                <img src="img/d.jpeg" alt="Executive Room">
                <h3>Executive Room</h3>
                <p>Rp 500.000 / Night</p>
                <p>2</p>
                <a href="pemesanan1.php"><button>Pesan Kamar</button></a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Grand Hotel - All Rights Reserved</p>
    </footer>
</body>

</html>