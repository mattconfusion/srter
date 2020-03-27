<?php declare(strict_types=1);

namespace Srter\FileMatcher;

use Srter\FileManager\SrtFile;
use Srter\FileManager\VideoFile;

class Match {

    private $videoFile;
    private $srtFile;

    public function __construct(VideoFile $videoFile, SrtFile $srtFile)
    {
        $this->videoFile = $videoFile;
        $this->srtFile = $srtFile;
    }

    public function getSrtFile()
    {
        return $this->srtFile;
    }

    public function getVideoFile()
    {
        return $this->videoFile;
    }
}