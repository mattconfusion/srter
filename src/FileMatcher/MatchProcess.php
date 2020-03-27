<?php declare(strict_types=1);

namespace Srter\FileMatcher;

use Srter\FileManager\SrtCollection;
use Srter\FileManager\VideoCollection;

class MatchProcess {

    private $matchMaker;

    public function __construct(MatchMaker $matchMaker)
    {
        $this->matchMaker = $matchMaker;    
    }

    public function execute(VideoCollection $videoCollection, SrtCollection $srtCollection) {
        foreach ($videoCollection as $videoFile) {
            $matches = $this->matchMaker->getMatchesForFile($videoFile, $srtCollection);
            var_export($matches);

            // remove the best match in srt files from the srt collection.
        }

    }

}