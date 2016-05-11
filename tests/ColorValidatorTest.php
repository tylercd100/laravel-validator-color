<?php

namespace Zenapply\Validator\Tests;

use Validator;
use Zenapply\Validator\Validators\ColorValidator;

class ColorValidatorTest extends TestCase
{
    public function testItCreatesAnInstanceOfSms(){
        $obj = new ColorValidator();
        $this->assertInstanceOf(ColorValidator::class,$obj);
    }

    protected function validate($color, $rule = 'color'){
        return !(Validator::make(['test' => $color], ['test' => $rule])->fails());
    }

    public function testValidatorColor(){
        $this->assertEquals(true,  $this->validate('white', 'color'));
        $this->assertEquals(true,  $this->validate('rgba(4,200,100,0)', 'color'));
        $this->assertEquals(true,  $this->validate('rgb(4,200,100)', 'color'));
        $this->assertEquals(true,  $this->validate('#37F', 'color'));
        $this->assertEquals(true,  $this->validate('#37FFFF', 'color'));
        $this->assertEquals(false, $this->validate('fakecolor!', 'color'));
    }

    public function testValidatorColorAsHex(){
        $this->assertEquals(false, $this->validate('white', 'color_hex'));
        $this->assertEquals(false, $this->validate('rgba(4,200,100,0)', 'color_hex'));
        $this->assertEquals(false, $this->validate('rgb(4,200,100)', 'color_hex'));
        $this->assertEquals(true,  $this->validate('#37F', 'color_hex'));
        $this->assertEquals(true,  $this->validate('#37FFFF', 'color_hex'));
        $this->assertEquals(false, $this->validate('fakecolor!', 'color_hex'));
    }

    public function testValidatorColorAsRGB(){
        $this->assertEquals(false, $this->validate('white', 'color_rgb'));
        $this->assertEquals(false, $this->validate('rgba(4,200,100,0)', 'color_rgb'));
        $this->assertEquals(true,  $this->validate('rgb(4,200,100)', 'color_rgb'));
        $this->assertEquals(false, $this->validate('#37F', 'color_rgb'));
        $this->assertEquals(false, $this->validate('#37FFFF', 'color_rgb'));
        $this->assertEquals(false, $this->validate('fakecolor!', 'color_rgb'));
    }

    public function testValidatorColorAsRGBA(){
        $this->assertEquals(false, $this->validate('white', 'color_rgba'));
        $this->assertEquals(true,  $this->validate('rgba(4,200,100,0)', 'color_rgba'));
        $this->assertEquals(false, $this->validate('rgb(4,200,100)', 'color_rgba'));
        $this->assertEquals(false, $this->validate('#37F', 'color_rgba'));
        $this->assertEquals(false, $this->validate('#37FFFF', 'color_rgba'));
        $this->assertEquals(false, $this->validate('fakecolor!', 'color_rgba'));
    }

    public function testValidatorColorAsKeyword(){
        $this->assertEquals(true,  $this->validate('white', 'color_keyword'));
        $this->assertEquals(false, $this->validate('rgba(4,200,100,0)', 'color_keyword'));
        $this->assertEquals(false, $this->validate('rgb(4,200,100)', 'color_keyword'));
        $this->assertEquals(false, $this->validate('#37F', 'color_keyword'));
        $this->assertEquals(false, $this->validate('#37FFFF', 'color_keyword'));
        $this->assertEquals(false, $this->validate('fakecolor!', 'color_keyword'));
    }

}
