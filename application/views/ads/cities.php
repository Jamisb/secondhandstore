<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>

<div class="container">
                                        <!-- Header search bar  -->
    <?php $this->load->view('includes/headersearch');?>


                                        <!-- Categories card  -->
    <div class="row my-5 mx-auto">
        <div class="card col-md-10 mx-left rounded shadow-sm bg-white">
            <div class="card-body">
                <h3 class="card-title text-success">Ads found: <?php echo count($offers);?> <small class="text-black-50"> <?php echo $this->uri->segment(3);?></small></h3>
                <hr class="border-black-50">
                <!-- <div class="row mx-auto"> -->
                <?foreach ($offers as $offer):?>
                <a class="text-secondary" style="text-decoration:none;" href="<?php base_url();?>/secondhandstore/ads/offer/<?php echo $offer->id;?>">
                <div class="card-deck">
                    <div class="card mb-3 shadow-sm" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img class="card-img" style="object-fit:cover ;object-position: center;width: 200px;height: 200px;" src="<?php echo base_url();?>assets/uploads/<?php echo $offer->image;?>" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title mb-1"><?php echo $offer->title;?></h5>
                                    <h6 class="card-title text-success"><?php echo $offer->price;?>€</h6>
                                    <h6 class="card-text my-0"><?php echo $offer->city;?></h6>
                                    <h6 class="card-text mt-0"><small class="text-muted"><?php echo $offer->created_item ;?></small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

                <?endforeach;?>
                
                <!-- <div class="card-deck">
                  
                </div> -->
            </div>
        </div>
                                                <!-- SIDEBAR -->
        <!-- <?php $this->load->view('includes/sidebar');?>   -->

                                                <!-- Latest offers 2 -->
                                        
        
    </div>
</div>
                                        <!-- Footer -->

<?php $this->load->view('includes/footer');?>
