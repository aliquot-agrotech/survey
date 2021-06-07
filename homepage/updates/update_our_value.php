<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include '../../db_connect.php';

$head='';
$description='';
$image='';

$id = '';

if(isset($_POST['submit'])) 
{   
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
    $folder = "../../assets/img/".$filename;
    move_uploaded_file($tempname, $folder);

    $head = $_POST['head'];
    $description = $_POST['description'];
    $image = $filename;

    $id=$_POST['id']; 

    if((!empty($head)) && (!empty($description)) && (!empty($image)))
    {

        // $csql="INSERT INTO intro_page(head,description,image) 
        // VALUES('$head','$description','$image') ";

        $csql="UPDATE our_values SET head = '$head', description = '$description', image='$image' WHERE id= '".$id."' ";
        $cquery= mysqli_query($conn,$csql) or die(mysqli_error($conn)); 
        
        echo "<div class='alert alert-success' role='alert'>Thank you, Your request has been excuted successfully</div>";

        sleep(4);
        header('location: ../../');
    
    }else{
        echo 'The information provided is incomplete';        
    }
}
?>