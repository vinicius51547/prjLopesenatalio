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

    <!-- Slider -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/img/slider/slider1.jpg" alt="Imagem 1">
                <span class="image-overlay"></span> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="" class="btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/img/slider/slider2.jpg" alt="Imagem 2">
                <div class="image-overlay"></div> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="" class="btn">Saiba Mais</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/img/slider/slider1.jpg" alt="Imagem 3">
                <div class="image-overlay"></div> <!-- Película preta -->
                <div class="slide-text">
                    <div class="slider-text-content">
                        <h1 class="titulo-slide left">TRATAMENTO DE PISO INDUSTRIAL <b>&</b> PINTURA</h1>
                        <p>Serviços especializados em tratamento de piso industrial e pintura para transformar seu ambiente
                            industrial.
                        </p>
                        <div class="btn-content">
                            <a href="" class="btn">Saiba Mais</a>
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
            <div class="sobre-img">
                <img src="assets/img/sobre/img-1.jpg" alt="">
            </div>

            <div class="sobre-info">
                <h2 class="sub-title">SOBRE NÓS</h2>
                <h1 class="title btt">Bem-vindo a Lopesenatalio</h1>
                <p class="text">
                    A empresa <b>Lopes e Natalio</b>, é uma empresa relacionado a
                    área da contruçao civil,inovando na área de tratamento de piso com os melhores produtos de recuperação do mercado, fundada no ano de 2015 localizada na região de guaianases cidade de são paulo.
                </p>
                <div class="btn-content">
                    <a href="" class="btn">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sobre -->

    <!-- Caracteristicas -->
    <div class="features secao">
        <span class="image-overlay"></span> <!-- Película preta -->

        <div class="features-content">
            <div class="ft">
                <i class="ri-calendar-line"></i>
                <span>+20</span>
                <span>Anos de experiência</span>
            </div>

            <div class="ft">
                <i class="ri-calendar-line"></i>
                <span>+20</span>
                <span>Anos de experiência</span>
            </div>

            <div class="ft">
                <i class="ri-calendar-line"></i>
                <span>+20</span>
                <span>Anos de experiência</span>
            </div>

            <div class="ft">
                <i class="ri-calendar-line"></i>
                <span>+20</span>
                <span>Anos de experiência</span>
            </div>
        </div>
    </div>
    <!-- /Caracteristicas -->

    <!-- Serviços -->
    <section class="servicos secao grey">
        <div class="servicos-container">
            <h2 class="sub-title">OFERECEMOS SERVIÇOS</h2>
            <h1 class="title btt">Nossos serviços</h1>

            <!-- Cards -->
            <div class="card-servico">

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-2">
                                <span>Saiba mais</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Repete -->
                <a href="" class="card-link">
                    <div class="card-container">
                        <div class="card-content">
                            <figure class="card-img">
                                <img class="img-fluid" src="assets/img/servicos/service-1.jpg" alt="">
                            </figure>
                            <h4 class="mb-1">Air Freight</h4>
                            <p class="text mb-1">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
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
                <h2 class="sub-title">NOSSOS TRABALHOS</h2>
                <h1 class="title btt center">Nossos Projetos Recentes</h1>

                <!-- Galeria -->
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
            </div>
        </div>
    </section>
    <!-- /Trabalhos -->

    <!-- Contato-seção -->

    <section class="home-contact secao">
        <span class="image-overlay"></span> <!-- Película preta -->

        <div class="home-contact-container">
            <div class="home-contact-info">
                <h1 class="title bigger">Descubra como podemos atender às suas necessidades!</h1>
                <p>Peça agora um orçamento sem compromisso clicando no botão.</p>
            </div>

            <div class="btn-home-contact">
                <a href="" class="btn">SOLICITAR ORÇAMENTO</a>
            </div>
        </div>
    </section>

    <!-- /Contato-seção -->

    <!-- Footer -->
    <?php
    include('estrutura/footer.php');
    ?>

    <!-- JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/slide.js"></script>
    <script src="assets/js/lib/lightbox-plus-jquery.js"></script>

</body>

</html>