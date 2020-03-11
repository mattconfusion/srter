<?php declare(strict_types=1);

namespace Srter\FileManager;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;

trait FileResearcher {

    /**
     * Recursive search for pattern in folder
     *
     * @param string $folder
     * @param string $pattern
     * @return array
     */
    function rsearch(string $folder, string $pattern): array {
        $dir = new RecursiveDirectoryIterator($folder);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, $pattern, RegexIterator::REPLACE);
        $files->replacement = '$0';
        return \iterator_to_array($files, false);
    }
}