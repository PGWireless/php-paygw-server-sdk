<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 *
 *
 * HTTP response envelope.
 *
 * If there was a way to make immutable value types in PHP, this
 * object would be one.
 */

namespace PG\paySDK\http;

final class Response
{
    private $status;
    private $message;
    private $body;

    public function __construct($status, $headers, $body='')
    {
        $this->status = $status;
        $this->headers = $headers;
        $this->body = $body;
    }

    /**
     * HTTP response code.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Is the response an HTTP error.
     */
    public function isError()
    {
        return ($this->status >= 400);
    }

    /**
     * Is the response OK?
     */
    public function isOk()
    {
        return ($this->status >= 200 && $this->status < 300);
    }

    /**
     * Entire list of response headers.
     *
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Access a single response header by key.
     */
    public function getHeader($header)
    {
        if (isset($this->headers[$header])) {
            return $this->headers[$header];
        }
    }

    /**
     * Returns the content body of the response.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Make the content body be the string representation
     * of the response.
     */
    public function __toString()
    {
        return $this->body;
    }

}