<div class="container my-4">

    <div class="card text-center shadow-sm bg-white">
        <div class="card-body mx-auto">
            <form method="post" action="<?php echo base_url();?>ads/find/" class="form-inline ">
                <div class="form-group mx-2">
                    <input type="text" style="width:19em; text-align: center" placeholder="What are you looking for?" name="searchField" class="form-control bg-light border-light">
                </div>
                
                <div class="form-group mx-2" >
                    <select name="header_category" class="form-control bg-light border-light" style="width:20em">
                        <option  selected disabled>Categories</option>
                        <option value="computers-software">Computers & Software</option>
                        <option value="instruments-multimedia">Instruments & Multimedia</option>
                        <option value="pets">Pets</option>
                        <option value="home-garden">Home & Garden</option>
                        <option value="cars-vehicles">Cars & Vehicles</option>
                        <option value="jobs-trainings">Jobs & Trainings</option>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <select name="header_city" class="form-control bg-light border-light" style="width:15em" >
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
                </div>
                <div class="form-group mx-2">
                    <button type="submit" style="width:6em; text-align: center;" name="submit" class="btn btn-success text-light">Search</button>
                </div>
            </form>

        </div>
    </div>
</div>