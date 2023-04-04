<?php
get_header();

$archives = array('main', 'sobre-nos', 'certificacoes', 'entrar-contato', 'dia-a-dia', 'galeria','depoimentos', 'como-chegar', 'newsletter');
foreach ($archives as $key) {
    include get_template_directory()."/parts/$key.php";
}
get_footer();
?>
