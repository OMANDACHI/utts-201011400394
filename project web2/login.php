<?php
// Mengambil data pengguna dari form login dan memvalidasi
$username = $_POST['username'];
$password = $_POST['password'];

// Logika validasi login
if ($username == 'id20982115_shop' && $password == 'Oman17070@') {
    $query = "SELECT * FROM id20982115_oman WHERE username = :username AND password = :password";
    // Jika login berhasil, redirect ke halaman baru
    header('Location: halaman.utaman.php');
    exit();
} else {
    // Jika login gagal, kembalikan ke halaman login
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Gaya CSS untuk tampilan halaman login */
        body {
            background-image: url('lgi.jpg');
            font-family: Arial, sans-serif;
           
        }
        
        .container {
            width: 30%;
            margin: 0 auto;
            padding: 20px;
            background-color: ;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
        }
        
        .error-message {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
            border-radius: 3px;
            padding: 10px;
            margin-bottom: 20px;
        }
        
        .login-form .form-group {
            margin-bottom: 15px;
        }
        
        .login-form .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .login-form .form-group input[type="text"],
        .login-form .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .login-form .form-group input[type="submit"] {
            background-color: #337ab7;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login/Masuk</h1>

        <?php if(isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>

        <div class="login-form">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" id="Nama" name="Nama">
                </div>
                <div class="form-group">
                    <label for="Telfon">Telfon:</label>
                    <input type="Telfon" id="Telfon" name="Telfon">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="username">username:</label>
                    <input type="username" id="username" name="username">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>


