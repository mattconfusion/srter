<?php declare(strict_types=1);

namespace Srter\FileManager;

interface FileFinder {
    public function scanForFiles(Folder $folder): array;
}