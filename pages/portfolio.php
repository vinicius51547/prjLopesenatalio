<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<?php
include('estrutura/head.php');
?>

<body>
    <!-- TopBar -->
    <?php
    include('estrutura/topbar.php');
    ?>
    <!-- Header -->
    <?php
    include('estrutura/header.php');
    ?>

    <!-- Banner -->
    <div class="portfolio-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="portfolio-container">
            <h2>Portfólio</h2>
            <ul class="page-title-link">
                <li><a href="">HOME</a></li>
                <li><a href="">PORTFÓLIO</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->


    <!-- Galeria -->

    <section class="secao">
        <div class="gallery-container">
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery">
                <a href="assets/img/image1.png" data-lightbox="models" class="lightbox-link">
                    <figure>
                        <img src="assets/img/image1.png" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- /Galeria -->


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