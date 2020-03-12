<?php declare(strict_types=1);

namespace Srter\FileManager;

class SrtFileFinder implements FileFinder 
{
    use FileResearcher;

    public function scanForFiles(Folder $folder): array
    {
        return $this->rsearch($folder->getPath(), '/(\w|\.|:|-)+(\.srt)/');
    }
}