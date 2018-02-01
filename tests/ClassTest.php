<?php

namespace <%- vendorCode %>\<%- projectCode %>;

use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{	

	/**
     * @var Class
     */
    protected $class;
	
	protected function setUp()
    {
        parent::setUp();
        $this->class = new Class();
    }

    public function testNewShouldSuccess()
    {
		$actual = $this->class;
		
        $this->assertNotNull($actual);
    }
	
    public function testDoShouldSuccess()
    {
		$actual = $this->class->do();

        $this->assertTrue($actual);
    }
	
}