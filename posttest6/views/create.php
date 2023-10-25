<?php
    require '../aksi/koneksi.php';

    if(isset($_POST['adddata'])) {
        $id = $_POST['id'];
        $album = $_POST['album'];
        $temp_cover = $_FILES['cover']['name'];
        date_default_timezone_set('Asia/Makassar');
        $curtime = date('Y-m-d h-i-s');
        $x = explode('.', $temp_cover);
        $extensi = strtolower(end($x));
        $cover = $curtime.$album.'.'.$extensi;
        $tmp = $_FILES['cover']['tmp_name'];
        $artist = $_POST['artist'];
        $release_year = $_POST['release_year'];
        $genre = $_POST['genre'];
        
        $upload = "../img/";

        if(move_uploaded_file($tmp, $upload.$cover)){
            $result = mysqli_query($conn, "INSERT INTO album VALUES ('$id', '$album', '$cover', '$artist', '$release_year', '$genre')");
                if($result){
                    echo "<script>
                    alert('Successfully Added Data');
                    document.location.href = 'dashboard.php';
                    </script>";
                }
                else{
                    echo "<script>
                    alert('Failed Added Data');
                    document.location.href = 'create.php';
                    </script>";
                }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA</title>
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2 style="text-align: center; color: #ECD59F;">ADD</h2><br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="id">Number Reference Album</label>
                    <input type="text" class="input" name="id" required>
                </div>
                <div class="input-box">
                    <label for="album">Name of The Album</label>
                    <input type="text" class="input" name="album" required>
                </div>
                <div class="input-box">
                    <label for="cover">Album Cover</label>
                    <input type="file" class="input" name="cover" required>
                </div>
                <div class="input-box">
                    <label for="artist">Name of The Artist</label>
                    <input type="text" class="input" name="artist" required>
                </div>
                <div class="input-box">
                    <label for="release_year">Release Year</label>
                    <input type="date" class="input" name="release_year" required>
                </div>
                <div class="input-box">
                    <label for="genre">Genre</label>
                    <input type="text" class="input" name="genre" required>
                </div>
                <div>
                    <input type="submit" value="ADD DATA" name="adddata">
                </div>
            </form>
        </div>
    </div>
</body>
</html>