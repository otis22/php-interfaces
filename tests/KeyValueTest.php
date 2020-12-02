<?php

declare(strict_types=1);

namespace Otis22\PhpInterfaces;

use PHPUnit\Framework\TestCase;

class KeyValueTest extends TestCase
{
    public function testReturnNeededKeyValue(): void
    {
        $this->assertEquals(
            ['a' => 'b'],
            (
                new class implements KeyValue {
                    public function asKeyValue(): array
                    {
                        return ['a' => 'b'];
                    }
                }
            )->asKeyValue()
        );
    }
}
