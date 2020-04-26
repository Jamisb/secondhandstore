<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-default">Create a posting</h4>
            <p class="card-heading text-default text-muted">Put something for sell! it's quick and easy!</p>
            <!-- <div class="card bg-light"> -->
                <form class="pt-3">
                    <div class="form-group ">
                    <label for="body"> Chose region: </label>
                        <select name="city" class="form-control" >
                            <option selected disabled>Region</option>
                            <option value="115" >Helsinki</option>
                            <option value="115" >Tampere</option>
                            <option value="114" >Oulu</option>
                            <option value="106" >Jyväskylä</option>
                            <option value="113" >Rovaniemi</option>
                            <option value="103" >Kuusamo</option>
                            <option value="117" >Espoo</option>
                            <option value="104" >Vantaa</option>
                            <option value="107" >Tornio</option>
                            <option value="120" >Pori</option>
                        </select>
                    </div>
                    <div class="form-group " >
                    <label for="body"> Chose Category: </label>
                        <select name="cat" class="form-control" >
                            <option  selected disabled>Categories</option>
                            <option value="Home and indoors">Home and fourniture</option>
                            <option value="Electronics">Computers and electronics</option>
                            <option value="Leisure">Leisure and hobbies </option>
                            <option value="Animals and garden">Pets and garden</option>
                            <option value="Vehicles">Vehicles</option>
                            <option value="Jobs">Jobs and trainings</option>
                        </select>
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                    <label for="body"> Item title: </label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                        <label for="body"> Information about item: </label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <label for="photo"> Add photo: </label>
                        <input type="file" name="photo" class="form-control" >
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block"> Submit </button>
                    </div>                                                                
                </form>
        </div>
    </div>
</div>  
<?php $this->load->view('includes/footer');?>

