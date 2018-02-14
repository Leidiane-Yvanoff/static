<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FX_Marquis */
 
wp_head(); 
get_header();
 
   ?>
    
     
<section>
        <div class="hero" style="background-image: url(<?php bloginfo('template_url'); ?>/img/nomade.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 fadeInDown">
                        <h1>François-Xavier Marquis</h1>
                        <h2 class="citation">" Il n’y a de bonnes technologies que celles au service des êtres humains "</h2>
                        <div><a href="http://fxmarquis.local/blog" class="btn-hero">Visiter le blog</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h3 id="about"><span class="ligneverte"></span>&nbsp; à propos &nbsp;<span class="ligneverte"></span></h3>
    <section class="main-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-justify"><span id="first"> F</span>rançois-Xavier Marquis a dirigé le FAFIEC ( OPCA du Numérique, Conseil, Ingénierie, Étude ) , la Maison de l'Entreprise Auxerre, la CCI de Saumur et diverses startups. Il est le co-créateur de Chambersign ( autorité de certification de signature électronique des CCI ).<br>
                        <span id="first"> I</span>l a effectué deux missions pour le gouvernement sur le rôle du numérique dans la formation. Il a également travaillé sur les conséquences de la loi sur la formation professionnelle.<br>
                           <span id="first"> I</span>l est Docteur diplômé des Mines de Paris (Projet et Produits Nouveaux), Mastère de Gestion Industrielle (Agro ParisTech), DEA Génie des procédés Paris X et Ingénieur ENSIA.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive ecole" src="<?php bloginfo('template_url'); ?>/img/488742478.jpg" alt="">
                  
                </div>
                   <div><a href="#contact" class="btn">En savoir plus</a></div>
            </div>
        </div>
    </section>
    <h3 id="prestations"><span class="ligneverte"></span>&nbsp; Prestations &nbsp;<span class="ligneverte"></span></h3>
    <article class="main-prestations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/conference.jpg" alt="photoconference">

                    <h4>Conférences , Formations ,<br> Conseils , Débats et <br> Sensibilisations
                    </h4>
                </div>
            </div>
        </div>

    </article>
    <div class="green">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h2 class="grand">Les prestations peuvent être réalisées en deux phases :</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 ">
                    <h2>Diagnostic et Conseil</h2>
                    <img class="conseil " width="180" src="<?php bloginfo('template_url'); ?>/img/conseil.svg" alt="">
                </div>

                <div class="col-md-6 col-lg-6">
                    <h2>Accompagnement</h2>
                    <img class="accompagnement" width="180" src="<?php bloginfo('template_url'); ?>/img/accompagnement.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="phochaines">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="large">Prochaines conférences sur le thème :</p>
                    <p class="text-uppercase vert">"L'humain au coeur du numérique"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="calendrier">
        <div class="container">
            <div class="slider">
                <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slide2.jpg);">
                    <div class="date-calendar">
                        <p>2 février 2018 :<br> Université d'Hiver de la Formation <br> Professionnelle, Biarritz</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slide3.jpg);">

                    <div class="date-calendar">
                        <p>6 février 2018 :<br> ESTIA Biarritz
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slide4.jpg);">
                    <div class="date-calendar">
                        <p>22 février 2018 :<br> Cadres en Mission Nantes
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slide5.jpg);">
                    <div class="date-calendar">
                        <p>15 Mars 2018 :<br> à l’Insula Café sur l’île de Nantes
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slide6.jpg);">
                    <div class="date-calendar">
                        <p>21 Mars 2018 : <br>à l'université du Havre
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="vert2">Contactez et réservez une intervention de François-Xavier Marquis dans votre établissement !</p>
            </div>
        </div>
    </div>
    <div class="fx">
        <div class="container">
            <div class="row d-flex-space-around">
                <div class="col-md-4 col-lg-4">
                    <img class="img-responsive nb" src="<?php bloginfo('template_url'); ?>/img/fx-marquisNB.jpg" alt="">
                </div>
                <div class="col-md-8 col-lg-8">
                    <p class="fx-text text-justify"> J’ai toujours eu à cœur de m’attacher à la convergence entre les technologies et les êtres humains, de tous les métiers que j’ai pu faire, j’ai retenu deux lignes directrices: <br> - Il n’y a de bonnes technologies que celles au service des êtres humains<br> - Une innovation ne prend son sens qu’à travers de ses usages. " ( François-Xavier Marquis )</p>

                </div>
                <div class="btn"><a href="#contact">Contactez-le </a> </div>
                
            </div>
        </div>

    </div>

    <section>
        <h3 id="livre"><span class="ligneverte"></span>&nbsp; Son livre &nbsp;<span class="ligneverte"></span></h3>

        <div class="livre" style="background-image: url(<?php bloginfo('template_url'); ?>/img/livre.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-livret">
                        <img class="livret" src="<?php bloginfo('template_url'); ?>/img/livret.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="logoediteur">
            <img class="img-responsive " src="<?php bloginfo('template_url'); ?>/img/lharmattan.png" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-uppercase font-weight-bold">pensée ou intelligence artificielle ?</p>
                    <p class="slogan">De la stratégie à la formation, l'humain au coeur du numérique</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="btn"><a href="https://www.amazon.fr/Pens%C3%A9e-intelligence-artificielle-strat%C3%A9gie-formation/dp/2343133263/ref=sr_1_1?ie=UTF8&qid=1517930698&sr=8-1&keywords=fran%C3%A7ois+xavier+marquis">Commandez-le </a> </div>
            </div>
        </div>

    </section>
    <section id="video">

        <h3 id="video"><span class="ligneverte"></span>&nbsp; Vidéo &nbsp;<span class="ligneverte"></span></h3>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/SEoTwMi-DTw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <p>Cliquez sur la vidéo pour regarder la présentation de son livre: </p>
        <p class="text-center  font-weight-bold">"Pensée ou intelligence Artificielle? "</p>

    </section>

    <h3 id="contact"><span class="ligneverte"></span>&nbsp; Contact &nbsp;<span class="ligneverte"></span></h3>
 
       <div class="container">
        <div class="formulaire
              ">
              <div class="formulaire">
            
                 <?php echo do_shortcode('[contact-form-7 id="65"  class="formulaire" title="Contact"]'); ?> 
                  <button type="submit" class="btn ">Envoyer</button>
                 <!-- <div class="g-recaptcha" data-sitekey="6Le6KkYUAAAAAJvyTrjziZ6yVRJ7oWzJOhG7br9s"></div>
                -->
          </div>
       </div>
           <section class="contact">
</section>
    <?php get_footer();
        ?>

    

        






