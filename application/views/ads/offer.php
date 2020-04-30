<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>

<div class="container">

                                        <!-- Header search bar  -->
<?php $this->load->view('includes/headersearch');?>

                                        <!-- Offer card  -->

    <div class="row">
        <div class="card mt-4 col-8 mx-auto border-0 rounded-0">
            <div class="card border shadow-sm mb-4">
                <div>
                    <img src="<?php echo base_url();?>assets/uploads/<?php echo $offer->image;?>" class="card-img img-fluid rounded-0"> 


                    <div class="float-right" style="position:absolute ; right:20px; top:35%">
                        <button type="button" class="btn"><i class="fas fa-chevron-right" style="font-size: 2em; color: white;"></i></button>
                    </div>

                    <div class="float-left" style="position:absolute ; left:20px; top:35%">
                        <button type="button" class="btn"><i class="fas fa-chevron-left" style="font-size: 2em; color: white;"></i></button>
                    </div>
                </div>              
                <div class="card m-3 border-0">
                    <h3 class="text-success"><?php echo $offer->title;?></h3>
                    <h5 class="text-secondary"><?php echo $offer->price;?>€</h5>
                    <p class="card-text"><small class="text-muted"><?php echo $offer->category;?></small></p>
                    <p class="card-text"><small class="text-muted"><?php echo $offer->created_item;?></small></p>
                </div>
                
            </div>
                <div class="mb-4">
                    <hr>
                    <p class="h4 ml-4 mt-2 text-success">Description</p>
                    <p class="card-text text-secondary ml-4 mt-2"><?php echo $offer->body;?></p>
                </div>

        </div>

                                        <!-- User information card  -->
        <div class="card col-4 border-0 mx-auto m-4">
            <div>
            
                <div class="card-body border mx-auto rounded bs-white shadow-sm">
                    <h3 class="text-success my-3 text-center">Contact details</h3>
                    <hr>
                    <p><span class="text-secondary"><i class="fa fa-user text-success"></i> <?php echo $offer->firstname.' '.$offer->lastname;?></span></p>
                    <p><span class="text-secondary"><i class="fa fa-phone text-success"></i> <?php echo $offer->phone;?></span></p>
                    <p><span class="text-secondary"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $offer->city;?></span></p>
                </div>
            </div>
        </div>
    </div>   
        
</div>
                                        <!-- Footer -->

<?php $this->load->view('includes/footer');?>
