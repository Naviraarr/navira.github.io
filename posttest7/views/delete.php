<?php
    require "../aksi/koneksi.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM album WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "
            <script>
                alert('Successfully Removed Data!');
                document.location.href = 'dashboard.php';
            </script>";
        } 
        else{
            echo "
            <script>
                alert('Failed to Removed Data!');
                document.location.href = 'dashboard.php';
            </script>";
        }
    }
?>