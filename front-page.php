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
 * @package Blog_de_Marie-Laure_BILLAUT */
 
wp_head(); 
get_header();
 
   ?>
   


    <h3 id="about"><img width="4" height="61" src="img/ligneverte.svg" alt=""> À propos <img width="4" height="61" src="img/ligneverte.svg" alt=""> </h3>
    <section class="main-about">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-justify"><span id="first"> F</span>rançois-Xavier Marquis a dirigé le FAFIEC ( OPCA du Numérique, Conseil, Ingéniere, Etude) , la Maison de l'Entreprise Auxerre, la CCI de Saumur et diverses startups. Il est le co-créateur de Chambersign (autorité de certificaiton de signature électronique des CCI ).<br>
                        <span id="first"> I</span>l a effectué deux missions pour le gouvernement sur le rôle du numérique dans la formation. Il a également travaillé sur les conséquences de la loi sur la formation professionelle.</p>
                </div>


                <div class="col-lg-6">
                    <img class="img-responsive ecole" src="img/488742478.jpg" alt="">
                </div>

                <div class="btn"><a href="#contact">En savoir plus</a></div>
            </div>
        </div>
    </section>
    <h3 id="prestations"> <img width="4" height="61" src="img/ligneverte.svg" alt=""> Prestations <img width="4" height="61" src="img/ligneverte.svg" alt=""> </h3>
    <article class="main-prestations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <img class="img-responsive" src="img/conference.jpg" alt="photoconference">

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
                    <h2 class="grand">Les prestations peuvent être réalisées en deux phases:</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <h2>Diagnostic et conseil</h2>
                            <img class="conseil" src="img/conseil.png" alt="">
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <h2>Accompagnement</h2>
                            <img class="accompagnement" src="img/accompagnement.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="phochaines">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Prochaines conférences sur le théme:</p>
                    <p class="text-uppercase vert">"humain au coeur du numérique"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <img class="calendrier" src="img/calendrier.png" alt="">
                    <h2>Université d'Hiver de la Formation Professionnelle, Biarritz</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="vert">Contactez et réservez une intervention de François-Xavier Marquis dans votre établissement !</p>
            </div>
        </div>
    </div>
    <div class="fx">
        <div class="container">
            <div class="row d-flex-space-around">
                <div class="col-md-4 col-lg-4">
                    <img class="img-responsive" src="img/fx-marquis.jpg" alt="">
                </div>
                <div class="col-md-8 col-lg-8">
                    <p class=" fx-text text-justify"> J’ai toujours eu à cœur de m’attacher à la convergence entre les technologie et les êtres humains, de tous les métiers que j’ai pu faire j’ai retenu deux lignes drectrices: - Il n’y a de bonnes technologies que celles au service des êtres humains - Une innovation ne prend son sens qu’au travers de ses usages. " ( François-Xavier Marquis )</p>

                </div>
                <div class="btn"><a href="#contact">Contactez-le </a> </div>
            </div>
        </div>

    </div>

    <section>
        <h3 id="livre"> <img width="4" height="61" src="img/ligneverte.svg" alt=""> Son livre <img width="4" height="61" src="img/ligneverte.svg" alt=""> </h3>

        <div class="livre">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="livret img-responsive" widht="296" height="495" src="img/livret.svg" alt="">
                        <img class="img-responsive" src="img/fxvert.png" alt="">

                    </div>
                </div>
            </div>

        </div>
        <div class="logoediteur">
            <img class="img-responsive" src="img/lharmattan.png" alt="">
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

                <div class="btn"><a href="https://www.amazon.fr/Pens%C3%A9e-intelligence-artificielle-strat%C3%A9gie-formation/dp/2343133263/ref=sr_1_1?ie=UTF8&qid=1517930698&sr=8-1&keywords=fran%C3%A7ois+xavier+marquis"></a> Commandez-le </div>
            </div>
        </div>

    </section>
    <section id="video">

        <h3> <img width="4" height="61" src="img/ligneverte.svg" alt=""> vidéo <img width="4" height="61" src="img/ligneverte.svg" alt=""> </h3>


        <div class="row">
            <div class="col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SEoTwMi-DTw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <p>Cliquez sur la vidéo pour regarder la présentation de son livre: </p>
        <p class="text-center  font-weight-bold">"Pensée ou intelligence Artificielle? "</p>

    </section>

    <h3 id="contact"> <img width="4" height="61" src="img/ligneverte.svg" alt=""> contact <img width="4" height="61" src="img/ligneverte.svg" alt=""></h3>
    <section class="contact">


        <div class="formulaire">

            <form>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nom">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer e-mail">
                </div>
                <div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
        Je ne suis pas un robot !     <img src="img/recaptcha.jpg" width="40" heigth="40" alt="">
      </label>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

        <footer class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="text-white">  Mentions légales </a><br>
                        <a href="#" class="text-white">  fxmarquis@wanadoo.fr </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a class="text-white"><a href="#about">À propos </a><a href="#prestations">Prestations </a><a href="#livre">Livre</a> <a href="#video"> Vidéo </a> <a href="#Contact">Contact</a> </a>
                </div>
            </div>
        </footer>

    </section>



    <script type="application/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.js"></script>
    <script type="application/javascript" src="js/npm.js"></script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("mytop").style.display = "block";
            } else {
                document.getElementById("mytop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>


   
    </div>
    <?php wp_footer();
get_footer();?>
    </body>




    </html>