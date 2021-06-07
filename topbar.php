<?php

include 'db_connect.php';
if(isset($_SESSION['login_id'])){
$userid= $_SESSION['login_id'];
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
        .bg-light {
            /* background-color: #a11d2b!important; */
            background-color: #a11d2b !important;
            /* margin-left: 250px; */
        }
        .offset{
            margin-bottom: 100px !important;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #f8f9fa;
        }
        .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
            color: #f8f9fa;
        }
        .card-primary.card-outline {
            border-top: 3px solid #a11d2b;
        }
        .bg-gradient-primary {
            background: #a11d2b linear-gradient(
        180deg
        ,#fff,#a11d2b) repeat-x!important;
            color: #fff;
        }
        .border-primary {
            border-color: #a11d2b!important;
        }
        .bg-primary {
            background-color: #a11d2b!important;
        }
</style>
<div class="">
    <nav class="navbar navbar-expand-md navbar-light bg-light" style="margin-bottom: 10px">
        <!-- <a href="#" class="navbar-brand">Brand</a> -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="float: right">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active"><image src="images/logoo.png" width="172px" height="72px"></a>
                <li class="nav-item dropdown">
                    <a href="./" class="nav-link nav-home">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>                    
                </li> 
                <div class="nav-item dropdown" style="color: #fff">
                <i class="nav-icon fas fa-users"></i>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Users</a>                 
                    <div class="dropdown-menu">
                        <a href="./indexg.php?page=new_user" class="dropdown-item">Add User</a>
                        <a href="./indexg.php?page=user_list" class="dropdown-item">List</a>                        
                    </div>
                </div>
                <div class="nav-item dropdown" style="color: #fff">
                    <i class="nav-icon fa fa-snowflake-o"></i>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Surveys</a>
                    <div class="dropdown-menu">
                        <a href="./indexg.php?page=new_survey" class="dropdown-item">Add Survey</a>
                        <a href="./indexg.php?page=survey_list" class="dropdown-item">List</a>
                        <a href="./indexg.php?page=survey_report" class="dropdown-item">Survey Report</a>
                        <a href="./indexg.php?page=survey_widget" class="dropdown-item">Survey List</a>
                    </div>
                </div>
                <div class="navbar-nav">
                    <a href="./indexg.php?page=survey_report" class="nav-link nav-survey_report">
                    <i class="nav-icon fas fa-poll"></i>
                    <p>
                        Survey Report
                    </p>
                    </a>
                </div> 
            </div>
           
            <div class="navbar-nav">
            <?php 
                if(!empty($userid)){
              
                $usql="SELECT * FROM users WHERE id = $userid";
                $uquery = mysqli_query($conn,$usql) or die(mysqli_error($conn));
                $uresults = mysqli_fetch_array($uquery);
                $myname = $uresults['firstname'];
            ?>
               <p> <b>Welcome </b><?=$myname; ?> <a href="logout.php" class="nav-item nav-link">Logout</a></p>
                <?php }else{
                ?>

                <a href="login.php" class="nav-item nav-link">Login</a>
                
                    <?php } 
                    ?>
            </div>
        </div>
    </nav>
</div>

  <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
       if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }
        
  		}
          $('.manage_account').click(function(){
          uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>