<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-success">Create a posting</h4>
            <h6 class="card-heading text-default text-muted">Put something for sell, it's quick and easy!</h6>
            <!-- Login test on login page  -->
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <?php if($this->session->flashdata('fail'))
                {
                    echo '<div class="alert alert-danger">'.$this->session->flashdata('fail').'</div>';
                }
            ?>
            <!-- <div class="card bg-light"> -->
                <form action="#" method="post" class="pt-3" enctype="multipart/form-data">
                    <div class="form-group " >
                        <label for="cat"> Choose Category: </label>
                            <select name="category" class="form-control" >
                                <option  selected disabled>Categories</option>
                                <option value="home-garden">Home & Garden</option>
                                <option value="computers-software">Computers & Software</option>
                                <option value="instruments-multimedia">Instruments & Multimedia </option>
                                <option value="pets">Pets</option>
                                <option value="cars-vehicles">Cars & Vehicles</option>
                                <option value="jobs-trainings">Jobs & Trainings</option>
                            </select>
                    </div> <!-- form-group// --> 
                    <div class="form-group ">
                    <label for="region"> Choose region: </label>
                        <select name="city" class="form-control" >
                            <option selected disabled>Region</option>
                            <option value="Helsinki" >Helsinki</option>
                            <option value="Tampere" >Tampere</option>
                            <option value="Oulu" >Oulu</option>
                            <option value="Jyväskylä" >Jyväskylä</option>
                            <option value="Rovaniemi" >Rovaniemi</option>
                            <option value="Kuusamo" >Kuusamo</option>
                            <option value="Espoo" >Espoo</option>
                            <option value="Vantaa" >Vantaa</option>
                            <option value="Tornio" >Tornio</option>
                            <option value="Pori" >Pori</option>
                        </select>
                    </div><!-- form-group// --> 
                    <div class="form-group">
                    <label for="body"> Title: </label>
                        <input name="title" type="text" class="form-control" placeholder="ex: Computer">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                    <label for="body"> Price: </label>
                        <input name="price" type="text" class="form-control" placeholder="ex: 50€">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <label for="body"> Information about item: </label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <label for="photo"> Add photo: </label>
                        <input name="photo" type="file" class="form-control" >
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block"> Submit </button>
                    </div>                                                                
                </form>
        </div>
    </div>
</div>  
<?php $this->load->view('includes/footer');?>

