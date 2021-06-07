<?php

// session_start();
// if(!isset($_SESSION['login_type'] == 1)){

function dbConnect(){
$conn= new mysqli('localhost','root','','survey_db')or die("Could not connect to mysql".mysqli_error($con));

}

 function userDetails($conn){
    // dbConnect();
    $msql = "SELECT * FROM intro_page";
    $mquery = mysqli_query($conn,$msql) or die(mysqli_error($conn));
    $mresults = mysqli_fetch_array($mquery);
    // print_r($mresults);
    return $mresults;    
 }

// }else{
//     die('You must login as admin to edit this data');
// }

?>

