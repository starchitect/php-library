<?php

namespace <%- vendorCode %>\<%- projectCode %>;

use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{	

	/**
     * @var Object $sut system under test
     */
    protected $sut;
	
    /**
	 * @return Object system under test
	 */
	protected function createNew()
	{
	    return new Object();
	}
	
	protected function setUp()
    {
        parent::setUp();
        $this->sut = $this->createNew();
    }

    public function testNewShouldSuccess()
    {
		$actual = $this->sut;
		
        $this->assertNotNull($actual);
    }
	
    public function testActShouldSuccess()
    {
		$actual = $this->sut->act();

        $this->assertTrue($actual);
    }
	
}