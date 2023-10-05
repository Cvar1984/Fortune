<?php

namespace Cvar1984\Fortune\Storage;

interface FortuneRepositoryInterface
{
    public function getRandomFortune() : string;
}