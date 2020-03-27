<?php declare(strict_types=1);

namespace Srter\FileManager;

trait VideoFileExtensions {

    /**
     * returns a list of known video extensions
     *
     * @return array
     */
    public function getList(): array {
        return [
            'mpg',
            'mp2',
            'mpeg',
            'mpe',
            'mpv',
            'mp4',
            'm4p',
            'm4v',
            'mkv',
            'avi',
            'mov',
            'qt',
            'xvid',
            'dvix',
            'webm',
            'ogg',
            'wmv',
            'flv'
        ];
    }
}