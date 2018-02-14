<?php get_template_part('header');?>


<button onclick="topFunction()" id="mytop" title="Go to top"><img width="50" src="img/top.svg" alt="gototop"></button>

    <header>

                   
           <?php wp_nav_menu(array(
    'theme_location' => 'menu',
)); ?>
    
        

    <section class="contact">
        <div class="formulaire">
            <form>
                <input type="text" class="form-control" placeholder="Nom - prénom">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
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
        Je ne suis pas un robot !  
      </label>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            
            
        </div>
        </section>
    <?php get_template_part('header');?>