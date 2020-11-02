<?php

/**
 *  interface Assocify can be use for declare object wich can be convert to simple array<string, string>
 */

declare(strict_types=1);

namespace Otis22\PhpInterfaces;

interface Assocify
{
    /**
     * @return array<string, string>
     */
    public function asAssoc(): array;
}
