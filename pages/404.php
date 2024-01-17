<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<?php
$pageTitle = "Pagina não encontrada";
include('estrutura/head.php');
?>
<style>
    h1 {
        margin-top: 150px;
    }
</style>

<body>
    <!-- Header -->
    <?php
    include('estrutura/header.php');
    ?>

    <!-- Banner -->
    <div class="error-page-banner">
        <div class="image-overlay"></div> <!-- Película preta -->

        <div class="banner-container-error-page">
            <h2>Pagina não encontrada</h2>
            <ul class="page-title-link-error-page">
                <a href="contato" class="btn pulse">HOME</a>
            </ul>
        </div>
    </div>
    <!-- /Banner -->


    <!-- Footer -->
    <?php
    include('estrutura/footer.php');
    ?>
</body>

</html>