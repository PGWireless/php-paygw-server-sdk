<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK\test;

use PG\paySDK\http\Client;
use PG\paySDK\http\NetworkError;
use PG\paySDK\http\Config;

class OptionsTest extends HttpTestCase {

    public function testCanSetGlobalTimeoutOption()
    {
        Config::setTimeout(1);

        try {
            $clientOne = new Client();
            $clientOne->get(self::HOST.'/basic/errors/timeout');
        } catch(NetworkError $e) {
            $this->assertContains("timed out", $e->getMessage());
            $this->assertEquals(28, $e->getCode());
        }
    }

    public function testMergesHttpOptions()
    {
        Config::setTimeout(1000);

        $client = new Client;
        $opts   = $client->getOptions();

        $this->assertArrayHasKey(CURLOPT_TIMEOUT, $opts);
        $this->assertEquals(1000, $opts[CURLOPT_TIMEOUT]);
    }

    public function testClientOptionsOverrideHttpOptions()
    {
        Config::setTimeout(1000);

        $client = new Client;
        $client->setTimeout(2000);

        $opts = $client->getOptions();

        $this->assertArrayHasKey(CURLOPT_TIMEOUT, $opts);
        $this->assertEquals(2000, $opts[CURLOPT_TIMEOUT]);
    }

    public function tearDown()
    {
        Config::clearOptions();
    }

}