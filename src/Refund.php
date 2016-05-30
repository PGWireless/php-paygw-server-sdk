<?php
/**
 * 退款逻辑的接口
 *
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK;

use Exception;

/**
 * 支付接口类
 *
 * Class Fefund
 * @package \PG\paySDK
 */
class Fefund extends Base
{
    /**
     * 构造方法
     *
     * @param string $bizId 商户ID
     * @param string $mode 访问环境
     * @param string $privateKey 商户私钥
     * @param string $publicKey 商户公钥
     */
    public function __construct($bizId = '', $mode = 'live', $privateKey = '', $publicKey = '')
    {
        parent::__construct($bizId, $mode, $privateKey, $publicKey);
    }

    public function create(array $payLoad, $timeout = 10)
    {
        $payLoad['biz_id'] = $this->bizId;
        $this->checkNecessaryParams($payLoad);
        $this->checkRefundNecessaryParams($payLoad);

        $refund = $this->callApi(self::PAYGW_API_REFUND_CREATE, $payLoad, $timeout);
        return $refund['data'];
    }

    public function checkRefundNecessaryParams($payLoad)
    {
        if (empty($payLoad['out_refund_no'])) {
            throw new Exception('缺少必要参数（out_refund_no）');
        }

        if (empty($payLoad['reason'])) {
            throw new Exception('缺少必要参数（reason）');
        }

        if (empty($payLoad['total_fee'])) {
            throw new Exception('缺少必要参数（total_fee）');
        }

        if (empty($payLoad['refund_fee'])) {
            throw new Exception('缺少必要参数（refund_fee）');
        }

        if ($payLoad['total_fee'] <= 0 ) {
            throw new Exception('total_fee参数必须为大于0的整数');
        }

        if ($payLoad['refund_fee'] <= 0 ) {
            throw new Exception('refund_fee参数必须为大于0的整数');
        }

        if ($payLoad['total_fee'] < $payLoad['refund_fee']) {
            throw new Exception('refund_fee参数必须小于等于total_fee');
        }

        return true;
    }
}
