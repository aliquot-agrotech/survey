<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<?php
include 'db_connect.php';
if(isset($_SESSION['login_id'])){
$userid= $_SESSION['login_id'];
}
?>

<style>
        table, th, td {
        border: 1px solid black;
        }
        .navbar{
            background: #fff;
            padding-top: 0;
            padding-bottom: 0;
            box-shadow: 1px 3px 4px 0 #adadad33;
        }
        .navbar-light .navbar-brand {
            color: #2196F3;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #1ebdc2;
        }
        .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: #1ebdc2;
        }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #fff;
        }
        .navbar-light .navbar-nav .nav-link{
            padding-top: 22px;
            padding-bottom: 22px;
            transition: 0.3s;
            padding-left: 24px;
            padding-right: 24px;
                font-size: 14px;
        }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
            background: #1ebdc2;
            transition: 0.3s;
        }
        .dropdown-item:focus, .dropdown-item:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1ebdc2 !important;
        }
        .sm-menu{
            border-radius: 0px;
            border: 0px;
            top: 97%;
            box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
        }
        .dropdown-item {
            color: #3c3c3c;
                font-size: 14px;
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #2196F3;
        }
        .navbar-toggler{
            outline: none !important;
        }
        .navbar-tog{
            color: #1ebdc2;
        }
        .megamenu-li {
            position: static;
        }

        .megamenu {
            position: absolute;
            width: 100%;
            left: 0;
            right: 0;
            padding: 15px;
        }
        .megamenu h6{
            margin-left: 21px;
        }
        .megamenu i{
            width: 20px;
        }
        .modal-backdrop {
        /* bug fix - no overlay */    
        display: none;    
}
</style>
<script>
        $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        }); 
        
            $(document).ready(function() {
            $(".megamenu").on("click", function(e) {
                e.stopPropagation();
            });
        });
