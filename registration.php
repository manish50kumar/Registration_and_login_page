<?php
include("connection.php");

if(isset($_REQUEST['submit']) != ''){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phoneNo = $_POST['phoneNo'];
    $address = $_POST['address'];
    if($firstName == '' || $lastName == '' || $email == '' || $password == '' || $gender == '' || $phoneNo == '' || $address == ''){
        echo "Please Filled All the fields..";
    }
    else{
        $sql = "insert into login (firstName , lastName , email , password , gender , phone , address) values ('".$firstName."','".$lastName."','".$email."','".$password."','".$gender."','".$phoneNo."','".$address."')";
        $res = mysqli_query($con,$sql);
        if($res){
           header("location:loginForm.html");
        }
    }
}

?>