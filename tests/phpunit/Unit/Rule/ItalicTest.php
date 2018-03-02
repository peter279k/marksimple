<?php declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Bueltge\Marksimple\Tests\Unit\Rule;

use Bueltge\Marksimple\Rule;
use Bueltge\Marksimple\Rule\ElementRuleInterface;
use Bueltge\Marksimple\Tests\Unit\AbstractRuleTestCase;

class ItalicTest extends AbstractRuleTestCase
{

    public function provideList(): array
    {
        return [

            'underline' => ['_Content in italic_', '<em>Content in italic</em>'],
            'asterix' => ['*Content in italic*', '<em>Content in italic</em>'],
        ];
    }

    public function returnRule(): ElementRuleInterface
    {
        return new Rule\Italic();
    }
}
