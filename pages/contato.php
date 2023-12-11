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
    <div class="contact-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="contact-container">
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
                    <div class="left-side">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Endereço</div>
                            <div class="text-one">São Paulo - Guaianases</div>
                            <div class="text-two">Rua:Doutor João Otaviano Preira n°225</div>
                        </div>
                        <div class="phone details">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Telefone</div>
                            <div class="text-one">+55 11 949920414</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">Email</div>
                            <div class="text-one">Lopesenatalio@gmail.com</div>
                        </div>
                        <div class="email details">
                            <i class="fa-solid fa-building"></i>
                            <div class="topic">CNPJ</div>
                            <div class="text-one">48.641.597/0001-80</div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="topic-text">Entre em Contato</div>

                        <form name="formcontato" method="POST" action="https://formsubmit.co/Lopesenatalio@gmail.com">
                            <div class="input-box">
                                <input type="text" name="nome" placeholder="Nome Completo" required>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="Seu melhor E-mail" required>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2038998613366!2d-46.40628400000001!3d-23.561119299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce659708693bb3%3A0x87e33031e2719540!2slopes%20e%20natalio%20tecnologia%20em%20tratamento%20de%20pisos%20endustrial!5e0!3m2!1spt-BR!2sbr!4v1669601919558!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" position: relative; padding-bottom: 75%; height: 0; overflow: hidden;></iframe>
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