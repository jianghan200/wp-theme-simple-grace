<!DOCTYPE HTML>
<html>

<head>
  <title><?php bloginfo('name');?></title>
  <meta name="description" content="<?php bloginfo('description');?>" />
  <meta name="keywords" content="English Writing, College English, Jinan University, Raewyn Steel" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
  <?php wp_head(); ?>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>English <a href="<?=site_url();?>">Writing</a></h1>
        <div class="slogan">Let writing be easy!</div>
      </div>

      <?php  
       wp_nav_menu( array(        
                'container_id' =>  'menubar',
                'theme_location'  =>  'primary',
                'menu_id'    =>  'menu',
                'depth'       =>  1,
                ) );
      ?>

    </div>

<!--     <form class="navbar-search pull-right" > 
        <input type="search" class="search-query" results="5" name="s"  placeholder="Search"> 
    </form> -->
