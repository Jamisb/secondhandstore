<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-center text-success mt-3">Login / Register</h4>
            <div class="mx-auto" style="margin: 4em 0 6em 0;width:25em;">
                <h6 class="card-heading text-default text-muted">Sing into your account to sell your stuff!</h6>
                <!-- Login test on login page  -->
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                <?php if($this->session->flashdata('fail'))
                    {
                        echo '<div class="alert alert-danger">'.$this->session->flashdata('fail').'</div>';
                    }
                ?>
                    <!-- Login form  -->
                <form action="<?php echo site_url('user/login')?>" method="post" >
                    <div class="form-group input-group shadow-sm" style="height:3em;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" style="height:3em;" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                
                    <div class="form-group input-group shadow-sm" style="height:3em;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" style="height:3em;" placeholder="Password" type="password">
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block rounded-0" style="height:3em;"> Login </button>
                        <a class="btn btn-outline-success btn-block rounded-0 py-2" style="height:3em;" href="<?php echo site_url('user/register'); ?>"> Register </a>
                    </div> <!-- form-group// -->      
                    <p class="text-center mt-0">Forgot password?<a href="<?php echo site_url('contact/send');?>"> Let us know</a></p> 
            
                                                                                    
                </form>
            </div>
        </div>
    </div>
</div>    
<?php $this->load->view('includes/footer');?>

