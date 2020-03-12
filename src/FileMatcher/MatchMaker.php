<?php declare(strict_types=1);

namespace Srter\FileMatcher;

use FuzzyWuzzy\Process;
use FuzzyWuzzy\Collection;
use Srter\FileManager\SrtCollection;
use Srter\FileManager\VideoFile;

class MatchMaker {

    private $processor;

    public function __construct(Process $fuzzySearchProcess)
    {
        $this->processor = $fuzzySearchProcess;
    }

    public function getMatchesForFile(VideoFile $videoFile, SrtCollection $srtFiles): array
    {
        // set up scorer and processor in fuzzywuzzy extract
        return $this->processor->extract(
            $videoFile->getName(), \array_values($srtFiles->getCollection())    
        )->toArray(); //understand what to do with collection
    }
}