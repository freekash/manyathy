<?php 
			if($email->num_rows() > 0)
			{
				foreach($email->result() as $row)
				{
					$mail=$row->email;
				}
			}
?>

<br><br><br><br>

 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title fadeInUp">
                        <h3>Send Mail</h3>
                        <span></span>
                       
                    </div>
                </div>
                <!-- end col -->
				<div class="mx-auto col-lg-8">
                    <div class="contact">
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
                                    <input type="email" name="to" class="form-control" value="<?php echo($mail) ?>">
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