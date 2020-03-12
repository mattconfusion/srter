<?php declare(strict_types=1);

namespace Srter;

use Srter\FileManager\Folder;
use Srter\FileManager\SrtCollection;
use Srter\FileManager\SrtFile;
use Srter\FileManager\SrtFileFinder;

require 'vendor/autoload.php';

$builder = new \DI\Container();
$finder = new SrtFileFinder();
$srtFiles = $finder->scanForFiles(new Folder($argv[1]));
var_export($srtFiles);

$collection = new SrtCollection(...[]);
\array_walk($srtFiles, function (string $filePath) use ($collection) {
    $collection->addFile(new SrtFile($filePath));
});

var_export($collection);
