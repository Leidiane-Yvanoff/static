<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>François-Xavier Marquis</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    <a href="https://icons8.com"></a>
    <?php wp_head();?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<nav class="main-nav">
         
            <ul id="menu">
                <li><a href="#about">à propos</a></li>
                <li><a href="#prestations">prestations</a></li>
                <li><a href="#livre">livre</a></li>
                <li><a href="#video">vidéo</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
      
            <div class="nav-link">
              <a href="https://medium.com/@fxmarquis" width="30" class="navbar-toggler-icon"><img src="<?php bloginfo('template_url'); ?>/img/medium.svg" alt=""></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.linkedin.com/in/fxmarquis/" class="navbar-toggler-icon"><img src="<?php bloginfo('template_url'); ?>/img/linked.svg" alt=""></a>&nbsp;&nbsp;&nbsp;
               <a href="https://twitter.com/fx_marquis?lang=fr" class="navbar-toggler-icon"><img src="<?php bloginfo('template_url'); ?>/img/Twitter_1_.svg" alt=""></a>
          
            </div>
</nav>

<body>
    <?php wp_nav_menu(array(
    'theme_location' => 'Zone Principale',));?>
