<?php declare(strict_types=1);

namespace Srter\FileManager;

class Folder {

    private $folder;

    public function __construct(string $folder)
    {
        $this->folder = $folder;
    }

    public function getFolder(): string
    {
        return $this->folder;
    }
}