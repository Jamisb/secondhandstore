<!-- NAV BAR -->
<nav class="navbar shadow-sm navbar-expand-md navbar-light bg-white sticky-top">
  
    <a class="navbar-brand ml-5" href="<?php echo site_url(''); ?>"><img src="<?php echo site_url(''); ?>assets/uploads/logo1.png"></a>

    <div class="collapse navbar-collapse mr-5" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url(''); ?>">  Home <span class="sr-only">(current)</span></a>
        </li> -->

    <!-- Login test -->

        <?php 
              if(!$this->session->userdata('logged')):
        ?>
            <a class="nav-link" href="<?php echo site_url('user/login'); ?>"> Log In </a>

        <!-- <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login/Register</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="<?php echo site_url('user/register'); ?>"> Register </a>
            <a class="nav-link" href="<?php echo site_url('user/login'); ?>"> Log In </a>
          </div>
        </li> -->
        <?php 
          else:
        ?>
  <!-- User logged print user infos -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('ads/add'); ?>"> 
            <?php 
              echo $this->session->userdata('fname');
            ?> 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('user/logout'); ?>"> Logout </a>
        </li>

        <?php 
          endif;
        
        ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('contact/send'); ?>"> Contact </a>
        </li>
        <li class="nav-item ml-2">
          <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo site_url('ads/add'); ?>">Post an ad</a>
        </li>

        
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form> -->
    </div>

</nav>