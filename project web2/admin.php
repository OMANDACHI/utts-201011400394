<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        .navbar {
            background-color: #2F4F4F;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        .navbar li {
            margin: 0 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: white;
        }
        
        .jumbotron {
            background-image: url("hlmn.jpg");
            width: 1200px;
            height: 280px;
            background-size: cover;
            background-position: center;
            color: #000000;
            text-align: center;
            padding: 100px;
        }
        
        .jumbotron h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .jumbotron p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        
        .footer {
            background-color: #2F4F4F;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="admin.php">Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="Galerry.php">Galerry</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>
    
    <div class="jumbotron">
        <h1>Selamat Datang di Dachi_shop</h1>
        <p>Temukan berbagai informasi menarik tentang produk dan layanan kami.</p>
        <a href="login.php" class="btn">Lihat Selengkapnya</a>
    </div>
    
    <div class="footer">
        &copy; <?php echo date('Y'); ?> 
Dc Shopp
<P>omandakhi0@gmail.com</p>
<br>
Jl. Sultan Iskandar Muda No. 88 L | Arteri Pondok Indah, Jakarta 12240 | F: (021) 722-8488
© 2018 Multi Elexindo Indah

    </div>
</body>
</html>
