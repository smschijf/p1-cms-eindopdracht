<?php

    function mijnthema_menu() {
        register_nav_menu( 'hoofdmenu', 'Het Hoofdmenu');
    }
    add_action('init', 'mijnthema_menu');

    function mijn_widgets_init() {
        register_sidebar( array (
            'name' => 'Sidebar',
            'id' => 'mijn-sidebar-widgets',
        ) );

        register_sidebar( array (
            'name' => 'Footer widgets',
            'id' => 'mijn-footer-widgets',
        ) );
    }
    add_action('widgets_init', 'mijn_widgets_init');

?>