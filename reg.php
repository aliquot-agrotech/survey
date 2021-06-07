<?php 
include 'db_connect.php';
//include 'header.php';
//include 'megamenu.php';
?>

<style>

.parallax {
  /* The image used */
     /* background-image: url("images/img_parallax.jpg"); */
  /* Set a specific height */
  min-height: 100px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.wbg{
	background-image: url("images/wbg.png");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed wbg">
<div class="wrapper">

<div class="row">    
   <div class="col-md-12"> 
          <div class="col-md-6 col-sm-6 " style="float:right">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-poll-h"></i></span> -->
              <form action="register_user.php" method="POST">
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-left">
						<b class="text-muted">Personal Information</b>

						
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Middle Name</label>
							<input type="text" name="middlename" class="form-control form-control-sm"  value="<?php echo isset($middlename) ? $middlename : '' ?>">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Contact No.</label>
							<input type="text" name="contact" class="form-control form-control-sm" required value="<?php echo isset($contact) ? $contact : '' ?>">
						</div>

						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea name="address" id="" cols="30" rows="4" class="form-control" required><?php echo isset($address) ? $address : '' ?></textarea>
						</div>
					</div>
					<div class="col-md-6" style="float: right">
						<b class="text-muted">System Credentials</b>						
							<input type="hidden" name="type" value="3">	

						<div class="form-group">
						<label for="sector">Choose a sector:</label>						
						<select name="sector" id="sector" class="form-control form-control-sm" required>
						<option value="">--select sector--</option> 
						<?php
						$catsql= "SELECT * FROM categories";
						$catquery= mysqli_query($conn,$catsql) or die(mysqli_error($conn));
					    while($row = mysqli_fetch_array($catquery))	{ ?>
						<option value='sector'><?=$row['name'];?></option>";
						<?php }
						?> 
						</select>
						</div>					
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email" required value="<?php echo isset($email) ? $email : '' ?>">
							<small id="#msg"></small>
						</div>

						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control form-control-sm" name="password" <?php echo isset($id) ? "":'required' ?>>
							<small><i><?php echo isset($id) ? "Leave this blank if you dont want to change you password":'' ?></i></small>
						</div>

						<div class="form-group">
							<label class="label control-label">Confirm Password</label>
							<input type="password" class="form-control form-control-sm" name="cpass" <?php echo isset($id) ? 'required' : '' ?>>
							<small id="pass_match" data-status=''></small>
						</div>

					</div>
				</div>

				<hr>

				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button type="submit" name="submit" class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'indexg.php?page=user_list'">Cancel</button>
				    <p><b>Have an account?</b><a href="login.php">Sign In Here</a></p>
				</div>

			</form>
           
            </div>
         
          </div>     
            
    </div>  
    </div>
    </div>   
</body>