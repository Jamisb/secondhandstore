<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>

<div class="container">
                                        <!-- Header search bar  -->
<?php $this->load->view('includes/headersearch');?>


                                        <!-- Categories card  -->
    <div class="row my-5 mx-auto">
        <div class="card col-md-8 mx-auto rounded shadow-sm bg-white">
            <div class="card-body">
                <h3 class="card-title text-secondary">Categories</h3>
                <hr class="border-black-50">
                <!-- <div class="row mx-auto"> -->
                <div class="card-deck">
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/computers-software">
                            <img src="<?php echo base_url();?>assets/uploads/computer.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="text-success text-center">Computers & Software</h6>
                            </div>
                        </a>

                    </div>
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/instruments-multimedia">
                            <img src="<?php echo base_url();?>assets/uploads/cam.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-success text-center">Instruments & Multimedia</h6>
                            </div>
                        </a>
                    </div>
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/jobs-trainings">
                            <img src="<?php echo base_url();?>assets/uploads/job.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-success text-center">Jobs & Trainings</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="card-deck">
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/pets">
                            <img src="<?php echo base_url();?>assets/uploads/puppy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h6 class="card-title text-success text-center">Pets</h6>
                            </div>
                        </a>
                    </div>
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/home-garden">
                            <img src="<?php echo base_url();?>assets/uploads/home.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h6 class="card-title text-success text-center">Home & Garden</h6>
                            </div>
                        </a>
                    </div>
                    <div class="card border-light">
                        <a style="text-decoration:none" href="<?php echo base_url();?>ads/category/cars-vehicles">
                            <img src="<?php echo base_url();?>assets/uploads/car2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h6 class="card-title text-success text-center">Cars & Vehicles</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                                                <!-- SIDEBAR -->
        <?php $this->load->view('includes/sidebar');?>  
                                                <!-- Latest offers -->
                                              
        <div class="card-body mt-4">
            <div class=" text-success text-center"> 
                <h3>Latest offers</h3>
            </div>
            <hr>
            <div class="card-columns">
                <?foreach ($all_ad as $ad):?>
                    <div class="card shadow-sm">
                        <a style="text-decoration:none" href="<?php base_url();?>ads/offer/<?php echo $ad->id;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $ad->image;?>" class="card-img-top" alt="..."></a>
                        <div class="card-body p-0">
                            <div class="m-3">
                            <a class="text-secondary" style="text-decoration:none" href="<?php base_url();?>ads/offer/<?php echo $ad->id;?>"><h5 class="card-title"><?php echo $ad->title;?></h5></a>
                            <h5 class="text-success"><?php echo $ad->price;?>€</h5>
                            <h6 class="text-success"><?php echo $ad->city;?></h6>
                            <p class="text-muted"><?php echo substr($ad->body,0,50);?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $ad->created_item ;?></small></p>
                            </div>
                        </div>
                    </div> 
                <?endforeach;?>
            </div>
        </div>
    </div>   

                                                <!-- CAROUSSEL -->
    <!-- <div class=" text-success text-center"> 
        <h3>Top categories</h3>
    </div>
    <hr>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active pb-4">
                <div class="card-deck">
                    
                    <?foreach ($first_ad as $ad):?>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img class="card-img-top" src="<?php echo base_url();?>assets/uploads/<?php echo $ad->image;?>">
                                <div class="card-body">
                                    <a class="text-secondary text-success" style="text-decoration:none" href="<?php base_url();?>ads/offer/<?php echo $ad->id;?>"><?php echo $ad->title;?></a>
                                    <h6 class="text-secondary"><?php echo $ad->city;?></h6>
                                    <p class="text-muted"><?php echo substr($ad->body,0,50);?></p>
                                </div>
                            </div>
                        </div>    
                    <?endforeach;?>
                </div>
            </div>
            <div class="carousel-item pb-4">
                <div class="row">
                    <?foreach ($second_ad as $ad):?>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img class="card-img-top" src="<?php echo base_url();?>assets/uploads/<?php echo $ad->image;?>">
                                <div class="card-body">
                                    <a class="text-secondary text-success" style="text-decoration:none" href="<?php base_url();?>ads/offer/<?php echo $ad->id;?>"><?php echo $ad->title;?></a>
                                    <h6 class="text-secondary"><?php echo $ad->city;?></h6>
                                    <p class="text-muted"><?php echo substr($ad->body,0,50);?></p>
                                </div>
                            </div>
                        </div>    
                    <?endforeach;?>  
                </div>
            </div> 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon"  aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
        
</div>
                                        <!-- Footer -->

<?php $this->load->view('includes/footer');?>
