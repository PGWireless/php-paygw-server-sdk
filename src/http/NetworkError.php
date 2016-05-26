<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 *
 * Represents a failed network request, where the client is unable to successfully
 * connect to the HTTP endpoint.
 *
 * This happens when the network is down, the specified host doesn't exist, or something
 * went drastically wrong with the request internally to cURL.
 *
 * The error code in this case is the cURL error code constant capturing
 * a huge variety of error conditions not possible to cover in detail here (and probably
 * annoyingly different between different versions of cURL and PHP).
 *
 * @see http://curl.haxx.se/libcurl/c/libcurl-errors.html
 */

namespace PG\paySDK\http;

class NetworkError extends Exception {}