
     
<br><br><br><br>
    
    
    <!-- Registered Students -->
          <div id="registered" class="card mb-3">
            <div class="card-header">
              <i class="far fa-id-card"></i>
              Admin (<?php echo($registered_users->num_rows());?>) </div>
            <div class="card-body">
              <div class="table-responsive">
       
  <table class="table table-bordered" id="dataTable">
  <thead class="thead-dark">
        <tr>

    		 <th>User Id</th>
			<th>Name</th>
            <th>E-mail</th>	
            <th>Options</th>												
        </tr>
        </thead>

       
        <tr>
<!--here showing results in the table -->
           <?php 
			if($registered_users->num_rows() > 0)
			{
				foreach($registered_users->result() as $row)
				{
				?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->user_name; ?></td>
					<td><?php echo $row->user_email; ?></td>
					<td>
					<a href="<?php echo base_url()?>admin/deleteuser/<?php echo $row->id; ?>"><button class="btn-danger">Delete</button></a></td>
				 </tr>
					
					
					
				<?php	
				}
			}
			else
			{
			?>
				<tr>
					<td colspan="3">No Data Found</td>
				 </tr>
				 <?php	
			}
			
			
			?> 
            
            
        </tr>

       

    </table>
        </div>
        
            </div>
          </div>
    
    
    
     <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add New User</div>
        <div class="card-body">
          <form method="post" action="<?php echo base_url(); ?>admin/add_user">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required" autofocus>
                    <label for="name">Name</label>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="required">
                <label for="email">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmpassword">Confirm Password</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" role="button" name="adduser" value="Add User" />
          </form>
          
        </div>
      </div>
    </div>