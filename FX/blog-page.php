<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="blog">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->

   
   <nav class="main-nav">
        
            <ul id="menu">
                <li><a href="#about">Accueil du site</a></li>
                <li><a href="#prestations">Articles</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="nav-link navbar">
                <div><a href="https://medium.com/@fxmarquis" width="30" class="navbar-toggler-icon"><img src="img/medium.svg" alt=""></a></div>&nbsp;&nbsp;&nbsp;
                <div><a href="https://www.linkedin.com/in/fxmarquis/" class="navbar-toggler-icon"><img src="img/linked.svg" alt=""></a></div>&nbsp;&nbsp;&nbsp;
                <div> <a href="https://twitter.com/fx_marquis?lang=fr" class="navbar-toggler-icon"><img src="img/Twitter_1_.svg" alt=""></a></div>
            </div>
</nav>
<section>
        <div class="hero" style="background-image: url(<?php bloginfo('template_url'); ?>/img/nomade.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 fadeInDown">
                        <h1>François-Xavier Marquis</h1>
                        <h2 class="citation">" Il n’y a de bonnes technologies que celles au service des êtres humains "</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>