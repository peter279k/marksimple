<?php # -*- coding: utf-8 -*-
declare( strict_types = 1 );

namespace Bueltge\Marksimple\Tests\Unit\Rule;

use Bueltge\Marksimple\Rule\ElementRuleInterface;
use Bueltge\Marksimple\Rule;
use Bueltge\Marksimple\Tests\Unit\AbstractTestCase;

class RuleTestCase extends AbstractTestCase implements RuleTestCaseInterface
{
    public function testee(): ElementRuleInterface
    {
        return new Rule\Code();
    }

    public function provideData(): array
    {
        return [
            'default behavior' => [ '`code`', '<code>code</code>' ],
            'multiple gravis' => [ '```', '<code>`</code>' ],
            'tags in between' => [ '`<br>`', '<code>&lt;br&gt;</code>' ]
        ];
    }
}