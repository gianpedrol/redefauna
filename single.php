<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package redefaunav2
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="bgdesenho">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bgdesenho.png" alt="" srcset="">
        </div><!-- Desenho lateral -->
        
        <section class="header-single">
            <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logointernas.png" alt="" srcset="">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                    <?php wp_nav_menu( array('primary-nav' => "Primary Menu")); ?>
                    </ul>
                </div>
            </nav>

            </div> <!--container principa -->

        </section> <!-- Header Membros -->

		<?php
		while ( have_posts() ) :
			the_post(); ?>



        <section class="conteudo-publicacoes">

                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="sobre-publicacoes">
                                <h2>Publicações</h2>
                            
                            </div> <!-- Sobre Membros -->
                        </div><!-- Col MD 12 -->     
                        

                        
                    </div><!-- row -->

                </div><!-- Container -->
                <div class="d-flex justify-content-center">
                <div class="container-post ">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class = "titulo-post">
                                        <h3><?php the_title(); ?></h3>
                                    </div><!-- Titulo -->                
                                </div><!-- COL 9 TITULO -->
                                <div class="col-md-4">
                                        <div class="date-post">
                                            <h5><?php the_date(); ?></h5>
                                        </div>
                                </div><!-- col 4 date -->
                            </div><!-- row -->
                            <div class="col-md-12">
                                <div class="autor-post">
                                    <?php the_author(); ?>
                                </div>

                                <div class="content-post">
                                <?php the_content(); ?>
                            </div>
                        </div><!-- Container post -->
                </div>
                

        </section> <!--Conteudo publicacoes -->







         <?php   
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

    <!-- footer --> 
    <footer id="colophon" class="site-footer-publicacoes d-flex align-items-center">
    <div class="container">
            <div class="row">
                    <div class="col-md-8 text-center">
                        <div class="titulo-footer">
                            <h5> Acompanhe a Rede Fauna</h5>
                        </div>

                        <div class="social-footer d-inline align-items-center">
                            <a href="http://"><i class="fab fa-instagram"></i></a>
                            <a href="http://"><i class="fab fa-facebook-f"></i></a>
                            <a href="http://"><i class="fab fa-youtube"></i></a>
                        </div><!-- Redes Sociais -->
                    </div><!--COL-MD-8 -->

                    <div class="col-md-4">
                    <div class="titulo-footer">
                            <h5>fale conosco</h5>
                        </div>

                        <div class="fale-conosco d-inline align-items-center">
                            <a href="http://"><i class="fas fa-at"></i></a>
                            <a href="http://"><i class="fab fa-whatsapp"></i></a>
     
                        </div><!-- fale conosco -->
            </div><!--row -->
        </div><!-- container --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>
</html>


