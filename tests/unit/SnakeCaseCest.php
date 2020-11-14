<?php
declare(strict_types=1);

namespace Tests\Unit\Interactor;

use GetOffMyCase\SnakeCase;
use UnitTester;

class SnakeCaseCest
{
    public function testInvoke(UnitTester $I)
    {
        $I->assertSame('single', (new SnakeCase)('single'));
        $I->assertSame('capitalized', (new SnakeCase)('Capitalized'));
        $I->assertSame('multiple_words', (new SnakeCase)('multipleWords'));
    }
}
