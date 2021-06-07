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
$sql1 = "SELECT * FROM pricing LIMIT 1";
$query1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
$results1 = mysqli_fetch_array($query1);
$title = $results1['title'];

$dsql = "SELECT * FROM pricing";
$dquery = mysqli_query($conn,$dsql);
// include '../header.php';
// include '../sidebar.php';       
?>
<div class="container mt-3">
  <h2 class="c2">Homepage Update Information</h2>
  <p>Update Information: pricing</p>
  
  
        <p> 
        <div class="">    
        <label for="title">Edit Title</label>      
        <input class="form-control" id="title" name="title" type="text" value="<?=$title; ?>">
        </div>
        </p>

        

                <?php
                while($rows= mysqli_fetch_assoc($dquery)){
                  $pid=$rows['id'];
                    ?>
                <p>  
                <div class="">
                <?=$rows['head']; ?> 
                </div> 
                </p>

                <p>  
                <div class="">
                <?=$rows['price']; ?> 
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
                <a href="single_pricing.php?pid=<?=$pid?>" type="submit" name="submit" class="btn btn-primary">Edit</a>

                </div>
      <hr>
      <?php }
      ?>
</div>

</body>
</html>