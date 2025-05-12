<?php get_header(); ?>
/*
Theme Name: prueba-asdrubal-eloy-garcia
Theme URI: localhost
Author: Eloy Parga
Description: Tema personalizado de WordPress con 3 secciones.
Version: 1.0
*/
    <main>
        <?php include(get_template_directory() . '/sections/section1.php'); ?>
        <?php include(get_template_directory() . '/sections/section2.php'); ?>

        <?php 
        $mostrar_seccion = true; // Condicional
        if ($mostrar_seccion) {
            include(get_template_directory() . '/sections/section3.php');
        }
        ?>
    </main>
<?php get_footer(); ?>
