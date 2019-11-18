<br><br>
     <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form name="myform" method="post" action="<?php echo base_url();?>admin/login_validation">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="useremail" class="form-control" autofocus>
                <label >Email address</label>
                <span class="text-danger"><?php echo form_error('useremail'); ?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="userpassword" class="form-control" autocomplete>
                <label >Password</label>
                <span class="text-danger"><?php echo form_error('userpassword'); ?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
             <input type="submit" class="btn btn-primary btn-block" role="button" name="login" value="Login" />
             <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
          </form>
          <div class="text-center">
            <a class="d-block small" href="<?php echo base_url(); ?>admin/forgot_pass">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    
   
                       
                       