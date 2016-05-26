<?php
/**
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 *
 * Represents an HTTP protocol error in the 500 range: "It's not me, it's you".
 *
 * Generally indicates that an error condition happened on the server, either
 * broken application code, or too many requests bringing it down.
 *
 * - 500 Server Error
 * - 501 Not Implemented
 * - 502 Bad Gateway
 * - 503 Out of Resources
 * - 504 Gateway Time-Out
 * - 505 HTTP Version not supported
 */

namespace PG\paySDK\http;

class ServerError extends ProtocolError {}