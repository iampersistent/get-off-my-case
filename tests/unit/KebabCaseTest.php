<?php
declare(strict_types=1);

namespace Tests\Unit\Interactor;

use GetOffMyCase\KebabCase;
use UnitTester;

class KebabCaseCest
{
    public function testInvoke(UnitTester $I)
    {
        $I->assertSame('single', (new KebabCase)('single'));
        $I->assertSame('capitalized', (new KebabCase)('Capitalized'));
        $I->assertSame('multiple-words', (new KebabCase)('multipleWords'));
    }
}
