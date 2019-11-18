
   
    <div id="wrapper">

      <!-- Sidebar -->
      
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#registered">
            <i class="far fa-id-card"></i>
            <span>Registered Students</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact-form">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact Form</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#sendmail">
            <i class="fa fa-envelope"></i>
            <span>Send Mail</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

         

         

          <!-- Registered Students -->
          <div id="registered" class="card mb-3">
            <div class="card-header">
              <i class="far fa-id-card"></i>
              Registered Students (<?php echo($registered_students->num_rows());?>) </div>
            <div class="card-body">
              <div class="table-responsive">
       
  <table class="table table-bordered" id="dataTable">
  <thead class="thead-dark">
        <tr>

    		 <th>User Id</th>
			<th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Branch</th>
            <th>Degree</th>
            <th>College</th>
            <th>Internship</th>
            <th>Project</th>
            <th>Area</th>
            <th>Address</th>
            <th>Options</th>													
        </tr>
        </thead>

       
        <tr>
<!--here showing results in the table -->
           <?php 
			if($registered_students->num_rows() > 0)
			{
				foreach($registered_students->result() as $row)
				{
				?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->branch; ?></td>
					<td><?php echo $row->degree; ?></td>
					<td><?php echo $row->college; ?></td>
					<td><?php echo $row->intrenship; ?></td>
					<td><?php echo $row->project; ?></td>
					<td><?php echo $row->area; ?></td>
					<td><?php echo $row->address; ?></td>
					<td><a href="<?php echo base_url()?>admin/edit/<?php echo $row->id; ?>"><button class="btn-primary">Edit</button></a>
					<a href="<?php echo base_url()?>admin/sendmailstudent/<?php echo $row->id; ?>"><button class="btn-success">E-Mail</button></a>
					<a href="<?php echo base_url()?>admin/deletestudent/<?php echo $row->id; ?>"><button class="btn-danger">Delete</button></a></td>
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
          
          
          
          
           <!-- Contact Form -->
          <div id="contact-form" class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Contact Form (<?php echo($display_contact_form->num_rows());?>)</div>
            <div class="card-body">
              <div class="table-responsive">
       
  <table class="table table-bordered">
  <thead class="thead-dark">
        <tr>

    		 <th>User Id</th>
			<th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Message</th>
            <th>Options</th>																
        </tr>
        </thead>

       
        <tr>
<!--here showing results in the table -->
           <?php 
			if($display_contact_form->num_rows() > 0)
			{
				foreach($display_contact_form->result() as $row)
				{
				?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->message; ?></td>
					<td><a href="<?php echo base_url()?>admin/sendmailform/<?php echo $row->id; ?>"><button class="btn-success">E-Mail</button></a><a href="<?php echo base_url()?>admin/deleteform/<?php echo $row->id; ?>"><button class="btn-danger">Delete</button></a></td>
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

       
       <div id="sendmail" class="card mb-3">
            <div class="card-header">
              <i class="fa fa-envelope"></i>
              Send Mail</div>
                
                <!-- end col -->
				<div class="mx-auto col-lg-8">
                    <div class="contact"><br>
                        <form name="mail" id="sendmail" action="<?php echo base_url(); ?>admin/sendmail" method="post" class="form" >
                            <div class="row">
                              <div class="form-group col-md-12">
                                    <i class="fa fa-user">Name</i>
                                    <input type="text" name="name" class="form-control" value="Manyathy Business Solutions">
                                    <span class="input_bar"></span>
                                </div>
                               <div class="form-group col-md-12">
                                    <i class="fa fa-user">From</i>
                                    <input type="email" name="from" class="form-control" value="internship@manyathy.com">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <i class="fa fa-user">To</i>
                                    <input type="email" name="to" class="form-control">
                                    <span class="input_bar"></span>
                                </div>
                               
                                <div class="form-group col-md-12">
                                   <i class="fa fa-sticky-note">Subject</i>
                                    <input type="text" name="subject" class="form-control">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-12">
                                   <i class="fa fa-envelope">Body</i>
                                    <textarea rows="6" name="body" class="form-control" id="message" placeholder="Your Message Here ..."></textarea>
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-12 mb0 text-center">
                                    <div class="actions">
                                        <button type="submit" class="btn-primary" role="button" name="submit" value="submit" >SUBMIT </button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END COL -->
            </div>
            <!--- END ROW -->
        </div>
       
       
        </div>
        <!-- /.container-fluid -->
</div>