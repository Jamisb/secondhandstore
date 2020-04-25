<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>

<div class="container">
                                        <!-- Header search bar  -->
<?php $this->load->view('includes/headersearch');?>

    <div class="row mb-4">
        <div class="card mt-4 col-md-8 mx-auto rounded-0">
            <div class="card-body">
                <h3 class="card-title text-muted">Categories</h3>
                <hr>
                <div class="row mx-auto">
                    <div class="col-md-4">
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/computer.jpg" alt="" style="width:100%;height:140px" class="card-img img-fluid">
                                
                            </div>
                            <div class="text-center mb-4">
                                <a href="#">Electronics</a>
                            </div> 
                        </div>
                    </div>    
                    <div class="col-md-4">
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/camera.jpg" style="width:100%;height:140px" alt="" class="card-img-top img-fluid">
                            </div> 
                            <div class="text-center mb-4">
                                <a href="#">Leisure</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">    
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/job.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                            </div>
                            <div class="text-center mb-4">
                                <a href="#">Jobs</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">     
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/animal.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                            </div>
                            <div class="text-center mb-4">
                                <a href="#">Animals</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">     
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/house.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                            </div>
                            <div class="text-center mb-4">
                                <a href="#">Houses</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4"> 
                        <div class="card mr-1 mt-2 bg-white">
                            <div class="card-body text-center" >
                                <img src="<?php base_url();?>assets/uploads/car.jpg" style="width:100%;height:140px"  alt="" class="card-img img-fluid">
                            </div>
                            <div class="text-center mb-4">
                                <a href="#">Vehicles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                                <!-- SIDEBAR -->
        <?php $this->load->view('includes/sidebar');?>  
    </div>   
    <div class=" text-muted text-center"> 
        <h3>Latest offers</h3>
    </div>
    <hr>

                                                <!-- CAROUSSEL -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active pb-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/animal.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Animals</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/house.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Houses</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="<?php base_url();?>assets/uploads/camera.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                <a href="#">Multimedia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item pb-4">
                <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <img src="<?php base_url();?>assets/uploads/computer.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                    <a href="#">Computers</a>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <img src="<?php base_url();?>assets/uploads/job.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                    <a href="#">Jobs</a>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">
                            <div class="card mr-1 bg-light">
                                <div class="card-body text-center">
                                    <img src="<?php base_url();?>assets/uploads/car.jpg" style="width:100%;height:140px" alt="" class="card-img img-fluid">
                                    <a href="#">Vehicles</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        
</div>
                                        <!-- Footer -->

<?php $this->load->view('includes/footer');?>
