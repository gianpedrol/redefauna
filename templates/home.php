<?php
/*
* Template name: Home
*/

get_header();
?>

<div class="bgdesenho">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bgdesenho.png" alt="" srcset="">
</div><!-- Desenho lateral -->

<section class="header-home bg-banner">
    <div class="container">
        
        <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <?php wp_nav_menu( array('primary-nav' => "Primary Menu")); ?>
            </ul>
        </div>
        </nav><!-- NavBar -->
    </div><!--container nav -->


    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-center ">
               <div class="logo-principal pb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" srcset="">
                </div>           
            </div>

            
            <div class="col-md-6  d-flex align-items-center justify-content-end">
                    <div class="titulo-principal ">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <h2>Lorem ipsum dolor sit amet consectetur </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sed, minima laboriosam laborum neque magnam?</p>
                    </div>                    
                </div>
        </div>
    </div>

</section>

<section class="conteudo-home">


    <div class="container">
        <div class="row ">
            <div class="col-md-4 align-self-center">
                <div class="sobre-home">
                    <h2>O que</h2>
                    <h2> Fazemos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a aspernatur iusto voluptatibus tenetur commodi?</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="secao-interna-home" >
                    <div class="row">

                        <div class="col-md-6">
                            <div class="box-fazemos">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/maos.png" alt="">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ab incidunt porro, rerum distinctio dignissimos eos enim, veniam eius pariatur debitis commodi dolor quis tempore consequuntur eveniet officiis et tempora.</p>
                            </div><!-- Box Fazemos -->                           
                        </div><!-- Coluna Box --> 

                        <div class="col-md-6">
                            <div class="box-fazemos">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/maos.png" alt="">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ab incidunt porro, rerum distinctio dignissimos eos enim, veniam eius pariatur debitis commodi dolor quis tempore consequuntur eveniet officiis et tempora.</p>
                            </div><!-- Box Fazemos -->                        
                        </div><!-- Coluna Box --> 
                        
                    </div> <!-- Row interna -->

                    <div class="row mt-5">

                        <div class="col-md-6">
                            <div class="box-fazemos">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/maos.png" alt="">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ab incidunt porro, rerum distinctio dignissimos eos enim, veniam eius pariatur debitis commodi dolor quis tempore consequuntur eveniet officiis et tempora.</p>
                            </div><!-- Box Fazemos -->                           
                        </div><!-- Coluna Box --> 

                        <div class="col-md-6">
                            <div class="box-fazemos">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/maos.png" alt="">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ab incidunt porro, rerum distinctio dignissimos eos enim, veniam eius pariatur debitis commodi dolor quis tempore consequuntur eveniet officiis et tempora.</p>
                            </div><!-- Box Fazemos -->                        
                        </div><!-- Coluna Box --> 

                    </div> <!-- Row interna -->
                </div><!-- Seçã interna -->
            </div>
        </div><!-- row -->
    </div><!-- Container -->

</section><!-- Conteudo Home -->

<footer id="colophon" class="site-footer-home d-flex align-items-center">
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
                    </div>
                </div><!-- ROW -->
            </div><!-- Container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>
</html>
