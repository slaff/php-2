<?php
// TODO: add namespaces
//       add autoloading, etc

class CaculatorTest extends PHPUnit_Framework_TestCase {
    
    // executed always before the actul test
    public function setUp() {
        $this->calc = new Calc();
    }
   
    // executed after the actual test
    public function tearDown() {
       unset($this->calc)
    }

    // One sample test
    public function testPlus() {
        $this->assertEquals($this->calc->plus(2,3), 5);
    }
}
