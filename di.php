<?php declare(strict_types=1);

namespace Srter;

use Srter\FileManager\Folder;
use Srter\FileManager\SrtFileFinder;

require 'vendor/autoload.php';

$builder = new \DI\Container();
$finder = new SrtFileFinder();
var_export($finder->scanForFiles(new Folder($argv[1]))); 