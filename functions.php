<?php

/* Registar menu */
function donclick_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal de Tema DonClick', 'donclick')
    ));    
};

add_action( 'init', 'donclick_menus' );

