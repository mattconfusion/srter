<?php declare(strict_types=1);

namespace Srter\FileManager;

class VideoFileFinder implements FileFinder 
{
    use FileResearcher;
    use VideoFileExtensions;

    public function scanForFiles(Folder $folder): array
    {
        $regex = '/(\w|\.|:|-)+(\.' . \implode('|', $this->getList()) . ')/';
        return $this->rsearch($folder->getPath(), $regex);
    }
}