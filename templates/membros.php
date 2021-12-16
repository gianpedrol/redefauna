<?php
/*
* Template name: Membros
*/

get_header();
?>

<div class="bgdesenho">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bgdesenho.png" alt="" srcset="">
</div><!-- Desenho lateral -->

<section class="header-membros ">
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

<section class="conteudo-membros">

        <div class="container">
            <div class="row ">
                <div class="col-md-4 align-self-center">
                    <div class="sobre-membros">
                        <h2>MEMBROS</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis atque id nesciunt illo quod excepturi corrupti, sit labore ullam, sunt soluta cupiditate sed, ea accusantium? Ad tempore quaerat unde quae.</p>
                    </div> <!-- Sobre Membros -->
                    <div class="geral-membros pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ong.png" alt="" srcset="">
                            <p>ONG</p> 
                    </div>
                    <div class="geral-membros pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/governo.png" alt="" srcset="">
                            <p>Orgão Governamental</p> 
                    </div>
                    <div class="geral-membros pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sociedade.png" alt="" srcset="">
                            <p>Sociedade Civil</p> 
                    </div>
                    <div class="geral-membros pt-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" srcset="">
                            <p>Academia</p> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="secao-interna-home" >
                        <div class="row">

                            <div class="col-md-6">
                                <div class="box-membros">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/membroana.png" alt="">
                                    <h3>Anamélia</h3>
                                    <h4>de Souza Jesus</h4>
                                    <span>M. Sc.</span>
                                    <div class="informacoes-membros">
                                    <i class="far fa-file-alt"></i>
                                    <a href="">Currículo Lattes</a>  
                                    </div><!--informacoes membros -->
                                    <div class="informacoes-membros">
                                    <i class="fas fa-at"></i>
                                    <a href="">E-mail</a>  
                                    </div><!--informacoes membros -->
                                </div><!-- Box Fazemos -->                           
                            </div><!-- Coluna Box --> 

                            <div class="col-md-6">
                                <div class="box-membros">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/andre.png" alt="">
                                    <h3>André</h3>
                                    <h4>Pinassi Antunes</h4>
                                    <span>Ph.D.</span>
                                   
                                    <div class="informacoes-membros">
                                    <i class="far fa-file-alt"></i>
                                    <a href="">Currículo Lattes</a>  
                                    </div><!--informacoes membros -->
                                    <div class="informacoes-membros">
                                    <i class="fas fa-at"></i>
                                    <a href="">E-mail</a>  
                                    </div><!--informacoes membros -->
                                </div><!-- Box Fazemos -->                        
                            </div><!-- Coluna Box --> 
                            
                        </div> <!-- Row interna -->

                        <div class="row mt-5">

                            <div class="col-md-6">
                                <div class="box-membros">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/joao.png" alt="">
                                    
                                <h3>João</h3>
                                <h4>Moraes Silva</h4>
                                <span>M.Sc.</span>
                                   
                                    <div class="informacoes-membros">
                                    <i class="far fa-file-alt"></i>
                                    <a href="">Currículo Lattes</a>  
                                    </div><!--informacoes membros -->
                                    <div class="informacoes-membros">
                                    <i class="fas fa-at"></i>
                                    <a href="">E-mail</a>  
                                    </div><!--informacoes membros -->
                                </div><!-- Box Fazemos -->                           
                            </div><!-- Coluna Box --> 

                            <div class="col-md-6">
                                <div class="box-membros">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/luisa.png" alt="">
                                <h3>Luisa</h3>
                                <h4>Guimarães</h4>
                                <span>Ph.D.</span>
                                <div class="informacoes-membros">
                                <i class="far fa-file-alt"></i>
                                    <a href="">Currículo Lattes</a>  
                                    </div><!--informacoes membros -->
                                    <div class="informacoes-membros">
                                    <i class="fas fa-at"></i>
                                    <a href="">E-mail</a>  
                                    </div><!--informacoes membros -->
                                </div><!-- Box Fazemos -->                        
                            </div><!-- Coluna Box --> 

                        </div> <!-- Row interna -->
                    </div><!-- Seçã interna -->
                </div>
            </div><!-- row -->
        </div><!-- Container -->
</section> <!--Conteudo Membros -->

<!-- footer --> 

    <footer id="colophon" class="site-footer-membros d-flex align-items-center">
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
            </div> <!-- row -->
        </div><!--Container -->
    </footer><!-- #colophon -->
</div><!-- #page -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>
</html>