<?php 
			if($registered_student->num_rows() > 0)
			{
				foreach($registered_student->result() as $row)
				{
					$id=$row->id;
					$name=$row->name;
					$phone=$row->phone;
					$email=$row->email;
					$branch=$row->branch;
					$degree=$row->degree;
					$college=$row->college;
					$intrenship=$row->intrenship;
					$project=$row->project;
					$area=$row->area;
					$address=$row->address;
				}
			}
?>

	
<br><br><br>

<section id="internship" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                       
                        <h3>Edit Student Profile</h3>
                        <span></span>
					</div>
				</div>
				
				
				<div class="mx-auto col-lg-8">
                    <div class="contact">
			
		
		
		
		
		
		<form name="myform" method="post" action="<?php echo base_url();?>admin/update/<?php echo($id) ?>">
<div class="overlay-contact-h"></div>
    <section id="internship" class="bg-parallax contact-h-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-h-cont">
                     
                      <form>
                        <div class="form-group cl-white">
                          <label for="name"><i class="fa fa-user" style="font-size:24px;color:#0610ED"></i> Name</label>
                          <input type="text" class="form-control" value="<?php echo($name)?>" name="name" pattern="[a-zA-Z\s]+" aria-describedby="nameHelp" title="Only Alphabets Allowed" placeholder="Enter name" required> 
                        </div> 
                       <div class="form-group cl-white">
                          <label for="mobile"><i class="fa fa-mobile-phone" style="font-size:24px;color:#0610ED"></i> Phone Number</label>
                          <input type="text" pattern="[0-9\s]+" minlength="10" maxlength="10" class="form-control" value="<?php echo($phone)?>" name="phone" aria-describedby="phoneHelp" placeholder="Enter Phone Number" title="Numbers Only Allowed" required> 
                        </div>  
                        <div class="form-group cl-white">
                          <label for="exampleInputEmail1"><i class="fa fa-envelope" style="font-size:24px;color:#0610ED"></i> Email address</label>
                          <input type="email" class="form-control" value="<?php echo($email)?>" name="email" aria-describedby="emailHelp" placeholder="Enter email" required> 
                        </div>  
                        <div class="form-group cl-white" >
                          <label for="branch"><i class="fa fa-book" style="font-size:24px;color:#0610ED"></i> Branch</label>
                          <select class="form-control" name="branch" required>
			  <option value="<?php echo($branch)?>"><?php echo($branch)?></option>
			<option value="Computer Science Engineering">Computer Science Engineering</option>
			<option value="Information Science Engineering">Information Science Engineering</option>
			<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
			<option value="OTHER">Other</option>
			</select>
                        </div> 
						  
                        <div class="form-group cl-white">
                          <label for="branch"><i class="fa fa-mortar-board" style="font-size:24px;color:#0610ED"></i> Degree</label>
                          <select class="form-control" name="degree" required>
			  <option value="<?php echo($degree)?>"><?php echo($degree)?></option>
                          <option value="Diplamo">Diplamo</option>
				<option value="B.E/B.Tech">B.E/B.Tech</option>
				<option value="BCA/B.Sc">BCA/B.Sc</option>
				<option value="M.E/M.Tech">M.E/M.Tech</option>
				<option value="MCA/M.Sc">MCA/M.Sc</option>
				<option value="OTHER">Other</option>
			</select>
                        </div> 
			 
			<div class="form-group cl-white">
                          <label for="collegename"><i class="fa fa-university" style="font-size:24px;color:#0610ED"></i> College Name</label>
                          <input type="text" class="form-control" value="<?php echo($college)?>" name="college" aria-describedby="collegeHelp" placeholder="Enter College Name" required> 
                        </div> 
                        <div class="form-group cl-white">
                         <input type="checkbox" id="intrenship" name="intrenship" value="YES" <?php if($intrenship=="YES")echo("checked")?>> INTERNSHIP<br>
			<input type="checkbox" id="project" name="project" value="YES" <?php if($project=="YES")echo("checked")?>> PROJECT 
                        </div> 
			<div class="form-group cl-white">
                          <label for="branch"><i class="fa fa-gears" style="font-size:24px;color:#0610ED"></i> Area of Internship/Project</label>
                          <select class="form-control" id="area" name="area" required>
			               <option value="<?php echo($area)?>"><?php echo($area)?></option>
                           <option value="Web Application Development">1. Web Application Development</option>
			            	<option value="Wordpress Plugin Development">2. Wordpress Plugin Development</option>
			            	<option value="Wordpress Theme Development">3. Wordpress Theme Development</option>
			            	<option value="Block Chain Development">4. Block Chain Development</option>
			            	<option value="Bootstrap Framework">5. Bootstrap Framework</option>
			</select>
                        </div>
			
                        <div class="form-group cl-white">
                          <label for="message"><i class="fa fa-home" style="font-size:24px;color:#0610ED"></i> Address</label>
                          <input type="text" class="form-control" value="<?php echo($address)?>" name="address" required>
                        </div>  
                        <div class="form-group cl-white">
                        <button type="submit" class="btn-primary" role="button" name="update" value="update">UPDATE </button> 
                        </div>
                        <div id="text"></div>
             
                      </form>
	

					 </div>
                </div>

		 	</div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
 </section>
 



			</section>



