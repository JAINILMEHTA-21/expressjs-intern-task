<?php
 $host = "localhost";
 $username = "root";
 $passwd = "";
 $dbname = "tandav";
 $connection = mysqli_connect($host,$username,$passwd,$dbname);

    $id = $_GET['user'];
    $q = mysqli_query($connection,"update user set is_delete = 1 where id='{$id}'") or die(mysqli_error($connection));
    if($q){
        echo "<script>alert('Record deleted');window.location='table.php';</script>";
    }
?>