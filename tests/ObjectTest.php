<?php

namespace <%- vendorCode %>\<%- projectCode %>;

use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{	

	/**
     * @var Object
     */
    protected $object;
	
	protected function setUp()
    {
        parent::setUp();
        $this->object = new Object();
    }

    public function testNewShouldSuccess()
    {
		$actual = $this->object;
		
        $this->assertNotNull($actual);
    }
	
    public function testActShouldSuccess()
    {
		$actual = $this->object->act();

        $this->assertTrue($actual);
    }
	
}