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
    <div class="contact-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="contact-container" data-aos="zoom-in" data-aos-duration="800">
            <h2>Contato</h2>
            <ul class="page-title-link-contact">
                <li><a href="">HOME</a></li>
                <li><a href="">CONTATO</a></li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Inicio Contato -->
    <section class="secao contact">
        <div class="form">
            <div class="container-form">
                <div class="content">
                    <div class="right-side" data-aos="fade-right" data-aos-duration="800">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Endereço</div>
                            <div class="text-one">São Paulo - SP</div>
                            <div class="text-two">Rua:São paulo n°225</div>
                        </div>
                        <div class="phone details">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Telefone</div>
                            <div class="text-one">+55 11 999999</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">Email</div>
                            <div class="text-one">email@gmail.com</div>
                        </div>
                        <div class="email details">
                            <i class="fa-solid fa-building"></i>
                            <div class="topic">CNPJ</div>
                            <div class="text-one">48.641.597/0001-80</div>
                        </div>
                    </div>
                    <div class="left-side" data-aos="fade-left" data-aos-duration="800">
                        <div class="topic-text">Entre em Contato</div>

                        <form name="formcontato" method="POST">
                            <div class="input-box">
                                <input type="text" name="nome" placeholder="Nome Completo" required>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="input-box message-box">
                                <textarea name="mensagem" placeholder="Assunto..." required></textarea>
                            </div>
                            <div class="button-form">
                                <button class="btn">Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- API Maps -->
        <div class="maps">
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467690.1491046!2d-46.92564603761557!3d-23.68206209412541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1705456268222!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" position: relative; padding-bottom: 75%; height: 0; overflow: hidden;></iframe>
            </div>
        </div>
        <!-- Fim API-->
    </section>
    <!-- Fim Contato -->

    <!-- Footer -->
    <?php
    include('estrutura/footer.php');
    ?>


</body>

</html>