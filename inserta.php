<?php
include 'db_connect.php';

$survey_id = '';
$user_id = '';
$question_id = '';
$credits = '';
$answer= '';

if(isset($_POST['submit'])){

		$survey_id= $_POST['survey_id'];
		$question_id = $_POST['qid[]'];
		$credits = 1;
		$user_id = $_POST['user_id'];

		if($type[] == 'check_opt'){
		answer=", answer='[".implode("],[",$answer[$k])."]' ";

		}else{
		answer='$answer[]';
		}
		$sql= "INSERT INTO answers(survey_id,user_id,question_id,answer) VALUES
		('$survey_id','$user_id','$question_id','$answer')";
		$query= mysqli_query($conn,$sql) or die(mysqli_error($conn));

}

?>