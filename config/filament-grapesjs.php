<?php

declare(strict_types=1);

// config for Dotswan/FilamentGrapesjs
return [

    /**
     * If adding custom assets, you can add them here.
     * The files must be located in your application's resources directory and should be a relative path
     * ( the resource_path() function is used to locate the file )
     * After modifying, you must run composer dump-autoload to regenerate the minified files
     */
    'assets' => [

        'css' => [
            // slug => path to js file in your resources directory
           // 'slug' => 'path/to/js/file.js',
        ],

        'js' => [
            // slug => path to css file in your resources directory
            // 'slug' => 'path/to/css/file.css',
        ]
    ]
];
