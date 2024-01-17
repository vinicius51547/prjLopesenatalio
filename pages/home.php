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

    <!-- Slider -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/img/slider/slider1.jpg" alt="Imagem 1">
                <span class="image-overlay"></span> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content" data-aos="zoom-in" data-aos-duration="800">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="sobre" class="btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/img/slider/slider2.jpg" alt="Imagem 2">
                <div class="image-overlay"></div> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content" data-aos="zoom-in" data-aos-duration="800">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="sobre" class="btn">Saiba Mais</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/img/slider/slider1.jpg" alt="Imagem 3">
                <div class="image-overlay"></div> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content" data-aos="zoom-in" data-aos-duration="800">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="sobre" class="btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Indicadores de slides (bolinhas) -->
        <div class="swiper-pagination"></div>
        <!-- Setas de navegação -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Divisor -->
    <div class="section-divider sd-white sd-m11">
        <div class="section-divider-inner">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.278 3.52" preserveAspectRatio="none">
                <path d="M0 3.528S27.04 3.352 35.278 0v3.528z" opacity=".2" fill="%23fbd8c2" />
                <path d="M0 3.528S27.04 3.374 35.278.425v3.103z" opacity=".2" fill="%23fbd8c2" />
                <path d="M0 3.528S27.04 3.396 35.278.882v2.646z" fill="%23fbd8c2" />
                <path d="M0 3.527h35.278v.092H0z" fill="%23fbd8c2" />
            </svg>
        </div>
    </div>
    <!-- /Divisor -->

    <!-- Sobre -->
    <section class="sobre secao">
        <div class="sobre-container">
            <div class="sobre-img" data-aos="fade-right" data-aos-duration="800">
                <img src="assets/img/sobre/img-1.jpg" alt="">
            </div>

            <div class="sobre-info" data-aos="fade-left" data-aos-duration="800">
                <h2 class="sub-title">SOBRE NÓS</h2>
                <h1 class="title btt">Bem-vindo a Lopesenatalio</h1>
                <p class="text">
                    A empresa <b>Lopes e Natalio</b>, é uma empresa relacionado a
                    área da contruçao civil,inovando na área de tratamento de piso com os melhores produtos de recuperação do mercado, fundada no ano de 2015 localizada na região de guaianases cidade de são paulo.
                </p>
                <div class="btn-content">
                    <a href="sobre" class="btn">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sobre -->

    <!-- Caracteristicas -->
    <div class="features secao">
        <div class="features-content" data-aos="fade-up" data-aos-duration="800">
            <div class="ft">
                <i class="fas fa-truck"></i>
                <span>Entrega no prazo estimado</span>
            </div>

            <div class="ft">
                <i class="fas fa-wrench"></i>
                <span>Técnicos altamente qualificados</span>
            </div>

            <div class="ft">
                <i class="fas fa-hard-hat"></i>
                <span>Trabalhamos com segurança</span>
            </div>

            <div class="ft">
                <i class="fas fa-calendar-alt"></i>
                <span>Anos de experiência</span>
            </div>
        </div>
    </div>
    <!-- /Caracteristicas -->


    <!-- Serviços -->
    <section class="servicos secao grey">
        <div class="servicos-container">
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">OFERECEMOS SERVIÇOS</h2>
            <h1 class="title btt" data-aos="fade-up" data-aos-duration="800">Nossos serviços</h1>

            <!-- Cards -->
            <div class="card-servico" data-aos="fade-up" data-aos-duration="800">

                <!-- Repete -->
                <a href="servico-Polimento" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/pintura-epoxi-sobre.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Polimento em piso</h4>
                            <p class="text mb-1">O polimento de piso é um procedimento que ajuda a renovar o chão de um ambiente.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="servico-PU" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/p.u-sobre.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Selante P.U</h4>
                            <p class="text mb-1">O selante de poliuretano (PU) é versátil, oferecendo aderência forte e durabilidade em fixação, colagem e vedação.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="servico-Epoxi" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/pintura-sobre.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Pintura Epóxi</h4>
                            <p class="text mb-1">Com as tintas epóxis é possível dar cor e renovar o seu ambiente com um toque simples e
                                diferencial.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Trabalhos -->
    <section class="secao">
        <div class="work-conatiner">
            <div class="work-info">
                <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">NOSSOS TRABALHOS</h2>
                <h1 class="title btt center" data-aos="fade-up" data-aos-duration="800">Nossos Projetos Recentes</h1>

                <!-- Galeria -->
                <div class="jobs-container">
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/epoxi1.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/epoxi1.jpg" alt="Imagem 1">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/pintura-epoxi1.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/pintura-epoxi1.jpg" alt="Imagem 2">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/pintura-epoxi2.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/pintura-epoxi2.jpg" alt="Imagem 3">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/pintura-epoxi3.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/pintura-epoxi3.jpg" alt="Imagem 4">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/pintura-epoxi4.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/pintura-epoxi4.jpg" alt="Imagem 5">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Repetindo -->
                    <div class="jobs" data-aos="fade-up" data-aos-duration="800">
                        <a href="assets/img/servicos/p.u-2.jpg" data-lightbox="models" class="lightbox-link">
                            <figure>
                                <img src="assets/img/servicos/p.u-2.jpg" alt="Imagem 6">
                            </figure>

                            <span class="overlay-jobs">
                                <i class="ri-zoom-in-line"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Trabalhos -->

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