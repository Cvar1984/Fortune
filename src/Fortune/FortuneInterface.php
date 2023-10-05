<?php

namespace Cvar1984\Fortune;

interface FortuneInterface
{
    public static function make(int|bool $label) : string;
}