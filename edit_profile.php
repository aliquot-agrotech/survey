<?php
include 'db_connect.php';
$id = "";
$firstname="";
$lastname="";
$middlename="";
$contact="";

$sector="";
$location="";
$address="";
$email="";

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $contact= $_POST['contact'];
    $sector= $_POST['sector'];
    $location= $_POST['location'];
    $address= $_POST['address'];
    $email= $_POST['email'];

    

    $insql = "UPDATE users SET firstname='$firstname',lastname='$lastname',middlename='$middlename',contact='$contact',
    sector='$sector',location='$location',address='$address', email='email' WHERE id = $id ";
    $squery = mysqlicon_query($conn,$insql) or die(mysqli_error($conn));

    header('Location: indexg.php?page=home');

}
