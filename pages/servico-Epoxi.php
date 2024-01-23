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
    <div class="epoxi-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="banner-container-epoxi" data-aos="zoom-in" data-aos-duration="800">
            <h2>Pintura Epóxi</h2>
            <ul class="page-title-link-epoxi">
                <li><a href="home">HOME</a></li>
                <li><a href="#">PINTURA EPÓXI</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->


    <!-- Sobre -->
    <section class="sobre secao">
        <div class="sobre-container-epoxi">
            <div class="sobre-img-epoxi" data-aos="fade-right" data-aos-duration="800">
                <img src="assets/img/servicos/pintura-sobre.jpg" alt="">
            </div>

            <div class="sobre-info-epoxi" data-aos="zoom-in" data-aos-duration="800">
                <h2 class="sub-title">SOBRE</h2>
                <h1 class="title btt">Pintura Epóxi</h1>
                <p class="text">
                    A tinta epóxi é uma tinta industrial à base de um material de mesmo nome.
                    Ela é amplamente utilizado na construção civil e é responsável por dar
                    acabamento a pisos de garagens, quadras poliesportivas, salas de cirurgia
                    e clínicas hospitalares.</p>
                <div class="btn-content">
                    <a href="portfolio" class="btn">Ver Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sobre -->

    <!-- Galeria -->

    <section class="secao grey">
        <div class="gallery-content-epoxi" data-aos="fade-up" data-aos-duration="800">
            <h2 class="sub-title">EXEMPLOS</h2>
            <h1 class="title btt">Trabalhos realizados</h1>
        </div>
        <div class="gallery-container-epoxi">
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/pintura-epoxi3.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/pintura-epoxi3.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/pintura-epoxi4.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/pintura-epoxi4.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/pintura-epoxi3.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/pintura-epoxi3.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/pintura-epoxi2.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/pintura-epoxi2.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/pintura-epoxi1.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/pintura-epoxi1.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-epoxi" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/epoxi1.jpg" data-lightbox="models" class="lightbox-link-epoxi">
                    <figure>
                        <img src="assets/img/servicos/epoxi1.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-epoxi">
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

    <!-- JS -->
    <script src="assets/js/lib/lightbox-plus-jquery.js"></script>
</body>

</html>