<?php

/**
 * Interface Stringify need for old php versions instead Stringable interface
 * __toString call the fatal error when throwing exceptions
 */

declare(strict_types=1);

namespace Otis22\PhpInterfaces;

interface Stringify
{
    /**
     * Need for php older than 7.4v, because __toString generate fatal Error when throw any Exception
     *
     * @return string
     */
    public function asString(): string;

    /**
     * TODO: Need extends Stringable interface for new php versions
     *
     * @return string
     */
    public function __toString(): string;
}
