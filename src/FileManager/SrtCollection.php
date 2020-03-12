<?php declare(strict_types=1);

namespace Srter\FileManager;

class SrtCollection {

    private $collection = [];

    public function __construct(SrtFile ...$files)
    {
        foreach ($files as $file) {
            $this->addFile($file);
        }
    }

    public function addFile(SrtFile $file) {
        $this->collection[$file->getPath()] = $file->getName();
    }

    public function removeFile(SrtFile $file) {
        unset($this->collection[$file->getPath()]);
    }

    public function getCollection(): array
    {
        return $this->collection;
    }
}