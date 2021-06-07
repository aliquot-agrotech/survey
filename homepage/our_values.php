<!DOCTYPE html>
<html lang="en">
<?php
include '../db_connect.php';
?>
<head>
  <title>Updating Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
 
</head>
<body>

<style>
        .c2{
            margin-top: 100px;
        }
</style>
<?php
$sql1 = "SELECT * FROM our_values LIMIT 1";
$query1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
$results1 = mysqli_fetch_array($query1);
$title = $results1['title'];

$dsql = "SELECT * FROM our_values";
$dquery = mysqli_query($conn,$dsql);
        // $dresults = mysqli_fetch_assoc($dquery);
        // $h = $dresults['head'];
        // $desc = $dresults['description'];
        // $img = $dresults['image'];   
        // $id = $dresults['id'];
//print_r($desc);
?>
<div class="container mt-3">
  <h2 class="c2">Homepage Update Information</h2>
  <p>Update Information: Our_values</p>
  
        <p> 
        <div class="">    
        <label for="title">Edit Title</label>      
        <input class="form-control" id="title" name="title" type="text" value="<?=$title; ?>">
        </div>
        </p>

        

                <?php
                while($rows= mysqli_fetch_assoc($dquery)){
                    ?>
                <p>  
                <div class="">
                <?=$rows['head']; ?> 
                </div> 
                </p>

                <p> 
                <div class="">    
               <?=$rows['description']; ?>
                </div>
                </p>

                <p>Introduction Section Image:
                </p>
                <div class="">
                <img src="../assets/img/<?=$rows['image']; ?> ">
                     
                </div> 
            
                <div class="mt-3">
                <button class="btn btn-primary">Edit</button>
                </div>                

      <hr>
      <?php }
      ?>
</div>

</body>
</html>