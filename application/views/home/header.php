
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <title>Manyathy Business Solutions</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/mbs.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700|Muli:400,600,700" rel="stylesheet">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <!-- icofont icon -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/mbs.png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/icofont.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/animate.css">
    <!-- rotate headlines css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cd-headline.css">
    <!-- venobox -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/venobox.css" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owl.theme.default.min.css">
    <!-- Style CSS -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

   

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>">
				<img src="<?php echo base_url();?>assets/img/mbstest.png" alt="" title="Manyathy" style="border-radius:5px 5px 5px 5px;height=70px;">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                MENU
               <!-- <i class="fa fa-bars"></i>-->
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
               
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#ourservices">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#about">About Us</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#ourteam">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#training">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#aptitude">Aptitude</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>internship">Internship</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#contact">Contact</a>
                    </li>
                    <?php if($this->session->userdata('useremail') != '') echo '<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="'.base_url().'admin">Dashboard</a>
                    </li>'?>
                    
                </ul>
                
            </div>
        </div>
        
    </nav>
    <!-- END NAVBAR -->
	