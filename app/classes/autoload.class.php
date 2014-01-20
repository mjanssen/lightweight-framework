<?php
/**
 * Registers the autoloader
 */
namespace app\classes\autoload;

require_once VENDOR_PATH. '/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespace(
    'Symfony\\Component\\HttpFoundation', VENDOR_PATH.'/symfony/http-foundation'
);
$loader->register();