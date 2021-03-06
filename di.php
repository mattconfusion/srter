<?php declare(strict_types=1);

namespace Srter;

use Srter\FileManager\Folder;
use Srter\FileManager\SrtCollection;
use Srter\FileManager\SrtFile;
use Srter\FileManager\SrtFileFinder;
use Srter\FileManager\VideoFileFinder;

require 'vendor/autoload.php';

$builder = new \DI\Container();
$finder = new SrtFileFinder();
$srtFiles = $finder->scanForFiles(new Folder($argv[1]));
echo "SRT FILES" . PHP_EOL;
var_export($srtFiles);

$collection = new SrtCollection(...[]);
\array_walk($srtFiles, function (string $filePath) use ($collection) {
    $collection->addFile(new SrtFile($filePath));
});

$finder2 = new VideoFileFinder();
$videoFiles = $finder2->scanForFiles(new Folder($argv[1]));
echo "Video FILES" . PHP_EOL;
var_export($videoFiles);


//now build a MatchMaker and invoke MatchProcess on the two collections
//now show the matches
//if matches are agreed upon, call the MatchFinalizer


