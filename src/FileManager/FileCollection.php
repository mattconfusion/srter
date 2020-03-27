<?php declare(strict_types=1);

namespace Srter\FileManager;

interface FileCollection {
    public function addFile(File $file);
    public function removeFile(File $file);
    public function getCollection(): array;
}