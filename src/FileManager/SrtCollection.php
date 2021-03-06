<?php declare(strict_types=1);

namespace Srter\FileManager;

class SrtCollection implements FileCollection {

    private $collection = [];

    public function __construct(SrtFile ...$files)
    {
        foreach ($files as $file) {
            $this->addFile($file);
        }
    }

    public function addFile(File $file) {
        $this->add($file);
    }

    public function removeFile(File $file) {
        $this->remove($file);
    }

    public function getCollection(): array
    {
        return $this->collection;
    }

    public function extractNames(): array
    {
        $names = [];

        foreach ($this->collection as $file)
        {
            $names = $file->getName();
        }

        return $names;
    }

    private function add(SrtFile $file) {
        $this->collection[$file->getPath()] = $file;
    }

    private function remove(SrtFile $file) {
        unset($this->collection[$file->getPath()]);
    }
}