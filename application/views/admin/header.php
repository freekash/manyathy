<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

   <link rel="icon" href="<?php echo base_url();?>assets/img/mbs.png">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url();?>dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>dashboard/css/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">

       <a href="<?php echo base_url();?>">
				<img src="<?php echo base_url();?>assets/img/mbstest.png" alt="" title="Manyathy" style="border-radius:5px 5px 5px 5px;height=70px;">
            </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
       <?php if($this->session->userdata('useremail') != '')
		{
      echo '<form class="d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i> '
           .$this->session->userdata("username").
          ' </a>
		  
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <a class="dropdown-item" href="'.base_url().'admin/users"><i class="fa fa-plus"></i> Add Or Remove Users</a>
            <a class="dropdown-item" href="'.base_url().'admin/edit_profile"><i class="fas fa-key"></i> Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> Logout</a>
          </div>
      </form>';
		}
       ?>
       
       
       
    </nav>