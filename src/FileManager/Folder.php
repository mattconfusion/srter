<?php declare(strict_types=1);

namespace Srter\FileManager;

class Folder implements File {

    private $folder;

    public function __construct(string $folder)
    {
        $this->folder = $folder;
    }

    public function getPath(): string
    {
        return $this->folder;
    }

    public function getName(): string
    {
        return \dirname($this->folder);
    }
}