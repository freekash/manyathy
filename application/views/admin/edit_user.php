<?php 
			if($registered_user->num_rows() > 0)
			{
				foreach($registered_user->result() as $row)
				{
					$id=$row->id;
					$name=$row->user_name;
					$email=$row->user_email;
				}
			}
?>

	
<br><br><br>

<section id="internship" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                       
                        <h3>Edit User Profile</h3>
                        <span></span>
					</div>
				</div>
				
				
				<div class="mx-auto col-lg-8">
                    <div class="contact">
			
		
		
		
		
		
		<form name="myform" method="post" action="<?php echo base_url();?>admin/update_user/<?php echo($id) ?>">
<div class="overlay-contact-h"></div>
    <section class="bg-parallax contact-h-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-h-cont">
                     
             
                        <div class="form-group cl-white">
                          <label for="name"><i class="fa fa-user" style="font-size:24px;color:#0610ED"></i> Name</label>
                          <input type="text" class="form-control" value="<?php echo($name)?>" name="name" pattern="[a-zA-Z\s]+" aria-describedby="nameHelp" title="Only Alphabets Allowed" placeholder="Enter name" required> 
                        </div> 
                         
                        <div class="form-group cl-white">
                          <label for="exampleInputEmail1"><i class="fa fa-envelope" style="font-size:24px;color:#0610ED"></i> Email address</label>
                          <input type="email" class="form-control" value="<?php echo($email)?>" name="email" aria-describedby="emailHelp" placeholder="Enter email" required> 
                        </div>  
                        <div class="form-group cl-white">
                          <label><i class="fas fa-key" style="font-size:24px;color:#0610ED"></i> New Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter New Password" required> 
                        </div> 
                         <div class="form-group cl-white">
                          <label><i class="fas fa-key" style="font-size:24px;color:#0610ED"></i> Re-Type Password</label>
                          <input type="password" class="form-control" name="confirmpassword" placeholder="Re-Type Password" required> 
                        </div> 
                        
          
                        <div class="form-group cl-white">
                        <button type="submit" class="btn-primary" role="button" name="update" value="update">UPDATE </button> 
                        </div>
                        
             
                      </form>
	

					 </div>
                </div>

		 	</div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
 </section>
 



			</section>



