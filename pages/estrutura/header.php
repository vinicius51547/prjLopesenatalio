<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<?php
include('estrutura/head.php');
?>

<body>
    <!-- TopBar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-content">
                <a href="contato"><i class="ri-mail-line"></i> email@gmail.com</a>
                <a href="contato"><i class="ri-whatsapp-line"></i> (11) 999999999</a>
            </div>
        </div>
    </div>


    <!-- Inicio header -->
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav">
            <div class="nav-data">
                <div class="logo">
                    <a href="home">
                        <img src="assets/img/logo2.png" alt="logo" title="Lopesenatalio">
                    </a>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <i class="ri-menu-line nav-burger"></i>
                    <i class="ri-close-line nav-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="home" class="nav-link">Home</a></li>

                    <li><a href="portfolio" class="nav-link">Portfólio</a></li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown-item">
                        <div class="nav-link">
                            Serviços <i class="ri-arrow-down-s-line dropdown-arrow"></i>
                        </div>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="servico-Epoxi" class="dropdown-link">
                                    Pintura em epóxi
                                </a>
                            </li>
                            <li>
                                <a href="servico-PU" class="dropdown-link">
                                    Selante P.U
                                </a>
                            </li>
                            <li>
                                <a href="servico-Polimento" class="dropdown-link">
                                    Polimento de piso
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="sobre" class="nav-link">Sobre</a></li>

                    <li><a href="contato" class="nav-link">Contato</a></li>

                    <li class="btn-ocarmento">
                        <a href="contato" class="link_disable btn btn-header pulse">ORÇAMENTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Fim header -->


    <!-- JS -->
    <script src="assets/js/estrutura/header.js"></script>
</body>
