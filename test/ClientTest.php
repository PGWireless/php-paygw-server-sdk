<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK\test;

use PG\paySDK\http\Client;
use PG\paySDK\http\ClientError;
use PG\paySDK\http\ServerError;
use PG\paySDK\http\NetworkError;

class ClientTest extends HttpTestCase
{

    public function testGetRequest()
    {
        $client = new Client();
        $client->get(self::HOST.'/basic/get');
        $this->assertEquals(200, $client->getStatus());
        $this->assertContains("CANHAZHTTPGET", $client->getBody());
    }

    public function testPostRequest()
    {
        $client = new Client();
        $client->post(self::HOST.'/basic/post', array("greeting"=>"Hello", "from"=>"Net_Http_Client"));
        $this->assertEquals(200, $client->getStatus());
        $this->assertContains("Hello back", $client->getBody());
    }

    public function testHeadRequestWithSetHeader()
    {
        $client = new Client();
        $client->setHeader('X-Requested-Square', 4);
        $client->head(self::HOST.'/basic/head');
        $this->assertEquals(200, $client->getStatus());
        $this->assertEquals('True', $client->getHeader('X-Requested-By-Head'));
        $this->assertEquals(4*4, $client->getHeader('X-Requested-Result'));
    }

    public function testContentNegotiationOnMultipleRequests()
    {
        $client = new Net_Http_Client();

        $client->setHeader('Accept', 'application/xml');
        $client->get(self::HOST.'/basic/content');
        $this->assertEquals(200, $client->getStatus());
        $this->assertContains('<title>Hello World</title>', $client->getBody());

        $client->setHeader('Accept', 'text/javascript');
        $client->get(self::HOST.'/basic/content');
        $this->assertEquals(200, $client->getStatus());
        $this->assertContains('{message:"Hello World"}', $client->getBody());
    }

    public function testBasicAuthenticationOnMultipleRequests()
    {
        $client = new Client();

        $client->get(self::HOST.'/basic/auth/basic');
        $this->assertEquals(401, $client->getStatus());
        $this->assertContains('You are not authorized', $client->getBody());

        $client->setBasicAuth('random', 'random');
        $client->get(self::HOST.'/basic/auth/basic');
        $this->assertEquals(401, $client->getStatus());
        $this->assertContains('Invalid username and password', $client->getBody());

        $client->setBasicAuth('username', 'password');
        $client->get(self::HOST.'/basic/auth/basic');
        $this->assertEquals(200, $client->getStatus());
        $this->assertContains('You are logged in', $client->getBody());
    }

    public function testNotFoundError()
    {
        $client = new Client();
        $client->get(self::HOST.'/basic/errors/missing');
        $this->assertEquals(404, $client->getStatus());
        $this->assertContains('Resource Not Found', $client->getBody());
    }

    public function testInternalServerError()
    {
        $client = new Client();
        $client->get(self::HOST.'/basic/errors/crash');
        $this->assertEquals(500, $client->getStatus());
        $this->assertContains('The Server Exploded', $client->getBody());
    }

    public function testFailOnNetworkTimeout()
    {
        $client = new Client();
        $client->setTimeout(1);

        try {
            $client->get(self::HOST.'/basic/errors/timeout');
        } catch(NetworkError $e) {
            $this->assertContains("timed out", $e->getMessage());
            $this->assertEquals(28, $e->getCode());
        }
    }

    public function testFailOnErrorThrowsExceptionFromClientError()
    {
        $client = new Client();
        $client->failOnError();

        try {
            $client->get(self::HOST.'/basic/errors/missing');
        } catch(ClientError $e) {
            $this->assertContains('Not Found', $e->getMessage());
            $this->assertEquals(404, $e->getCode());
            $this->assertEquals(404, $e->getResponse()->getStatus());
            $this->assertContains('Resource Not Found', $e->getBody());
        }
    }

    public function testFailOnErrorThrowsExceptionFromServerError()
    {
        $client = new Client();
        $client->failOnError();

        try {
            $client->get(self::HOST.'/basic/errors/crash');
        } catch(ServerError $e) {
            $this->assertContains('Internal Server Error', $e->getMessage());
            $this->assertEquals(500, $e->getCode());
            $this->assertEquals(500, $e->getResponse()->getStatus());
            $this->assertContains('The Server Exploded', $e->getBody());
        }
    }
}