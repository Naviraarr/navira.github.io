<?php
    require "../aksi/koneksi.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $r = mysqli_query($conn, "SELECT * FROM album WHERE id='$id'");
    
        $album = [];
    
        while($row = mysqli_fetch_assoc($r)){
            $album[] = $row;
        }
        $album = $album[0];
    }

    if (isset($_POST['updatedata'])) {
        $id = $_POST['id'];
        $album = $_POST['album'];
        $artist = $_POST['artist'];
        $release_year = $_POST['release_year'];
        $genre = $_POST['genre'];

        $result = mysqli_query($conn, "UPDATE album SET album = '$album', artist = '$artist', release_year = '$release_year', genre = '$genre' WHERE id = '$id'");

        if ($result) {
            echo "
            <script>
                alert('Data Updated!');
                document.location.href = 'dashboard.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Failed to Updated Data!');
                document.location.href = 'update.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
    <link rel="stylesheet" href="../css/update.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2 style="text-align: center; color: #421E18">UPDATE</h2><br>
            <form action="update.php" method="post">
                <div class="input-box">
                    <label for="id_">Number Reference Album</label>
                    <input type="text" class="input" name="id" value="<?php echo $album['id']?>" readonly>
                </div>
                <div class="input-box">
                    <label for="album">Name of The Album</label>
                    <input type="text" class="input" name="album" value="<?php echo $album['album']?>" required>
                </div>
                <div class="input-box">
                    <label for="artist">Name of The Artist</label>
                    <input type="text" class="input" name="artist" value="<?php echo $album['artist']?>" required>
                </div>
                <div class="input-box">
                    <label for="release_year">Release Year</label>
                    <input type="date" class="input" name="release_year" value="<?php echo $album['release_year']?>" required>
                </div>
                <div class="input-box">
                    <label for="genre">Genre</label>
                    <input type="text" class="input" name="genre" value="<?php echo $album['genre']?>" required>
                </div>
                <div>
                    <input type="submit" value="UPDATE DATA" name="updatedata">
                </div>
            </form>
        </div>
    </div>
</body>
</html>