</script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php if($_SESSION['login_type'] == 1): ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div style="width: 100%">

        <div style="width:20%; float: left">
        <a class="navbar-brand" href="#">Company Logo</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
       <div style="width=80%; float: right">
       <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
        </ul>
        <ul class="navbar-nav navbar-light" style="background-color: #fff">
                <li class="nav-item">
                <a href="indexg.php" class="nav-link nav-home">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <p>
                    Dashboard
                </p>
                </a>            
                </li>            
            <!-- <li class="nav-item"><a class="nav-link" href="#">About Us</a></li> -->
            <li class="nav-item dmenu dropdown">
                <!-- <i class="nav-icon fas fa-users"></i> -->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                <a href="./indexg.php?page=new_user" class="dropdown-item">Add User</a>
                <a href="./indexg.php?page=user_list" class="dropdown-item">List</a>  
                </div>
            </li> 
            <li class="nav-item dmenu dropdown">
                <!-- <i class="nav-icon fas fa-users"></i> -->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Surveys
                </a>

                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">

                <!-- <a href="./indexg.php?page=new_survey" class="dropdown-item">Add Survey</a> -->
                <a href="./indexg.php?page=new_survey" class="dropdown-item">Add Survey</a>
                <a href="./indexg.php?page=create_template" class="dropdown-item">Add Template</a>
                <a href="./indexg.php?page=survey_list" class="dropdown-item">List</a>
                <a href="./indexg.php?page=template_list" class="dropdown-item">Template List</a>
                <a href="./indexg.php?page=survey_report" class="dropdown-item">Survey Report</a>
                <a href="./indexg.php?page=survey_widget" class="dropdown-item">Survey List</a>
                </div>
            </li>             
            <li class="nav-item">
                <a href="./indexg.php?page=survey_report" class="nav-link nav-survey_report">
                <!-- <i class="nav-icon fas fa-poll"></i> -->
                <p>
                    Survey Reports
                </p>
                </a>
            </li>
            <?php 
                if(empty($userid)){ ?>
            <li class="nav-item">
            
                
                <a href="login.php" class="nav-item nav-link">Login</a>    
            </li>            
                <?php }else{
                $usql="SELECT * FROM users WHERE id = $userid";
                $uquery = mysqli_query($conn,$usql) or die(mysqli_error($conn));
                $uresults = mysqli_fetch_array($uquery);
                $myname = $uresults['firstname'];
            ?>
            
            <li class="nav-item dmenu dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Welcome </b><?=$myname; ?>
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">

                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="" style="width: 100%">View Profile</button> <br><a href="logout.php" class="btn btn-danger" role="button" style="width: 100%">Logout</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example" data-whatever="@fat" style="width: 100%">Account Statement</button>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <img src="images/profile.png" style="width: 72px"/>
                    
                        <form method="POST" action="edit_profile.php">
                        <?php
                         $msql="SELECT * FROM users WHERE id = $userid";
                         $mquery = mysqli_query($conn,$msql) or die(mysqli_error($conn));
                         $mresults = mysqli_fetch_array($mquery);
                         $firstname = $mresults['firstname'];
                         $lastname = $mresults['lastname'];
                         $middlename = $mresults['middlename'];
                         $sector = $mresults['sector'];
                         $location = $mresults['location'];
                         $address = $mresults['address'];
                         $email = $mresults['email'];
                        ?>
                            <div class="form-group">
                          <li> <label for="firstname" class="col-form-label">First Name:</label> <?=$firstname; ?></li>                            

                            </div>
                            <div class="form-group">
                          <li> <label for="middlename" class="col-form-label">Middle Name:</label> <?=$middlename; ?></li>                            

                            </div>
                            <div class="form-group">
                          <li> <label for="lastname" class="col-form-label">Last Name:</label> <?=$lastname; ?></li>                            

                            </div>
                            <div class="form-group">
                          <li> <label for="email" class="col-form-label">Email:</label> <?=$email; ?></li>                            

                            </div>
                            
                            <div class="form-group">
                          <li> <label for="sector" class="col-form-label">Sector:</label> <?=$sector; ?></li>                            

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Location:</label>
                            <input type="text" class="form-control" name="location" value="<?=$location; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" name="name" value="<?=$address; ?>">

                            </div>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" value="Submit">
                        
                        </div>
                        </form>
                    </div>                    
                    </div>
                </div>
                </div>

                <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleLabel">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                     <!-- <img src="images/profile.png" style="width: 72px"/> -->
                        <form method="POST" action="edit_profile.php">
                        <?php
                         $msql1="SELECT * FROM answers WHERE user_id = $userid";                         
                         $mquery1 = mysqli_query($conn,$msql1) or die(mysqli_error($conn));                       
                         
                        ?>
                        <table>
                        <tr>
                        <thead><th>#</th><th>Credits</th><th>Survey Id</th></thead>
                        </tr>
                        <tbody>
                        <?php
                        $n=1;
                        while($rows= mysqli_fetch_assoc($mquery1)){
                            ?>
                            <tr>
                            <td><?=$n++; ?>
                            </td>
                            <td><?=$rows['credits']; ?>                              
                            </td> 
                            <td><?=$rows['survey_id']; ?></td> 
                            </tr>
                      <?php  } ?>
                        
                        </tbody>
                        </table>
                            
                        </div>
                        </form>
                    <button type="button" class="btn btn-primary" data-toggle="" data-target="" data-whatever="">Redeem Points</button>
   
                    </div>
                    
                    </div>
                </div>
                </div>
         
                </div>
            </li>  
            <?php } 
            ?>           
        </ul>
        </div>
       </div>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Personal Information ' + recipient)
        //modal.find('.modal-body input').val(recipient)
        })  
    </script>
    <script>
        $('#example').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Statement of Account ')
        //modal.find('.modal-body input').val(recipient)
        })  
    </script>
</nav>
<?php endif; ?>

<?php if($_SESSION['login_type'] == 2): ?>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div style="width: 100%">

        <div style="width:20%; float: left">
        <a class="navbar-brand" href="#">Company Logo</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
       <div style="width=80%; float: right">
       <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
        </ul>
        <ul class="navbar-nav navbar-light" style="background-color: #fff">
                       
            
            <li class="nav-item dmenu dropdown">
                <!-- <i class="nav-icon fas fa-users"></i> -->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Surveys
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                <a href="./indexg.php?page=new_survey" class="dropdown-item">Add Survey</a>
                <a href="./indexg.php?page=survey_list" class="dropdown-item">List</a>
                <!-- <a href="./indexg.php?page=survey_report" class="dropdown-item">Survey Report</a>
                <a href="./indexg.php?page=survey_widget" class="dropdown-item">Survey List</a> -->
                </div>
            </li>             
            <li class="nav-item">
                <a href="./indexg.php?page=survey_report" class="nav-link nav-survey_report">
                <!-- <i class="nav-icon fas fa-poll"></i> -->
                <p>
                    Survey Report
                </p>
                </a>
            </li>
            <?php 
                if(empty($userid)){ ?>
            <li class="nav-item">
            
                
                <a href="login.php" class="nav-item nav-link">Login</a>    
            </li>            
                <?php }else{
                $usql="SELECT * FROM users WHERE id = $userid";
                $uquery = mysqli_query($conn,$usql) or die(mysqli_error($conn));
                $uresults = mysqli_fetch_array($uquery);
                $myname = $uresults['firstname'];
            ?>
            
            <li class="nav-item dmenu dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Welcome </b><?=$myname; ?>
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Profile</button><br><a href="logout.php" class="btn btn-danger" role="button">Logout</a>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <img src="images/profile.png" style="width: 72px"/>
                        <form method="POST" action="edit_profile.php">
                        <?php
                         $msql="SELECT * FROM users WHERE id = $userid";
                         $mquery = mysqli_query($conn,$msql) or die(mysqli_error($conn));
                         $mresults = mysqli_fetch_array($mquery);
                         $firstname = $mresults['firstname'];
                         $lastname = $mresults['lastname'];
                         $middlename = $mresults['middlename'];
                         $sector = $mresults['sector'];
                         $location = $mresults['location'];
                         $address = $mresults['address'];
                         $email = $mresults['email'];
                        ?>
                            <div class="form-group">
                            <label for="firstname" class="col-form-label">First Name:</label>
                            <input type="text" class="form-control" name="firstname" value="<?=$firstname; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" name="lastname" value="<?=$lastname; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Middle Name:</label>
                            <input type="text" class="form-control" name="middlename" value="<?=$middlename; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Sector:</label>
                            <input type="text" class="form-control" name="lastname" value="<?=$sector; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Location:</label>
                            <input type="text" class="form-control" name="location" value="<?=$location; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" name="name" value="<?=$address; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" name="email" value="<?=$email; ?>">

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" value="Submit">
                        
                            </div>
                        </form>
                    </div>
                   
                    </div>
                </div>
                      
                </div>
            </li>  
            <?php } ?>
           
        </ul>
        </div>
       </div>
    </div>
    <script>
        $('#exampleModal1').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Personal Information ' + recipient)
        //modal.find('.modal-body input').val(recipient)
        })  
    </script>
