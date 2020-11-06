<!DOCTYPE html>
<html>
<head>
	<title>Myapp-Update</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css';?>">

</head>
<body>  
<div class="navbar ">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
		</div><!--navbar-->
	</div><!--container-->
	<div>
		<div class="container" style="padding-top: 10px">
			<h3>Update User</h3>
			<hr>
			<div class="row">
				<form method="post" name="createUser"action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
						<?php echo form_error("name");?>
					</div><!--form-gropu-->

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
						<?php echo form_error("email");?>
					</div><!--form-gropu-->
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" name="mobile" value="<?php echo set_value('mobile',$user['mobile']);?>" class="form-control">
						<?php echo form_error("mobile");?>
					</div><!--form-gropu-->

					<div class="form-group">
						<button class="btn btn-primary">Update </button>
						<a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">cancel</a>
						
					</div><!--form-gropu-->
					
				</div><!--column-->
				</form>
			</div><!--row-->
		</div><!--container-->
	</div>



<footer class="page-footer">
 <div class="container">
 <div class="row">
 <div class="col-lg-8 col-md-8 col-sm-12">
 
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h6 class="text-uppercase font-weight-bold">Contact</h6>
 
 <br/>dilshaithathsara@gmail.com
 <br/>+ 01 234 567 88
 <br/>+ 01 234 567 89</p>
 </div>
 </div>

 
	<div class="footer-copyright text-center">© 2020 Copyright:
DilshaniThathsara</div>
</footer>

</body>
</html>