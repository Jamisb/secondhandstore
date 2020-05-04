<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-center text-success mt-3">Register</h4>
            <div class="mx-auto" style="margin: 4em 0 6em 0;width:25em;">
                <h6 class="card-heading text-default text-muted">Create a new account, it's easy and quick!</h6>
                <!-- Form Validation -->
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

            <!-- FORM -->
                <form action="<?echo site_url('user/register');?>" method="post">
                    <div class="form-group input-group style="height:3em;"">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="height:3em;"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="fname" class="form-control" style="height:3em;" placeholder="First name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="height:3em;"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="lname" class="form-control" style="height:3em;" placeholder="Last name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="height:3em;"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;height:3em;">
                            <option selected>+385</option>
                        </select>
                        <input name="phone" class="form-control" style="height:3em;" placeholder="Phone number" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group " style="height:3em;">
                        <div class="input-group-prepend" >
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <input name="city" class="form-control" style="height:3em;" placeholder="City" type="text">

                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="height:3em;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" style="height:3em;" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="height:3em;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" style="height:3em;" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <!-- <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Repeat password" type="password">
                    </div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block rounded-0" style="height:3em;"> Create Account  </button>
                    </div> <!-- form-group// -->     
                    <p class="text-center">Have an account already? <a href="<?php echo site_url('user/login'); ?>">Log In</a> </p>                                                                 
                </form>
            </div>
        </div>
    </div>
</div>    
<?php $this->load->view('includes/footer');?>
