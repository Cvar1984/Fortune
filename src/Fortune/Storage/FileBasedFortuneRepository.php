<?php

namespace Cvar1984\Fortune\Storage;

final class FileBasedFortuneRepository implements FortuneRepositoryInterface
{
    /**
     * This property hold array of words
     *
     * @var array
     */
    private array $file;
    public function __construct($fortuneDataFile)
    {
        $this->file = file(
            $fortuneDataFile,
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        );
    }
    /**
     * Return random string from $fortuneDataFile
     *
     * @return string
     */
    public function getRandomFortune(): string
    {
        return $this->file[array_rand($this->file)];

    }
}