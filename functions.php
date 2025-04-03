<?php
// Cargar el archivo CSS y el script JS
function mitema_enqueue_styles() {
    wp_enqueue_style('miestilo', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('miscript', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mitema_enqueue_styles');

// Modificar el contenido del <h1> usando el buffer
function modificar_h1_buffer($buffer) {
    return str_replace('<h1>Placeholder</h1>', '<h1>Bienvenidos a Mi Portafolio</h1>', $buffer);
}

function iniciar_buffer() {
    ob_start('modificar_h1_buffer');
}

function finalizar_buffer() {
    ob_end_flush();
}

// Llamamos al buffer en el wp_head y wp_footer
add_action('wp_head', 'iniciar_buffer');
add_action('wp_footer', 'finalizar_buffer');
?>
