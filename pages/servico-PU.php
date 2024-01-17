<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<?php
include('estrutura/head.php');
?>

<body>
    <!-- Header -->
    <?php
    include('estrutura/header.php');
    ?>

    <!-- Banner -->
    <div class="selante-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="banner-container-selante" data-aos="zoom-in" data-aos-duration="800">
            <h2>Selante P.U</h2>
            <ul class="page-title-link-selante">
                <li><a href="home">HOME</a></li>
                <li><a href="#">Selante P.U</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->


    <!-- Sobre -->
    <section class="sobre secao">
        <div class="sobre-container-selante">
            <div class="sobre-img-selante" data-aos="fade-right" data-aos-duration="800">
                <img src="assets/img/servicos/p.u-sobre.jpg" alt="">
            </div>

            <div class="sobre-info-selante" data-aos="fade-left" data-aos-duration="800">
                <h2 class="sub-title">SOBRE</h2>
                <h1 class="title btt">Selante P.U</h1>
                <p class="text">
                    Para que serve um selante PU? Normalmente, os selantes são usados ​​para fechar aberturas entre superfícies, onde outros materiais como concreto e argamassa não podem ser usados.</p>
                <div class="btn-content">
                    <a href="portfolio" class="btn">Ver Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sobre -->

    <!-- Galeria -->

    <section class="secao grey">
        <div class="gallery-content-selante" data-aos="fade-up" data-aos-duration="800">
            <h2 class="sub-title">EXEMPLOS</h2>
            <h1 class="title btt">Trabalhos realizados</h1>
        </div>
        <div class="gallery-container-selante">
            <!-- Repetindo -->
            <div class="gallery-selante" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/p.u-2.jpg" data-lightbox="models" class="lightbox-link-selante">
                    <figure>
                        <img src="assets/img/servicos/p.u-2.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-selante">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>

            <!-- Repetindo -->
            <div class="gallery-selante" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/p.u-1.jpg" data-lightbox="models" class="lightbox-link-selante">
                    <figure>
                        <img src="assets/img/servicos/p.u-1.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-selante">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-selante" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/p.u-3.jpg" data-lightbox="models" class="lightbox-link-selante">
                    <figure>
                        <img src="assets/img/servicos/p.u-3.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-selante">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- /Galeria -->
    </div>

    <!-- Contato-seção -->
    <?php
    include('estrutura/contato-secao.php');
    ?>
    <!-- /Contato-seção -->

    <!-- Footer -->
    <?php
    include('estrutura/footer.php');
    ?>

</body>

</html>