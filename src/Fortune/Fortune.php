<?php

namespace Cvar1984\Fortune;

use Cvar1984\Fortune\FortuneInterface;
use Cvar1984\Fortune\Storage\FortuneRepositoryInterface;
use Cvar1984\Fortune\Storage\FileBasedFortuneRepository;

final class Fortune implements FortuneInterface
{
    /**
     * This has to be instance of FortuneRepository
     *
     * @var FortuneRepositoryInterface
     */
    private FortuneRepositoryInterface $fortunes;
    public const RANDOM = 0;
    public const TERRY_DAVIS = 1;
    public function __construct(FortuneRepositoryInterface $fortunes)
    {
        $this->fortunes = $fortunes;
    }
    /**
     * Generate and return random word you can pass constant of int or ommit it
     *
     * @param int $label
     * @return string
     */
    public static function make(int|bool $label = false): string
    {
        switch ($label) {
            case Fortune::RANDOM:
                $file = '/Data/random.txt';
                break;
            case Fortune::TERRY_DAVIS:
                $file = '/Data/terry_davis.txt';
                break;
            default:
                $file = '/Data/random.txt';
        }

        $instance = new static(new FileBasedFortuneRepository(__DIR__ . $file));

        return $instance->fortunes->getRandomFortune();
    }
}