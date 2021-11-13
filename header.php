<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <?php 
 
 wp_head();?>

  </head>


<body <?php body_class();?>>



<header>
    <div class="container-fluid top-header">
        <div class="row">
            <div class="col-9 d-flex justify-content-center">
                <span> kesihatan anda keutamaan kami </span>
            </div>
            <div class="col-3">
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#"><img src="/src/Clinic-Logo (1).png" width="250px"></a> -->
      <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex ms-auto">
      <?php

wp_nav_menu( array(

    'theme_location'    => 'header-menu',

    'depth'             => 2,

    'container'         => 'div',

    'container_class'   => 'header-menu collapse navbar-collapse',

    'container_id'      => 'navbarSupportedContent',

    'menu_class'        => 'header-menu-ul navbar-nav  d-flex justify-content-between align-items-center',

    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

    'walker'            => new WP_Bootstrap_Navwalker(),

));

?>       
          <span>
            <button type="button" class="btn btn-danger">EN</button>
          </span>
      </div>
    </div>
  </nav>

  