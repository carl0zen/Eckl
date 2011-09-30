<?php
require_once '_inc.php';

require_once 'JSMinPlus.php';

function test_JSMinPlus()
{
    global $thisDir;
    
    $src = file_get_contents($thisDir . '/_test_files/js/condcomm.js');
    $minExpected = file_get_contents($thisDir . '/_test_files/js/condcomm.min_plus.js');
    
    $minOutput = JSMinPlus::minify($src);
    
    $passed = assertTrue($minExpected == $minOutput, 'JSMinPlus : Conditional Comments');
    
    if (__FILE__ === realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo "\n---Output: " .strlen($minOutput). " bytes\n\n{$minOutput}\n\n";
        echo "---Expected: " .strlen($minExpected). " bytes\n\n{$minExpected}\n\n";
        echo "---Source: " .strlen($src). " bytes\n\n{$src}\n\n\n";
    }
    
    return;
    
    
    $src = file_get_contents($thisDir . '/_test_files/js/before.js');
    $minExpected = file_get_contents($thisDir . '/_test_files/js/before.min_plus.js');
    $minOutput = JSMinPlus::minify($src);
    
    $passed = assertTrue($minExpected == $minOutput, 'JSMinPlus : Overall');
    
    if (__FILE__ === realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo "\n---Output: " .strlen($minOutput). " bytes\n\n{$minOutput}\n\n";
        echo "---Expected: " .strlen($minExpected). " bytes\n\n{$minExpected}\n\n";
        echo "---Source: " .strlen($src). " bytes\n\n{$src}\n\n\n";
    }
    
    $src = file_get_contents($thisDir . '/_test_files/js/issue74.js');
    $minExpected = file_get_contents($thisDir . '/_test_files/js/issue74.min_plus.js');
    $minOutput = JSMinPlus::minify($src);
    
    $passed = assertTrue($minExpected == $minOutput, 'JSMinPlus : Quotes in RegExp literals (Issue 74)');
    
    if (__FILE__ === realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo "\n---Output: " .strlen($minOutput). " bytes\n\n{$minOutput}\n\n";
        echo "---Expected: " .strlen($minExpected). " bytes\n\n{$minExpected}\n\n";
        echo "---Source: " .strlen($src). " bytes\n\n{$src}\n\n\n";
        /*
        test_JSMin_exception('"Hello'
                            ,'Unterminated String'
                            ,'JSMin_UnterminatedStringException'
                            ,"Unterminated String: '\"Hello'");
        test_JSMin_exception("return /regexp\n}"
                            ,'Unterminated RegExp'
                            ,'JSMin_UnterminatedRegExpException'
                            ,"Unterminated RegExp: '/regexp\n'");
        test_JSMin_exception("/* Comment "
                            ,'Unterminated Comment'
                            ,'JSMin_UnterminatedCommentException'
                            ,"Unterminated Comment: '/* Comment '");
        //*/
    }
}

/*function test_JSMin_exception($js, $label, $expClass, $expMessage) {
    $eClass = $eMsg = '';
    try {
        JSMin::minify($js);
    } catch (Exception $e) {
        $eClass = get_class($e);
        $eMsg = $e->getMessage();
    }
    $passed = assertTrue($eClass === $expClass && $eMsg === $expMessage, 
        'JSMin : throw on ' . $label);
    if (! $passed && __FILE__ === realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo "\n  ---" , $e, "\n\n";
    }
}//*/

test_JSMinPlus();
