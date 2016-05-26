<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

require_once __DIR__ . '/../vendor/autoload.php';

namespace PG\paySDK\test;

abstract class HttpTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * This is a set of URL endpoints I set up a while ago for testing generic HTTP clients
     */
    const HOST = 'http://conformity.sourceforge.net';
}