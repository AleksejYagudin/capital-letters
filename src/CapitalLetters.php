<?php

namespace Ayagudin\CapitalLettersPackage;
class CapitalLetters
{
    public function getLetters(string $s): string
    {
        return mb_strtoupper($s);
    }
}