<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body <?php body_class(); ?>>
    <header class="up-head container-fluid">
      <div class="logo-bp col-md-2">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?><span class="dott">.</span> </a></h1>
      </div>
      <nav class="navbar navbar-default col-md-10">
       <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Journal</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
          </div> -->
          <?php wp_nav_menu (array(
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class' => 'nav navbar-nav',
           )); ?>  
       </div> 
      </nav>
    </header>