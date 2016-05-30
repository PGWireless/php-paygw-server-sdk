<?php
/**
 * 异步通知处理逻辑
 *
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK;

use Exception;

/**
 * 异步通知类
 *
 * Class Notify
 * @package \PG\paySDK
 */
class Notify extends Base
{
    /**
     * @var array $notifyMessage;
     */
    public $notifyMessage;

    /**
     * 构造方法
     *
     * @param string $bizId 商户ID
     * @param string $mode 访问环境
     * @param string $privateKey 商户私钥
     * @param array $notifyMessage 异步通知参数
     * @param string $publicKey 商户公钥
     */
    public function __construct($bizId = '', $mode = 'live', $privateKey = '', $notifyMessage = [], $publicKey = '')
    {
        if (!empty($notifyMessage)) {
            $this->setNotifyMessage($notifyMessage);
        }
        parent::__construct($bizId, $mode, $privateKey, $publicKey);
    }

    /**
     * 设置异步通知参数
     *
     * @param array $notifyMessage 异步通知参数
     * @return mixed
     * @throws Exception
     */
    public function setNotifyMessage($notifyMessage)
    {
        if (!$this->verifyRSASign($notifyMessage)) {
            throw new Exception($notifyMessage['notify_type'] . ': 验证签名失败');
        }

        $this->notifyMessage = $notifyMessage;

        return $this;
    }

    /**
     * 获取异步通知参数
     *
     * @param void
     * @return array
     */
    public function getNotifyMessage()
    {
        return $this->notifyMessage;
    }

    /**
     * 判断是否支付成功
     *
     * @param array $notifyMessage 支付异步通知参数
     * @return bool
     */
    public function isPaySuccess($notifyMessage = [])
    {
        if (!empty($notifyMessage)) {
            $this->setNotifyMessage($notifyMessage);
        }

        return (isset($this->notifyMessage['trade_status']) &&
            $this->notifyMessage['trade_status'] == C360_PAY_SDK_TRADE_STATUS_SUCCESS);
    }

    /**
     * 判断是否已处理退款
     *
     * @param array $notifyMessage 支付异步通知参数
     * @return bool
     */
    public function isRefundHandled($notifyMessage = [])
    {
        if (!empty($notifyMessage)) {
            $this->setNotifyMessage($notifyMessage);
        }

        return (isset($this->notifyMessage['refund_status']) &&
            $this->notifyMessage['refund_status'] == C360_PAY_SDK_REFUND_STATUS_WAITING);
    }

    /**
     * 判断是否退款成功
     *
     * @param array $notifyMessage 支付异步通知参数
     * @return bool
     */
    public function isRefundSuccess($notifyMessage = [])
    {
        if (!empty($notifyMessage)) {
            $this->setNotifyMessage($notifyMessage);
        }

        return (isset($this->notifyMessage['refund_status']) &&
            $this->notifyMessage['refund_status'] == C360_PAY_SDK_REFUND_STATUS_SUCCESS);
    }
}
