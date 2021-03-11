<?php

return [
    'backend_route_prefix' => 'admin',

    'view_path'=>[
        'backend'=>[

            'index' => [
                'title'=>'List',
                'icon' => 'fa-table'
            ],

            'create'=> [

                'title' => 'Create',
                'icon' =>'fa-create'
            ],

            'Edit' => [
                'title'=> 'Edit',
                'icon' => 'fa-edit'
            ],

            'show' => [
                'title'=>'Show',
                'icon' => 'fa-eye'
            ]
        ]
    ],

    'assets' => [
        'panel_image_folders' => [
            'population'=> 'population',
        ],
    ],

    'image-dimensions' => [
        'population' => [
            ['width' => 350, 'height' =>350],
            ['width' => 600, 'height' =>600],
        ],
    ],

];
