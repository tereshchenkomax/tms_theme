<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 28.03.2017
 * Time: 23:15
 */
if ( ! defined('FW') ){
    die('Forbidden');
}
$options = array(
    'metabox' => array(
        'tittle' => 'Meta Box',
        'type' => 'box',
        'options' => array(
            'tab_id' => array(
                'title' => __('Tab Title', 'tms_theme'),
                'type' => 'tab',
                'options' => array(
                    'sub_tab_2' => array(
                        'title' => __('Tab Title 1', 'tms_theme'),
                        'type' => 'tab',
                        'options' => array(
                            'sub_metabox' => array(
                                'title' => __('Tab Title 1', 'tms_theme'),
                                'type' => 'box',
                                'options' => array(
                                    'id_2'  => array( 'type' => 'text' ),
                                    'title' => __('Button and Popup Title', 'tms_theme'),
                                    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                                    'modal-size' => 'small', // small, medium, large
                                    'desc' => __('Button Description', 'tms_theme')

)))))))));
