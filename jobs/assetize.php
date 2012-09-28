<?php

/*

resources.assetic.collections.essentialJs.cache = false
resources.assetic.collections.essentialJs.write.combined = true
resources.assetic.collections.essentialJs.write.leaves = false
resources.assetic.collections.essentialJs.options.debug = false
resources.assetic.collections.essentialJs.options.name = "essential"
resources.assetic.collections.essentialJs.options.output = "application/r" APPLICATION_REVISION "/*"
resources.assetic.collections.essentialJs.filters[] = "?closure"
;resources.assetic.collections.essentialJs.inputs[] = APPLICATION_PATH "/assets/SlexAxton-yepnope.js-95d9bce/yepnope.js"
;resources.assetic.collections.essentialJs.inputs[] = APPLICATION_PATH "/assets/SlexAxton-yepnope.js-95d9bce/prefixes/yepnope.css-prefix.js"
;resources.assetic.collections.essentialJs.inputs[] = APPLICATION_PATH "/assets/modernizr-1.7.min.js"
resources.assetic.collections.essentialJs.inputs[] = APPLICATION_PATH "/assets/modernizr-2.5.3.js"

resources.assetic.collections.js.cache = false
resources.assetic.collections.js.write.combined = true
resources.assetic.collections.js.write.leaves = false
resources.assetic.collections.js.options.debug = false
resources.assetic.collections.js.options.name = "common"
resources.assetic.collections.js.options.output = "application/r" APPLICATION_REVISION "/*"
resources.assetic.collections.js.filters[] = "?closure"


resources.assetic.collections.js.inputs[] = APPLICATION_PATH "/assets/jquery.tools.min.js"
resources.assetic.collections.js.inputs[] = APPLICATION_PATH "/assets/woothemes-FlexSlider-1c04c41/jquery.flexslider-min.js"
resources.assetic.collections.js.inputs[] = APPLICATION_PATH "/assets/dporssi2011-lib.js"
resources.assetic.collections.js.inputs[] = APPLICATION_PATH "/assets/dporssi2011.js"

resources.assetic.collections.css.cache = false
resources.assetic.collections.css.write.combined = true
resources.assetic.collections.css.write.leaves = false
resources.assetic.collections.css.options.debug = false
resources.assetic.collections.css.options.name = "common"
resources.assetic.collections.css.options.output = "application/r" APPLICATION_REVISION "/*.css"
resources.assetic.collections.css.filters[] = "less"
resources.assetic.collections.css.inputs[] = APPLICATION_PATH "/assets/paulirish-html5-boilerplate-06dbc3e/css/style.css"
resources.assetic.collections.css.inputs[] = APPLICATION_PATH "/assets/dporssi2011.less"
resources.assetic.collections.css.inputs[] = APPLICATION_PATH "/assets/paulirish-html5-boilerplate-06dbc3e/css/style2.css"
resources.assetic.collections.css.inputs[] = APPLICATION_PATH "/assets/woothemes-FlexSlider-1c04c41/flexslider.css"

resources.assetic.parser.0.debug = false
resources.assetic.parser.0.directory = APPLICATION_PATH "/assets"
resources.assetic.parser.0.blacklist[] = "[^" APPLICATION_PATH "\/assets\/(paul|woothemes|twitter|Slex|h5bp)]"
resources.assetic.parser.0.files.js.pattern = "/\.js$/"
resources.assetic.parser.0.files.js.filters[] = "?closure"
resources.assetic.parser.0.files.js.output = "application/r" APPLICATION_REVISION "/*.js"
resources.assetic.parser.0.files.jpg.pattern = "/\.jpg$/"
resources.assetic.parser.0.files.jpg.filters[] = "?jpegoptim"
resources.assetic.parser.0.files.jpg.output = "application/r" APPLICATION_REVISION "/*.jpg"
resources.assetic.parser.0.files.gif.directory = APPLICATION_PATH "/assets"
resources.assetic.parser.0.files.gif.pattern = "/\.gif$/"
resources.assetic.parser.0.files.gif.output = "application/r" APPLICATION_REVISION "/*.gif"
resources.assetic.parser.0.files.png.directory = APPLICATION_PATH "/assets"
resources.assetic.parser.0.files.png.pattern = "/\.png$/"
resources.assetic.parser.0.files.png.filters[] = "?optipng"
resources.assetic.parser.0.files.png.output = "application/r" APPLICATION_REVISION "/*.png"
*/

require_once '../bootstrap.php';

$options = array(
    'javaPath' => '/usr/bin/java',
    'closureCompilerPath' => APPLICATION_PATH . "/ext/closure-compiler/compiler.jar",
    'nodePath' => '/opt/local/bin/node',
    'nodePaths' => array(APPLICATION_PATH . '/node_modules'),
    'optiPngPath' => '/opt/local/bin/optipng',
    'jpegOptimPath' => '/opt/local/bin/jpegoptim',

    'collections' => array(
        'essentialjs' => array(
            'write' => array('combined' => true, 'leaves' => false),
            'debug' => false,
            'name' => 'essential',
            'output' => 'assets/*',
            'filters' => '?closure',
            'inputs' => array(
                APPLICATION_PATH . '/assets/modernizr.js',
                APPLICATION_PATH . '/assets/jquery.js',
                APPLICATION_PATH . '/assets/lamantiini.js',
            )
        )

    ),

    'parser' => array(),
);

$assetizer = new Loso\Assetizer($options);
$assetizer->init();

echo "assetized";
