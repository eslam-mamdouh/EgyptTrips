<?php

return [
    'news' => [
        'title' => 'News',

        'actions' => [
            'index' => 'News',
            'create' => 'New News',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'image' => 'Image',
            'enabled' => 'Enabled',
            
        ],
    ],

    'trips-distination' => [
        'title' => 'Trips Distinations',

        'actions' => [
            'index' => 'Trips Distinations',
            'create' => 'New Trips Distination',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            
        ],
    ],

    'trip' => [
        'title' => 'Trips',

        'actions' => [
            'index' => 'Trips',
            'create' => 'New Trip',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'distination_id' => 'Distination',
            'slug' => 'Slug',
            
        ],
    ],

    'offer' => [
        'title' => 'Offers',

        'actions' => [
            'index' => 'Offers',
            'create' => 'New Offer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'slug' => 'Slug',
            
        ],
    ],

    'gallery' => [
        'title' => 'Galleries',

        'actions' => [
            'index' => 'Galleries',
            'create' => 'New Gallery',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'slug' => 'Slug',
            'distination_id' => 'Distination',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'comment' => 'Comment',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];