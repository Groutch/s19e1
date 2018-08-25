<?php

use PHPUnit\Framework\TestCase;
include 'StrUtils.php';

class StrUtilsTest extends TestCase
{
    public $strTest1;
    public $strTest2;
    //test si ce qui est retourné est de type string
    public function testReturnType()
    {
        $this->strTest1 = new StrUtils();
        $this->strTest2 = new StrUtils("string");
        $this->assertInternalType('string', $this->strTest1->bold());
        $this->assertInternalType('string', $this->strTest2->bold());
        $this->assertInternalType('string', $this->strTest1->italic());
        $this->assertInternalType('string', $this->strTest2->italic());
        $this->assertInternalType('string', $this->strTest1->underline());
        $this->assertInternalType('string', $this->strTest2->underline());
    }
    
    public function testAttributeObject()
    {
        $this->strTest1 = new StrUtils();
        $this->assertClassHasAttribute("str", get_class($this->strTest1));
    }
    
    public function testGetClass()
    {
        $this->strTest1 = new StrUtils();
        $this->assertEquals(get_class($this->strTest1),"StrUtils");
    }
}
