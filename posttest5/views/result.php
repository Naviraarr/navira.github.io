<?php
  if(isset($_POST['submit'])){
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $release = $_POST['release'];
    $comments = $_POST['comments'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
    <div class="container">
        <h3>Your Request</h3>
        <p>Artist Name: <?= $artist ?></p>
        <p>Album Name: <?= $album ?></p>
        <p>Release Date: <?= $release ?></p>
        <p>Review: <?= $comments ?></p>
    </div>

    <script>
        alert("Request Sudah Dikirim ^_^");
    </script>
</body>
</html>