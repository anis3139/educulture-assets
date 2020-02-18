<?php

function educulture_google_map_ui() {
    $fields = array(
        array(
            'label'=>__('Place','educulture'),
            'attr'=>'place',
            'type'=>'text',
            'meta'=>array(
                'placeholder'=>__('Place','educulture')
            )
        ),array(
            'label'=>__('Width','educulture'),
            'attr'=>'width',
            'type'=>'text',
        ),array(
            'label'=>__('Height','educulture'),
            'attr'=>'height',
            'type'=>'text',
        ),array(
            'label'=>__('Zoom','educulture'),
            'attr'=>'zoom',
            'type'=>'text',
        )
    );

    $settings = array(
        'label'=>__('Google Map','educulture'),
        'listItemImage'=>'dashicons-admin-site',
        'post_type'=>array('post','page'),
        'attrs'=>$fields
    );

    shortcode_ui_register_for_shortcode('gmap',$settings);
}

add_action( 'register_shortcode_ui', 'educulture_google_map_ui' );