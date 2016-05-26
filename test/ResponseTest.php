<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK\test;

use PG\paySDK\http\Response;

class ResponseTest extends \PHPUnit_Framework_TestCase {

    public function testObjectConstruction()
    {
        $response = new Response(200, array("Content-Type"=>"text/plain"), "hello world");
        
        $this->assertTrue($response->isOk());
        $this->assertEquals("text/plain", $response->getHeader("Content-Type"));
        $this->assertEquals("hello world", $response->getBody());
    }

}