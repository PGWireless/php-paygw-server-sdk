<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 * Represents an HTTP protocol error in the 400 range: "It's not you, it's me".
 *
 * Occurs when the client sends a malformed request, has not authenticated correctly,
 * or is requesting a URL that doesn't exist.
 *
 * - 400 Bad Request
 * - 401 Unauthorized
 * - 402 Payment Required
 * - 403 Forbidden
 * - 404 Not Found
 * - 405 Method Not Allowed
 * - 406 Not Acceptable
 * - 407 Proxy Authentication Required4
 * - 408 Request Time-Out
 * - 409 Conflict
 * - 410 Gone
 * - 411 Length Required
 * - 412 Precondition Failed
 * - 413 Request Entity Too Large
 * - 414 Request-URL Too Large
 * - 415 Unsupported Media Type
 * - 416 Requested Range not satisfiable
 * - 417 Expectation failed
 */

namespace PG\paySDK\http;

class ClientError extends ProtocolError {}