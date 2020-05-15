<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-default">Say hello to us!</h4>
            <p class="card-heading text-default text-muted">You can email us if something went wrong for you here!</p>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <?php if($this->session->flashdata('success'))
                {
                    echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
                }
            ?>
            <!-- <div class="card bg-light"> -->
                <form class="pt-3" action="<?php echo site_url('contact/send'); ?>" method="post">
                    <div class="form-group">
                    <label for="name"> Name: </label>
                        <input type="text" name="name" class="form-control" placeholder="First and last name">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                    <label for="email"> Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                        <label for="body"> Message: </label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block"> Send </button>
                    </div>                                                                
                </form>
        </div>
    </div>
</div>  
<?php $this->load->view('includes/footer');?>

