<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 28.03.2017
 * Time: 23:04
 */

if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', 'tms-theme'),
        'value' => '#ADFF2F',
    ),
);

$options = array(
    'panel_1' => array(
        'title' => __('Unyson Panel', 'tms-theme'),
        'options' => array(

            'section_1' => array(
                'title' => __('Unyson Section #1', 'tms-theme'),
                'options' => array(

                    'option_1' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #1', 'tms-theme'),
                        'desc' => __('Option Description', 'tms-theme'),
                    ),

                ),
            ),

            'section_2' => array(
                'title' => __('Unyson Section #2', 'tms-theme'),
                'options' => array(

                    'option_2' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #2', 'tms-theme'),
                        'desc' => __('Option Description', 'tms-theme'),
                    ),
                    'option_3' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #3', 'tms-theme'),
                        'desc' => __('Option Description', 'tms-theme'),
                    ),

                ),
            ),

        ),
    ),
);