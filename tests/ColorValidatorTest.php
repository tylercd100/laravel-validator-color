<?php

namespace Zenapply\Validator\Tests;

use Zenapply\Validator\Validators\ColorValidator;

class ColorValidatorTest extends TestCase
{
    public function testItCreatesAnInstanceOfSms(){
        $obj = new ColorValidator();
        $this->assertInstanceOf(ColorValidator::class,$obj);
    }
}
