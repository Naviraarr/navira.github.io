<?php
    session_start();
    require "../aksi/koneksi.php";

    if(isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

        if($result -> num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            if($row['username'] == "nap"){
                header("Location: dashboard.php");
            }else{
                header("Location: index.php");
            }
        }else{
            echo "<script>alert('Email atau Password Anda Salah')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2 style="text-align: center; color: #421E18;">LOGIN</h2><br>
            <form action="" method="post">
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" class="input" name="username" id="username" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" class="input" name="email" id="email" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" class="input" name="password" id="password" required>
                </div>
                <div>
                    <input type="submit" value="Login" name="login">
                </div>
                <div style="color: #421E18;text-decoration: none;">
                    Don't Have an Account yet? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>