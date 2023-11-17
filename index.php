<!-- Comando compilar sass -->
<!-- sass --watch assets/sass/style.min.scss:assets/css/style.css -->

<?php
// Verifique se a página solicitada existe
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Defina uma lista de páginas válidas
$valid_pages = ['home', 'sobre', 'contato', 'fotos', 'servico/epoxi', 'servico/polimento', 'servico/selante_Pu'];

// Verifique se a página solicitada está na lista de páginas válidas
if (in_array($page, $valid_pages)) {
    // Se a página existir, inclua a página correspondente
    include('pages/' . $page . '.php');
} else {
    // Se a página não existir, redirecione para a página de erro 404
    header("HTTP/1.0 404 Not Found");
    include('pages/404.php');
}

?>