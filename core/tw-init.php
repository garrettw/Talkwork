<?php
/**
 * Main file responsible for prepping framework
 * 
 * @version    0.1
 * @author     Garrett Whitehorn
 * @package    Talkwork
 */

if (defined('TW_DEBUGMODE') && TW_DEBUGMODE):
    if (ini_get('display_errors') == '0'):
        ini_set('display_errors', '1');
    endif;
    error_reporting(E_ALL|E_STRICT);
endif;

$req_version = '5.4.0';
if (version_compare($req_version, PHP_VERSION, '>')):
    $text = 'Your server is running PHP ' . PHP_VERSION
          . ", but Talkwork requires at least version $req_version.";
    header('HTTP/1.0 500 Internal Server Error');
    echo '<br><b>Fatal error</b>: ',$text;
    @trigger_error($text, E_USER_ERROR);
endif;

require __DIR__ . '/autoloader.php';
$loader = new Autoloader();
$loader->registerLibrary(__DIR__); // where autoload.json lives

$dic = new \Dice\Dice;

$rule = new \Dice\Rule;
$rule->substitutions['Input'] = function() {
    if (PHP_SAPI == 'cli'):
        return new CLInput($argv);
    else:
        return new HTTPInput($_GET);
    endif;
};
$dic->addRule('*', $rule);
