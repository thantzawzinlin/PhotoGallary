<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <meta charset="<?php bloginfo('charset');?>">
   
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title><?php bloginfo('title')?></title>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-primary" href="#">PhotoGallary Theme</a>


            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->

            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input class="form-control mr-sm-2" name= "s" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </nav>
        
          <div class="row mt-4">
            <div class="col-md-3 mb-3 ">
                
               <!-- <li class="list-group-item"> -->
              
                   <?php if(is_active_sidebar('sidebar')) : ?>
                        
                            <?php dynamic_sidebar('sidebar'); ?>
                        
                   <?php endif; ?>
               
             <!-- </li>    -->
                
            </div>
            <div class="col-md-9">
                <div class="row">