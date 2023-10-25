<?php
    session_start();
    require "../aksi/koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM album");

    $album = [];

    while($row = mysqli_fetch_assoc($result)){
        $album[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Album</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h1 style="font-family: mouly, 'Poppins';">napsly.</h1>
        </div>
        <ul class="main">
            <li>
                <a href="../views/dashboard.php">Dashboard</a>
            </li>
            <li> 
                <a href="../views/index.php" onclick="return confirm('Do you sure want to go back?');">Back</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="header-wrapper">
            <div class="header">
                <h2>Dashboard</h2>
                <p><?php echo date('l, d F Y'); ?></p>
                <p><?php date_default_timezone_set('Asia/Makassar');
                        echo date('h:i a'); ?></p>
            </div>
            <div class="search">
                <i class="fas fa-search"></i><input type="text" placeholder="Search">
            </div>
        </div>
    <div class="card-container">
        <h1><a href="create.php"><button class="add-btn">Create</button></a></h1><br>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Reference Number</th>
                    <th>Album Name</th>
                    <th>Album Cover</th>
                    <th>Artist Name</th>
                    <th>Release Year</th>
                    <th>Genre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($album as $abm) :?>
                <tr>
                    <td><?php echo $abm["id"] ?></td>
                    <td><?php echo $abm["album"] ?></td>
                    <td><img src="../img/<?php echo $abm["cover"]; ?>" width="200px"></td>
                    <td><?php echo $abm["artist"] ?></td>
                    <td><?php echo $abm["release_year"] ?></td>
                    <td><?php echo $abm["genre"] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $abm['id']?>"><i class="fas fa-edit" style="color: #5A658B;"></i></a>
                        <a href="delete.php?id=<?php echo $abm['id']?>"><i class="fas fa-trash" style="color: #731803;"></i></a>
                    </td>
                </tr>
                <?php $i; endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>