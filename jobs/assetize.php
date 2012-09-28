<?php

ini_set("display_errors", 1);

require_once '../bootstrap.php';

$options = array(
    'javaPath' => '/usr/bin/java',
    'closureCompilerPath' => APPLICATION_PATH . "/ext/closure-compiler/compiler.jar",
    'nodePath' => '/usr/local/bin/node',
    'nodePaths' => array(APPLICATION_PATH . '/node_modules'),
    'optiPngPath' => '/usr/bin/optipng',
    'jpegOptimPath' => '/usr/bin/jpegoptim',

    'collections' => array(
        'essentialjs' => array(
            'write' => array('combined' => true, 'leaves' => false),
            'cache' => false,
            'options' => array(
                'debug' => false,
                'name' => 'essential',
                'output' => 'assets/*',
            ),
            'filters' => '?closure',
            'inputs' => array(
                APPLICATION_PATH . '/assets/modernizr.js',
                APPLICATION_PATH . '/assets/jquery.js',
                APPLICATION_PATH . '/assets/lamantiini.js',
            )
        ),
        'css' => array(
            'write' => array('combined' => true, 'leaves' => false),
            'cache' => false,
            'options' => array(
                'debug' => false,
                'name' => 'common',
                'output' => 'assets/*',
            ),
            'filters' => 'less',
            'inputs' => array(
                APPLICATION_PATH . '/assets/lamantiini.css',
            )
        )


    ),

    'parser' => array(
        'lus' => array(
            'debug' => false,
            'directory' => APPLICATION_PATH . '/assets',
            'blacklist' => array(),
            'files' => array(
                'jpg' => array(
                    'pattern' => "/\.jpg$/",
                    'filters' => array('?jpegoptim'),
                    'output' => 'assets/*.jpg',
                ),
                'png' => array(
                    'pattern' => "/\.png$/",
                    'filters' => array('?optipng'),
                    'output' => 'assets/*.png',
                ),
                'ttf' => array(
                    'pattern' => "/\.ttf$/",
                    'filters' => array(),
                    'output' => 'assets/*.ttf',
                ),


            ),

        )

    ),
);

$assetizer = new Loso\Assetizer($options);
$assetizer->init();

echo "assetized";
