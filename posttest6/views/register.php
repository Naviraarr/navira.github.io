<?php
    require '../aksi/koneksi.php';
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
     
    if (isset($_POST['registrasi'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            if (!$result -> num_rows > 0) {
                $sql = "INSERT INTO users VALUES ('', '$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>
                        alert('You have successfully registered!')
                    </script>";
                    header("Location: login.php");
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                } else {
                    echo "<script>
                        alert('Something went wrong!')
                    </script>";
                }
            } else {
                echo "<script>alert('Email already exist!')</script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2 style="text-align: center; color: #5D4E5D">REGISTRASI</h2><br>
            <form action="" method="post">
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="input" required>
                </div>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="input" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="input" required>
                </div>
                <div>
                    <input type="button" name="registrasi" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
</body>
</html>