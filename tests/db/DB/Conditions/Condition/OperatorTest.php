<?php

require_once(ROOT.'/vendor/phpixie/db/tests/db/DB/Conditions/ConditionTest.php');

class OperatorTest extends ConditionTest
{
    protected function setUp()
    {
        $this->condition = new PHPixie\DB\Conditions\Condition\Operator('a', '=', array(1));
    }

    public function testProperties()
    {
        $this->assertEquals('a', $this->condition->field);
        $this->assertEquals('=', $this->condition->operator);
        $this->assertEquals(array(1), $this->condition->values);
    }
}