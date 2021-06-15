<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "tandav";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     if(!isset($_GET['id']) || empty($_GET['$id'])){
         header("location:table.php");
     }
    $editid = $_GET['id'];
    //select data from table
    $editq = mysqli_query($connection,"select * from user where user_id = '{$editid}'") or die(mysqli_error($connection));
    $editdata = mysqli_fetch_array($editq);
    if($_POST){
        $txt1 = $_POST['txt1'];
        $txt2 = $_POST['txt2'];
        $txt3 = $_POST['txt3'];
        $txt4 = $_POST['txt4'];
        $txt5 = $_POST['txt5'];
        $txt6 = $_POST['txt6'];
        $txt7 = $_POST['txt7'];
        $txt8 = $_POST['txt8'];
        $txt9 = $_POST['txt9'];
        $uq = mysqli_query($connection,"update user set user_name='{$txt1}',email='{$txt4}',password='{$txt7}',mobile='{$txt5}', where id='{$editid}'") or die(mysqli_error($connection));
        if($uq){
            echo "<script>alert('Record Updated');window.location='table.php';</script>";
        }
        
    }

?>
<!DOCTYPE html>
<html>