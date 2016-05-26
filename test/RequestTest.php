<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK\test;

use PG\paySDK\http\Client;

class RequestTest extends HttpTestCase {

    public function testGetRequest()
    {
        $url = self::HOST.'/basic/get';

        $request = new Client('get', $url);

        $this->assertEquals($request->getUrl(), $url);
        $this->assertEquals($request->getMethod(), 'GET');
    }

    public function testPostRequest()
    {
        $url = self::HOST.'/basic/post';
        $vars = array("greeting"=>"Hello", "from"=>"Client Request");

        $request = new Client('post', $url);
        $request->setParameters($vars);

        $this->assertEquals($request->getUrl(), $url);
        $this->assertEquals($request->getMethod(), 'POST');
    }

}