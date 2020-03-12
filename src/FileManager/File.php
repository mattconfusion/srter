<?php declare(strict_types=1);

namespace Srter\FileManager;

interface File {
    public function getName(): string;
    public function getPath(): string;
}