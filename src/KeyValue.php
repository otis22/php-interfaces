<?php

/**
 *  interface KeyValue can be use for declare object wich can be convert to simple array<string, string>
 */

declare(strict_types=1);

namespace Otis22\PhpInterfaces;

interface KeyValue
{
    /**
     * @return array<string, mixed>
     */
    public function asKeyValue(): array;
}
