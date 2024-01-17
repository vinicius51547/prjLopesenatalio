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
            <h2>Polimento de Piso</h2>
            <ul class="page-title-link-epoxi">
                <li><a href="home">HOME</a></li>
                <li><a href="#">Polimento de Piso</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->


    <!-- Sobre -->
    <section class="sobre secao">
        <div class="sobre-container-polimento">
            <div class="sobre-img-polimento" data-aos="fade-right" data-aos-duration="800">
                <img src="assets/img/servicos/pintura-epoxi-sobre.jpg" alt="">
            </div>

            <div class="sobre-info-polimento" data-aos="fade-left" data-aos-duration="800">
                <h2 class="sub-title">SOBRE</h2>
                <h1 class="title btt">Polimento de Piso</h1>
                <p class="text">O polimento de piso é um processo de renovação que revitaliza o chão de um ambiente, proporcionando uma aparência renovada sem a necessidade de substituir a superfície existente. Essa técnica é especialmente eficaz para pisos duráveis, permitindo a manutenção da estética do ambiente e oferecendo diversas vantagens, evitando a troca por materiais mais resistentes, quando possível.</p>
                <div class="btn-content">
                    <a href="" class="btn">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sobre -->

    <!-- Galeria -->

    <section class="secao grey">
        <div class="gallery-content-polimento" data-aos="fade-up" data-aos-duration="800">
            <h2 class="sub-title">EXEMPLOS</h2>
            <h1 class="title btt">Trabalhos realizados</h1>
        </div>
        <div class="gallery-container-polimento">
            <!-- Repetindo -->
            <div class="gallery-polimento" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/polimento-1.jpg" data-lightbox="models" class="lightbox-link-polimento">
                    <figure>
                        <img src="assets/img/servicos/polimento-1.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-polimento">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-polimento" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/polimento-3.jpg" data-lightbox="models" class="lightbox-link-polimento">
                    <figure>
                        <img src="assets/img/servicos/polimento-3.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-polimento">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
            </div>
            <!-- Repetindo -->
            <div class="gallery-polimento" data-aos="fade-up" data-aos-duration="800">
                <a href="assets/img/servicos/polimento-2.jpg" data-lightbox="models" class="lightbox-link-polimento">
                    <figure>
                        <img src="assets/img/servicos/polimento-2.jpg" alt="Imagem 1">
                    </figure>

                    <span class="overlay-gallery-polimento">
                        <i class="ri-zoom-in-line"></i>
                    </span>
                </a>
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