<?php
declare(strict_types=1);

namespace GetOffMyCase;

final class KebabCase
{
    public function __invoke(string $string): string
    {
        $addedSpaces = preg_replace('/(?<=\\w)(?=[A-Z])/'," $1", $string);
        $convertedToSpaces = preg_replace("/[\(\)\[\]\{\}\=\?\!\.\:,\-_\+\\\"#~\/]/", " ", $addedSpaces);
        $loweredCase = strtolower($convertedToSpaces);

        return preg_replace("/\s+/","-",trim($loweredCase));
    }
}
