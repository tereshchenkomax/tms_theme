<?php if (!defined('FW')) die('Forbidden');

// file: framework-customizations/extensions/sidebars/config.php

$cfg = array(
    'sidebar_positions' => array(
        'position-id' => array(
            /**
             * Image from: framework-customizations/extensions/sidebars/images/
             * (required)
             */
            'icon_url' => 'picture.png',
            /**
             * Number of sidebars on page.
             * The maximum number is 4.
             * (optional)
             * (default 0)
             */
            'sidebars_number' => 2
        ),
        // other positions ...
    ),
    /**
     * Массив, который будет передан register_sidebar ($ args)
     * Должно быть без 'id' и 'name'.
     * Будет использоваться для всех динамических боковых панелей.
     */
    'dynamic_sidebar_args' => array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ),
    /**
     * Render sidebar metabox в post types..
     * По умолчанию установлено значение false.
     * Если вы хотите отображать боковую панель в post types., установите для нее значение true.

     */
    'show_in_post_types' => true
);


