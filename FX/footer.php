<footer class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="mentions.html" class="text-white">  Mentions légales </a><br>
                        <address><a href="mailto:fxmarquis@wanadoo.fr" class="text-white">  fxmarquis@wanadoo.fr </a></address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-white"><a href="#about">À propos </a><a href="#prestations">Prestations </a><a href="#livre">Livre</a> <a href="#video"> Vidéo </a> <a href="#contact">Contact</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script type="application/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script type="application/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
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
    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/my-script.js"></script>
</body>

</html>
