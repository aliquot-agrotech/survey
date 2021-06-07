<?php
require 'db_connect.php';
$firstname= '';
$lastname='';
$middlename='';
$contact='';
$address='';
$email= '';
$password='';
$type= 3;

if(isset($_POST['submit'])) {
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $middlename=$_POST['middlename'];
    $contact=$_POST['contact'];
    $address = $_POST['address'];
    $email= $_POST['email'];
    $password=md5($_POST['password']);
    $type= 3;

    $insertsql="INSERT INTO users(firstname,lastname,middlename,contact,`address`,`email`,`password`,`type`) 
    VALUES('$firstname','$lastname','$middlename','$contact','$address','$email','$password','$type')";

    $insertQuery=mysqli_query($conn, $insertsql) or die(mysqli_error($conn));

    header('Location: login.php');
}