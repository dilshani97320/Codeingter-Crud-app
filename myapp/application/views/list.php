<!DOCTYPE html>
<html>
<head>
	<title>Myapp-View</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css';?>">

</head>
<body>  
<div class="navbar ">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
		</div><!--navbar-->
	</div><!--container-->


	<div class="head">
		<h1>WELCOME</h1>
	</div>
	
		<div class="container" style="padding-top: 10px">

          <div class="row">
          	<div class="col-md-6">
          		

          		<?php
                   $success=$this->session->userdata('success');
                   if($success !=""){
                   ?>
                   <div class="alert alert-success"><?php echo $success;?></div> 
                      
                   <?php
               }
               ?>
                  <?php
                   $failure=$this->session->userdata('failure');
                   if($failure !=""){
                   ?>
                   <div class="alert alert-success"><?php echo $failure;?></div> 
                   <?php
               }
           
          		?>
          	</div>
             </div>

			<div class="row">
				<div class="col-md-12">
			<div class="row">
			<div class="col-6"><h3>View User</h3></div>
			<div class="col-12 text-right">
				<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary ">Create</a>
			</div>
		</div>
		<hr>
	</div>

		</div>
			
			<div class="row">
				<div class="col-md-12">
					
					<table class="table table-striped">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>

                          <?php if(!empty($users)){ foreach($users as $user){?>
                    
                      <tr>
                      	<td><?php echo $user['user_id']?></td>
                      	<td><?php echo $user['name']?></td>
                      	<td><?php echo $user['email']?></td>
                      	<td><?php echo $user['mobile']?></td> 
                      	<td>
                      		<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary"> Update</a> 
                      	</td>
                      	<td>
                      		<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger"> Delete</a> 
                      	</td>
                      </tr>
                      <?php } } else { ?>

                        <td colspan="5">Record not found</td>
                      <?php } ?>

					</table>
				</div><!--col-->
			</div><!--row-->
			
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