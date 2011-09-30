<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

return array(
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
	    'js' => array(	'//github/Eckl/_plugins/raphael.js', 
						'//github/Eckl/_plugins/jquery/jquery-ui-1.8.14.custom.min.js',
						'//github/Eckl/_plugins/jquery/jquery.bgiframe.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.core.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.widget.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.mouse.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.button.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.draggable.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.position.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.resizable.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.dialog.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.effects.core.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.accordion.min.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.autocomplete.min.js',
						'//github/Eckl/_plugins/jquery/ui/jquery.ui.selectmenu.js',
						'//github/Eckl/_plugins/jquery/ui/minified/jquery.ui.slider.min.js',
						'//github/Eckl/_plugins/jquery.livequery/jquery.livequery.js',
						'//github/Eckl/_plugins/jquery.fileupload/jquery.iframe-transport.js',
						'//github/Eckl/_plugins/jquery.fileupload/jquery.fileupload.js',
						'//github/Eckl/_plugins/jquery.mousewheel.js',
						'//github/Eckl/_plugins/jquery.scrollpane/jquery.jscrollpane.min.js',
						'//github/Eckl/_plugins/jquery.tipTip/jquery.tipTip.minified.js',
						'//github/Eckl/frontend/views/members/image_uploader/application.js',
						'//github/Eckl/frontend/js/main.js', '//github/Eckl/frontend/js/flower.js',
						'//github/Eckl/frontend/js/jquery.timeago/jquery.timeago.js',
						'//github/Eckl/frontend/js/jquery.timeago/jquery.timeago.es.js'),
    // custom source example
    /*'js2' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => create_function('$a', 'return $a;')
        ))
    ),//*/

    /*'js3' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => array('Minify_Packer', 'minify')
        ))
    ),//*/
);