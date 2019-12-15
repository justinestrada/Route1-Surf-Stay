<?php

/**
 * REST API
 */
add_action( 'rest_api_init', function() {
     /**
     *
    register_rest_field( 'issue', 'shgmg_acf', [
        'get_callback'    => function ($arr, $field_name, $request) {
            $array_data = [];
            $array_data['test']  = get_field( 'test', $arr['id'] );
            return $array_data;
        },
        'update_callback' => null,
        'schema'          => null,
      ]
    );
    */
});
