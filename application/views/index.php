<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>

<div class="container">
<?php $this->load->view('includes/headersearch');?>
    <div class="row">
        <div class="card mt-4 col-md-8 mx-auto rounded-0">
            <div class="card-body">
                <h3 class="card-title text-muted">Categories</h3>
                <hr>
                <div class="row mx-auto">
                    <div class="col-md-4">
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/computer.jpg" alt="" style="width:100%;height:140px" class="card-img img-fluid">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/camera.jpg" style="width:100%;height:140px" alt="" class="card-img-top img-fluid">
                                <a href="#">Leisure</a>
                            </div> 
                        </div>
                    </div>    
                    <div class="col-md-4">    
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/job.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Jobs</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">     
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/animal.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Animals</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">     
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/house.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Houses</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4"> 
                        <div class="card mr-1 mt-2 bg-light">
                            <div class="card-body text-center" >
                                <img src="<?php base_url();?>assets/uploads/car.jpg" style="width:100%;height:140px"  alt="" class="card-img img-fluid">
                                <a href="#">Vehicles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('includes/sidebar');?>  
    </div>
</div>
<?php $this->load->view('includes/footer');?>