</nav>
<?php endif; ?>

<?php if($_SESSION['login_type'] == 3): ?>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div style="width: 100%">

        <div style="width:20%; float: left">
        <a class="navbar-brand" href="#">Company Logo</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
       <div style="width=80%; float: right">
       <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
        </ul>
        <ul class="navbar-nav navbar-light" style="background-color: #fff">                      
            <!-- <li class="nav-item"><a class="nav-link" href="#">About Us</a></li> -->       
            <li class="nav-item dmenu dropdown">
                <!-- <i class="nav-icon fas fa-users"></i> -->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Surveys
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">                
                <a href="./indexg.php?page=survey_widget" class="dropdown-item">List</a>                
                </div>
            </li>             
           
            <?php 
                if(empty($userid)){ ?>
            <li class="nav-item">
            
                
                <a href="login.php" class="nav-item nav-link">Login</a>    
            </li>            
                <?php }else{
                $usql="SELECT * FROM users WHERE id = $userid";
                $uquery = mysqli_query($conn,$usql) or die(mysqli_error($conn));
                $uresults = mysqli_fetch_array($uquery);
                $myname = $uresults['firstname'];
            ?>
            
            <li class="nav-item dmenu dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Welcome </b><?=$myname; ?>
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Profile</button><br><a href="logout.php" class="btn btn-danger" role="button">Logout</a>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        <form method="POST" action="edit_profile.php">
                        <?php
                         $msql="SELECT * FROM users WHERE id = $userid";
                         $mquery = mysqli_query($conn,$msql) or die(mysqli_error($conn));
                         $mresults = mysqli_fetch_array($mquery);
                         $firstname = $mresults['firstname'];
                         $lastname = $mresults['lastname'];
                         $middlename = $mresults['middlename'];
                         $sector = $mresults['sector'];
                         $location = $mresults['location'];
                         $address = $mresults['address'];
                         $email = $mresults['email'];
                        ?>
                            <div class="form-group">
                            <label for="firstname" class="col-form-label">First Name:</label>
                            <input type="text" class="form-control" name="firstname" value="<?=$firstname; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" name="lastname" value="<?=$lastname; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Middle Name:</label>
                            <input type="text" class="form-control" name="middlename" value="<?=$middlename; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Sector:</label>
                            <input type="text" class="form-control" name="lastname" value="<?=$sector; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Location:</label>
                            <input type="text" class="form-control" name="location" value="<?=$location; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" name="name" value="<?=$address; ?>">

                            </div>
                            <div class="form-group">
                            <label for="lastname" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" name="email" value="<?=$email; ?>">

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" value="Submit">                        
                        </div>
                        </form>
                    </div>                    
                    </div>
                </div>
                <!-- <a href="logout.php" class="nav-item nav-link">Logout</a>                 -->
                </div>
            </li>  
            <?php 
        } ?>
           
        </ul>
        </div>
       </div>
    </div>
    <script>
        $('#exampleModal2').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Personal Information ' + recipient)
        //modal.find('.modal-body input').val(recipient)
        })  
    </script>
</nav>
<?php endif; ?>