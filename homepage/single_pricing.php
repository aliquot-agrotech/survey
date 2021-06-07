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
$pid = $_GET['pid'];
$dsql = "SELECT * FROM pricing WHERE id = '".$pid."'";
$dquery = mysqli_query($conn,$dsql);
$dresults = mysqli_fetch_assoc($dquery);
$h = $dresults['head'];
$desc = $dresults['description'];
$img = $dresults['image'];
$id = $dresults['id'];
//print_r($desc);
?>
<div class="container mt-3">
  <h2 class="c2">Homepage Update Information</h2>
  <p>Update Information:</p>
  <form action="updates/update_price.php" method="POST" enctype="multipart/form-data">
        <p>  
        <div class="">
        <label for="head">Edit Header</label>
        <input name="id" type="hidden" value="<?=$id; ?>">  
        <input class="form-control" id="head" name="head" type="text" value="<?=$h; ?>">  
        </div> 
        </p>

        <p> 
        <div class="">    
        <label for="description">Edit Description</label>      
        <input class="form-control" id="description" name="description" type="text" value="<?=$desc; ?>">
        </div>
        </p>

        <p>Introduction Section Image:
        </p>
        <div class="custom-file mb-3">        
        <input type="file" placeholder="Upload Image" name="image" id="image" value="<?=$img; ?>">
        </div> 
    
        <div class="mt-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        <span id="success_message" class="text-success">
        </span>
  </form>
</div>


</body>
</html>