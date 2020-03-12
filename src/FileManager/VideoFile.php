<?php declare(strict_types=1);

namespace Srter\FileManager;

class VideoFile implements File {
    
    use VideoFileExtensions;

    private $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getName(): string
    {
        return basename($this->file);
    }

    public function getPath(): string
    {
        return $this->file;
    }
}