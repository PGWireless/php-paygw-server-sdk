<?php
/**
 * 对接支付逻辑的接口
 *
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK;

use Exception;

/**
 * 支付接口类
 *
 * Class Pay
 * @package \PG\paySDK
 */
class Pay extends Base
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

    /**
     * 请求支付中心，创建支付订单
     *
     * @param array $payLoad 支付订单信息,结构如下:
     $payLoad = [
        'biz_id'        => 1, // 商户ID
        'way'           => 101, // 支付方式
        'currency'      => 'CNY', // 货币类型
        'out_trade_no'  => '2016052523310222327', // 商户订单号
        'subject'       => 'Camera360商城订单', // 订单标题
        'body'          => '超级可爱的大白', // 订单正文
        'total_fee'     => 99900, // 总共的费用
        'expire_second' => 3600, // 支付的有效时间
        'user_id'       => '2323232', // 用户ID,可自定义,但不能为空
        'user_name'     => '长风', // 用户名,可自定义,但不能为空
        'client_ip'     => '129.33.56.21', // 用户支付的IP
     ]
     * @param int $timeout 请求接口超时时间,默认10s
     * @return mixed
     * @throws Exception
     */
    public function create(array $payLoad, $timeout = 10)
    {
        $payLoad['biz_id'] = $this->bizId;
        $this->checkNecessaryParams($payLoad);
        $this->checkPayNecessaryParams($payLoad);

        // 微信公众号传递openid
        if ($payLoad['way'] == C360_PAY_SDK_WAY_WEICHAT_WP) {
            if (empty($payLoad['openid'])) {
                throw new Exception('微信公众号支付必须先获取微信用户的openid');
            }
        }

        $pay = $this->callApi(self::PAYGW_API_PAY_CREATE, $payLoad, $timeout);
        if ($pay['data']['trade']['way'] == C360_PAY_SDK_WAY_ALIPAY_APP_SDK) {
            $pay['data']['sdk']['order_info'] = $pay['data']['sdk']['order_info'] . '&sign="' . $pay['data']['sdk']['sign'] . '"&sign_type="' . $pay['data']['sdk']['sign_type'] . '"';
            unset($pay['data']['sdk']['sign']);
            unset($pay['data']['sdk']['sign_type']);
        }

        return $pay['data'];
    }

    /**
     * 查询订单支付情况
     *
     * @param array $payLoad 待查询的订单信息,结构如下:
     $payLoad = [
        'biz_id'        => 1, // 商户ID
        'way'           => 101, // 支付方式
        'out_trade_no'  => '2016052523310222327', // 商户订单号
     ]
     * @param int $timeout 请求接口超时时间,默认10s
     *
     * @return mixed
     * @throws Exception
     */
    public function query(array $payLoad, $timeout = 10)
    {
        $payLoad['biz_id'] = $this->bizId;
        $this->checkNecessaryParams($payLoad);
        $query = $this->callApi(self::PAYGW_API_PAY_QUERY, $payLoad, $timeout);

        return $query['data'];
    }

    public function checkPayNecessaryParams($payLoad)
    {
        if (empty($payLoad['subject'])) {
            throw new Exception('缺少必要参数（subject）');
        }

        if (empty($payLoad['body'])) {
            throw new Exception('缺少必要参数（body）');
        }

        if (empty($payLoad['total_fee'])) {
            throw new Exception('缺少必要参数（total_fee）');
        }

        if (empty($payLoad['user_id'])) {
            throw new Exception('缺少必要参数（user_id）');
        }

        if (empty($payLoad['user_name'])) {
            throw new Exception('缺少必要参数（user_name）');
        }

        if (empty($payLoad['client_ip'])) {
            throw new Exception('缺少必要参数（client_ip）');
        }

        return true;
    }
}
