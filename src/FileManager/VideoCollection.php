<?php declare(strict_types=1);

namespace Srter\FileManager;

class VideoCollection implements FileCollection {

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

    private function add(VideoFile $file) {
        $this->collection[$file->getPath()] = $file;
    }

    private function remove(VideoFile $file) {
        unset($this->collection[$file->getPath()]);
    }
}