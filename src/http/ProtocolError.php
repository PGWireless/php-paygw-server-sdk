<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 *
 * Any general HTTP protocol error.
 *
 * See {@link Net_Http_ClientError} and {@link Net_Http_ServerError}
 */

namespace PG\paySDK\http;

abstract class ProtocolError extends Exception
{
    /**
     * @var response
     */
    private $response;
    
    /**
     * @param string $message
     * @param int $status
     * @param Response $response
     */    
    public function __construct($message, $status, $response)
    {
        $this->response = $response;
        parent::__construct($message, $status);
    }
    
    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->getCode();
    }
    
    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
    
    /**
     * @return string
     */
    public function getBody()
    {
        return $this->response->getBody();
    }
}