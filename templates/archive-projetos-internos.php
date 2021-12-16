<?php
/*
* Template name: Projetos
*/

get_header();



?>
<div class="bgdesenho">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bgdesenho.png" alt="" srcset="">
</div><!-- Desenho lateral -->

<section class="header-projetos ">
    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logointernas.png" alt="" srcset="">
        <button class="navbar-toggler" type="button"  class="btn btn-light" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<section class="conteudo-projetos">

        <div class="container">
            <div class="row ">
                <div class="col-md-4 align-self-center">
                    <div class="sobre-projetos">
                        <h2>Projetos</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis atque id nesciunt illo quod excepturi corrupti, sit labore ullam, sunt soluta cupiditate sed, ea accusantium? Ad tempore quaerat unde quae.</p>
                    </div> <!-- Sobre Membros -->
                    <div class="geral-projetos pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/projetoativo.png" alt="" srcset="">
                            <p>Projetos Ativos </p> 
                    </div>
                    <div class="geral-projetos pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/projetocheck.png" alt="" srcset="">
                            <p>Projetos Concluídos</p> 
                    </div>
                </div><!-- Col MD 4 -->

                <?php
                projetos(); //pega função no functions.php
                ?>

	

            </div><!-- row -->
        </div><!-- Container -->
</section> <!--Conteudo Projetos -->


<!-- footer --> 

<footer id="colophon" class="site-footer-projetos d-flex align-items-center">
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
     
                        </div><!-- Redes Sociais -->
                </div><!-- row -->
            </div><!-- container --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>
</html>