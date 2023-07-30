<?php
include ("connection.php");

if(isset($_REQUEST['submit']) != ''){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == '' || $password == ''){
        echo "Enter all data..";
    }
    else{
       
       $sql = "SELECT login.email,login.password FROM users.login where login.email='$email' and login.password='$password'";

        $res = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($res);

        if($row['email'] == $email && $row['password'] == $password){
            header("location:welcome.html");
        }
        else{
            echo " not login...";
        }
    }
}
?>