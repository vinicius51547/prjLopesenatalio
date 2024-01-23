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
    <div class="sobreNos-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="banner-container" data-aos="zoom-in" data-aos-duration="800">
            <h2>Sobre Nós</h2>
            <ul class="page-title-link-sobreNos">
                <li><a href="home">HOME</a></li>
                <li><a href="sobre">SOBRE</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Sobre Nós -->
    <section class="sobreNos secao">
        <div class="sobreNos-container">
            <div class="sobreNos-img" data-aos="fade-right" data-aos-duration="800">
                <img src="assets/img/sobre/img-1.jpg" alt="">
            </div>

            <div class="sobreNos-info" data-aos="zoom-in" data-aos-duration="800">
                <h2 class="sub-title">SOBRE NÓS</h2>
                <h1 class="title btt">Bem-vindo a Lopesenatalio</h1>
                <p class="text">
                    A empresa <b>Lopes e Natalio</b>, é uma empresa relacionado a
                    área da contruçao civil,inovando na área de tratamento de piso com os melhores produtos de recuperação do mercado, fundada no ano de 2015 localizada na região de guaianases cidade de são paulo.
                </p>
            </div>
        </div>


        <!-- Diretrizes -->

        <div class="secao">
            <div class="sobre-info-container" data-aos="flip-up" data-aos-duration="800">
                <div class="info-card">
                    <div class="icon-info">
                        <i class="ri-focus-line"></i>
                    </div>
                    <h3>Missão</h3>
                    <p>Executar soluções confiáveis para nossos clientes, buscando resultados positivos e a perpetuidade da empresa.</p>
                </div>
                <div class="info-card">
                    <div class="icon-info">
                        <i class="far fa-eye"></i>
                    </div>
                    <h3>Visão</h3>
                    <p>Ser reconhecidos pela qualidade e experiência em revestimentos de alto desempenho, tornando-nos referência para clientes, colaboradores e fornecedores.</p>
                </div>
                <div class="info-card">
                    <div class="icon-info">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Valores</h3>
                    <p>Comprometimento, transparência, colaboração, inovação, integridade, qualidade superior e foco no cliente guiam nossas ações.</p>
                </div>
            </div>
        </div>

        <!-- /Diretrizes -->
    </section>
    <!-- /Sobre Nós-->




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