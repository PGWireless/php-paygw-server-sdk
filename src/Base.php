<?php
/**
 * Camera360支付网关SDK基类
 *
 * @author xudianyang<xudianyang@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\paySDK;

//<-----------------------------分隔线----------------------------->//
/**
 * 支付方式-支付宝支付编码
 */
define('C360_PAY_SDK_WAY_ALIPAY_APP_SDK', 101);
/**
 * 支付方式-支付宝支付编码描述
 */
define('C360_PAY_SDK_WAY_ALIPAY_APP_SDK_STR', '支付宝SDK支付');
/**
 * 支付方式-支付宝WAP支付编码
 */
define('C360_PAY_SDK_WAY_ALIPAY_WAP', 102);
/**
 * 支付方式-支付宝WAP支付编码描述
 */
define('C360_PAY_SDK_WAY_ALIPAY_WAP_STR', '支付宝WAP支付');
/**
 * 支付方式-支付宝扫码支付编码
 */
define('C360_PAY_SDK_WAY_ALIPAY_QR', 103);
/**
 * 支付方式-支付宝扫码支付编码描述
 */
define('C360_PAY_SDK_WAY_ALIPAY_QR_STR', '支付宝扫码支付');
/**
 * 支付方式-支付宝PC支付编码
 */
define('C360_PAY_SDK_WAY_ALIPAY_PC', 104);
/**
 * 支付方式-支付宝PC支付编码描述
 */
define('C360_PAY_SDK_WAY_ALIPAY_PC_STR', '支付宝PC支付');
/**
 * 支付方式-支付宝网银支付编码
 */
define('C360_PAY_SDK_WAY_ALIPAY_BINK', 105);
/**
 * 支付方式-支付宝网银支付编码描述
 */
define('C360_PAY_SDK_WAY_ALIPAY_BINK_STR', '支付宝网银支付');
/**
 * 支付方式-微信支付编码
 */
define('C360_PAY_SDK_WAY_WEICHAT_APP_SDK', 201);
/**
 * 支付方式-微信支付编码描述
 */
define('C360_PAY_SDK_WAY_WEICHAT_APP_SDK_STR', '微信支付');
/**
 * 支付方式-微信支付编码
 */
define('C360_PAY_SDK_WAY_WEICHAT_WP', 202);
/**
 * 支付方式-微信支付编码描述
 */
define('C360_PAY_SDK_WAY_WEICHAT_WP_STR', '微信公众号支付');
/**
 * 支付方式-微信扫码支付编码
 */
define('C360_PAY_SDK_WAY_WEICHAT_QR', 203);
/**
 * 支付方式-微信扫码支付编码描述
 */
define('C360_PAY_SDK_WAY_WEICHAT_QR_STR', '微信扫码支付');
/**
 * 支付方式-跨境支付molpoints编码
 */
define('C360_PAY_SDK_WAY_MOLPOINTS', 301);
/**
 * 支付方式-跨境支付molpoints编码描述
 */
define('C360_PAY_SDK_WAY_MOLPOINTS_STR', 'MOLPoints');
/**
 * 支付方式-跨境支付PAYSBUY编码
 */
define('C360_PAY_SDK_WAY_PAYSBUY', 401);
/**
 * 支付方式-跨境支付PAYSBUY编码描述
 */
define('C360_PAY_SDK_WAY_PAYSBUY_STR', 'PAYSBUY');
/**
 * 支付方式-跨境支付PAYSBUY编码
 */
define('C360_PAY_SDK_WAY_PAYPAL', 501);
/**
 * 支付方式-跨境支付PAYSBUY编码描述
 */
define('C360_PAY_SDK_WAY_PAYPAL_STR', 'PAYPAL');
/**
 * 支付方式-跨境支付VISA信用卡编码
 */
define('C360_PAY_SDK_WAY_VISA', 601);
/**
 * 支付方式-跨境支付VISA信用卡编码描述
 */
define('C360_PAY_SDK_WAY_VISA_STR', 'VISA');
/**
 * 支付方式-跨境支付MASTERCARD信用卡编码
 */
define('C360_PAY_SDK_WAY_MASTERCARD', 701);
/**
 * 支付方式-跨境支付VISA信用卡编码描述
 */
define('C360_PAY_SDK_WAY_MASTERCARD_STR', 'MASTERCARD');
/**
 * 支付方式-Apple Store应用内支付编码
 */
define('C360_PAY_SDK_WAY_IAP_AS', 801);
/**
 * 支付方式-Apple Store应用内支付编码描述
 */
define('C360_PAY_SDK_WAY_IAP_AS_STR', 'APPLE_STORE');
/**
 * 支付方式-Google Play应用内支付编码
 */
define('C360_PAY_SDK_WAY_IAP_GP', 901);
/**
 * 支付方式-Google Play应用内支付编码描述
 */
define('C360_PAY_SDK_WAY_IAP_GP_STR', 'GOOGLE_PLAY');
/**
 * 支付方式-2c2p内支付编码
 */
define('C360_PAY_SDK_WAY_2C2P', 1001);
/**
 * 支付方式-2c2p内支付编码描述
 */
define('C360_PAY_SDK_WAY_2C2P_STR', '2C2P');
//<-----------------------------分隔线----------------------------->//
/**
 * 支付订单状态-未支付编码
 */
define('C360_PAY_SDK_TRADE_STATUS_UNPAY', 101);
/**
 * 支付订单状态-未支付编码描述
 */
define('C360_PAY_SDK_TRADE_STATUS_UNPAY_STR', '未支付');
/**
 * 支付订单状态-已支付编码
 */
define('C360_PAY_SDK_TRADE_STATUS_SUCCESS', 201);
/**
 * 支付订单状态-已支付编码描述
 */
define('C360_PAY_SDK_TRADE_STATUS_SUCCESS_STR', '已支付');
/**
 * 支付订单状态-已支付不可退款编码
 */
define('C360_PAY_SDK_TRADE_STATUS_FINISH', 202);
/**
 * 支付订单状态-已支付不可退款编码描述
 */
define('C360_PAY_SDK_TRADE_STATUS_FINISH_STR', '已支付不可退款');
/**
 * 支付订单状态-交易不存在（第三方支付系统中）编码
 */
define('C360_PAY_SDK_TRADE_STATUS_NOT_EXISTS', 301);
/**
 * 支付订单状态-交易不存在（第三方支付系统中）编码描述
 */
define('C360_PAY_SDK_TRADE_STATUS_NOT_EXISTS_STR', '交易不存在（第三方支付系统中）');
/**
 * 支付订单状态-行为未定义编码
 */
define('C360_PAY_SDK_TRADE_STATUS_UN_KNOWN', 901);
/**
 * 支付订单状态-行为未定义编码描述
 */
define('C360_PAY_SDK_TRADE_STATUS_UN_KNOWN_STR', '行为未定义');
//<-----------------------------分隔线----------------------------->//
/**
 * 异步通知类型-支付异步通知
 */
define('C360_PAY_SDK_NOTIFY_TYPE_TRADE_STATUS_ASYNC', 'TRADE_STATUS_ASYNC');
/**
 * 异步通知类型-退款异步通知
 */
define('C360_PAY_SDK_NOTIFY_TYPE_REFUND_STATUS_ASYNC', 'REFUND_STATUS_ASYNC');
/**
 * 异步通知类型-转账异步通知
 */
define('C360_PAY_SDK_NOTIFY_TYPE_TRANSFER_STATUS_ASYNC', 'TRANSFER_STATUS_SYNC');
//<-----------------------------分隔线----------------------------->//
/**
 * 支付网关和第三方支付系统-微信预支付请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_PREPARE_PAY', 'WEIXIN_PREPARE_PAY');
/**
 * 支付网关和第三方支付系统-微信支付查询订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_PAY_QUERY', 'WEIXIN_PAY_QUERY');
/**
 * 支付网关和第三方支付系统-微信支付退款订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_REFUND', 'WEIXIN_REFUND');
/**
 * 支付网关和第三方支付系统-微信支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_PAY_ASYNC', 'WEIXIN_PAY_ASYNC');
/**
 * 支付网关和第三方支付系统-支付宝支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_PAY_ASYNC', 'ALIPAY_PAY_ASYNC');
/**
 * 支付网关和第三方支付系统-支付宝退款请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_REFUND', 'ALIPAY_REFUND');
/**
 * 支付网关和第三方支付系统-支付宝退款异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_REFUND_ASYNC', 'ALIPAY_REFUND_ASYNC');
/**
 * 支付网关和第三方支付系统-支付宝转账异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_TRANSFER_ASYNC', 'ALIPAY_TRANSFER_ASYNC');
/**
 * 支付网关和第三方支付系统-支付宝查询订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_PAY_QUERY', 'ALIPAY_PAY_QUERY');
/**
 * 支付网关和第三方支付系统-支付宝支付退款订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALIPAY_PAY_REFUND', 'ALIPAY_PAY_REFUND');
/**
 * 支付网关和第三方支付系统-PAYSSION支付请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYSSION_PAY', 'PAYSSION_PAY');
/**
 * 支付网关和第三方支付系统-PAYSSION支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYSSION_PAY_ASYNC', 'PAYSSION_PAY_ASYNC');
/**
 * 支付网关和第三方支付系统-Paypal执行支付回调
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_EXECUTION_PAY_CALLBACK', 'PAYPAL_EXECUTION_PAY_CALLBACK');
/**
 * 支付网关和第三方支付系统-Paypal预支付请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_PREPARE_PAY', 'PAYPAL_PREPARE_PAY');
/**
 * 支付网关和第三方支付系统-Paypal支付请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_PAY', 'PAYPAL_PAY');
/**
 * 支付网关和第三方支付系统-Paypal支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_PAY_ASYNC', 'PAYPAL_PAY_ASYNC');
/**
 * 支付网关和第三方支付系统-Paypal验证支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_PAY_VERIFY_ASYNC', 'PAYPAL_PAY_VERIFY_ASYNC');
/**
 * 支付网关和第三方支付系统-PAYPAL查询订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYPAL_PAY_QUERY', 'PAYPAL_PAY_QUERY');
/**
 * 支付网关和第三方支付系统-PAYSSION查询订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_PAYSSION_PAY_QUERY', 'PAYSSION_PAY_QUERY');

/**
 * 客户端和第三方支付系统-支付宝支付成功回执.
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALI_PAY_SYNC_SUCCESS', 'ALI_PAY_SYNC_SUCCESS');
/**
 * 客户端和第三方支付系统-微信支付成功回执.
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_PAY_SYNC_SUCCESS', 'WEIXIN_PAY_SYNC_SUCCESS');

/**
 * 客户端和第三方支付系统-支付宝支付成功回执.
 */
define('C360_PAY_SDK_THIRD_PART_LOG_ALI_PAY_SYNC_ERROR', 'ALI_PAY_SYNC_ERROR');
/**
 * 客户端和第三方支付系统-微信支付成功回执.
 */
define('C360_PAY_SDK_THIRD_PART_LOG_WEIXIN_PAY_SYNC_ERROR', 'WEIXIN_PAY_SYNC_ERROR');

/**
 * 支付网关和第三方支付系统-2c2p创建订单请求
 */
define('C360_PAY_SDK_THIRD_PART_LOG_2C2P_PAY', '2C2P_PAY');
/**
 * 支付网关和第三方支付系统-2c2p支付异步通知
 */
define('C360_PAY_SDK_THIRD_PART_LOG_2C2P_PAY_ASYNC', '2C2P_PAY_ASYNC');
//<-----------------------------分隔线----------------------------->//
/**
 * 退款订单状态-待处理编码
 */
define('C360_PAY_SDK_REFUND_STATUS_PREPARE', 101);
/**
 * 退款订单状态-待处理编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_PREPARE_STR', '待处理');
/**
 * 退款订单状态-已处理编码
 */
define('C360_PAY_SDK_REFUND_STATUS_WAITING', 201);
/**
 * 退款订单状态-已处理编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_WAITING_STR', '已处理');
/**
 * 退款订单状态-退款失败编码
 */
define('C360_PAY_SDK_REFUND_STATUS_FAILED', 301);
/**
 * 退款订单状态-退款失败编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_FAILED_STR', '退款失败');
/**
 * 退款订单状态-退款成功编码
 */
define('C360_PAY_SDK_REFUND_STATUS_SUCCESS', 401);
/**
 * 退款订单状态-退款成功编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_SUCCESS_STR', '退款成功');
/**
 * 退款订单状态-有退款进行中编码
 */
define('C360_PAY_SDK_REFUND_STATUS_WAIT', 501);
/**
 * 退款订单状态-退款成功编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_WAIT_STR', '有退款进行中');
/**
 * 退款订单状态-退款成功编码
 */
define('C360_PAY_SDK_REFUND_STATUS_NO', 801);
/**
 * 退款订单状态-退款成功编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_NO_STR', '无退款');
/**
 * 退款订单状态-行为未定义编码
 */
define('C360_PAY_SDK_REFUND_STATUS_UN_KNOWN', 901);
/**
 * 退款订单状态-行为未定义编码描述
 */
define('C360_PAY_SDK_REFUND_STATUS_UN_KNOWN_STR', '行为未定义');
//<-----------------------------分隔线----------------------------->//

/**
 * 支付数据模型
 *
 * Class Base
 * @package \PG\paySDK
 */
class Base
{
    /**
     * 版本
     */
    const VERSION = '1.0.0';

    /**
     * Camera360支付网关公钥
     */
    const PAYGW_PUBLIC_KEY = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDgJqx9mv2y4N0hEFHSnke/VavI
sLndZRQxNedjIs+VP5k5XQNyqvRaZBGPgw/xolWmKd1+htlwuiJ3mNRUuJAURbFN
DOONqlWXtDa7Uzf5G4dRqa+ZhUOofb4mGF/aR4ucyXVY4IXm6+cmDbrTxoeyc71a
8AbcCDGLtH/suXOykwIDAQAB
-----END PUBLIC KEY-----';

    /**
     * 支付创建订单接口ID
     */
    const PAYGW_API_PAY_CREATE = 'api/pay/create';

    /**
     * 支付查询接口ID
     */

    const PAYGW_API_PAY_QUERY = 'api/pay/query';

    /**
     * 支付退款接口ID
     */

    const PAYGW_API_REFUND_CREATE = 'api/refund/create';

    /**
     * 商户查询订单接口ID
     */

    const PAYGW_API_ORDER_LIST = 'api/biz/order-list';

    /**
     * 支付网关生产环境
     */
    const LIVE = 'https://paygw.camera360.com/';

    /**
     * 支付网关沙盒环境
     */
    const SANDBOX = 'https://paygw-qa.camera360.com/';

    /**
     * @var array 支付方式
     */
    public $ways = [
        C360_PAY_SDK_WAY_ALIPAY_APP_SDK   => ['CNY'],
        C360_PAY_SDK_WAY_ALIPAY_WAP       => ['CNY'],
        C360_PAY_SDK_WAY_ALIPAY_QR        => ['CNY'],
        C360_PAY_SDK_WAY_ALIPAY_PC        => ['CNY'],
        C360_PAY_SDK_WAY_ALIPAY_BINK      => ['CNY'],
        C360_PAY_SDK_WAY_WEICHAT_APP_SDK  => ['CNY'],
        C360_PAY_SDK_WAY_WEICHAT_WP       => ['CNY'],
        C360_PAY_SDK_WAY_WEICHAT_QR       => ['CNY'],
        C360_PAY_SDK_WAY_MOLPOINTS        => ['THB', 'USD'],
        C360_PAY_SDK_WAY_PAYSBUY          => ['THB', 'USD'],
        C360_PAY_SDK_WAY_PAYPAL           => ['CNY', 'USD', 'THB', 'JPY'],
        C360_PAY_SDK_WAY_VISA             => ['CNY', 'USD', 'THB', 'JPY'],
        C360_PAY_SDK_WAY_MASTERCARD       => ['CNY', 'USD', 'THB', 'JPY'],
        C360_PAY_SDK_WAY_IAP_AS           => ['CNY', 'USD', 'THB', 'JPY'],
        C360_PAY_SDK_WAY_IAP_GP           => ['CNY', 'USD', 'THB', 'JPY'],
        C360_PAY_SDK_WAY_2C2P             => ['THB'],
    ];

    /**
     * @var int 商户ID
     */
    public $bizId;

    /**
     * @var string 商户公钥
     */
    public $bizPublicKey = '';

    /**
     * @var string 商户私钥
     */
    public $bizPrivateKey = '';

    /**
     * @var string 访问的环境,live表示生产环境,sandbox表示测试的沙盒环境
     */
    public $mode = 'live';


    /**
     * 构造方法
     *
     * @param string $bizId 商户ID
     * @param string $mode 访问环境
     * @param string $privateKey 商户私钥
     * @param string $publicKey 商户公钥
     */
    public function __construct($bizId = '', $mode = '', $privateKey = '', $publicKey = '')
    {
        $this->bizId         = $bizId;
        $this->mode          = $mode;
        $this->bizPrivateKey = $privateKey;
        $this->bizPublicKey  = $publicKey;
    }

    /**
     * 设置商户ID
     *
     * @param string $bizId
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->bizId = $bizId;

        return $this;
    }

    /**
     * 设置商户RSA私钥
     *
     * @param string $privateKey 商户私钥
     * @return $this
     */
    public function setBizPrivateKey($privateKey)
    {
        $this->bizPrivateKey = $privateKey;

        return $this;
    }

    /**
     * 设置商户RSA公钥
     *
     * @param string $publicKey 商户公钥
     * @return $this
     */
    public function setBizPublicKey($publicKey)
    {
        $this->bizPublicKey = $publicKey;

        return $this;
    }

    /**
     * 获取服务地址
     *
     * @param string $apiId
     * @return string
     */
    public function getApiUrl($apiId)
    {
        $schemaHost = '';
        if (strtoupper($this->mode) == 'LIVE') {
            $schemaHost = self::LIVE;
        }

        if (strtoupper($this->mode) == 'SANDBOX') {
            $schemaHost = self::SANDBOX;
        }

        return $schemaHost . $apiId;
    }

    /**
     * 调用支付API
     *
     * @param string $api 接口ID
     * @param array $payLoad 订单信息
     * @param int $timeout 请求超时时间,默认为10s
     * @return mixed
     * @throws Exception
     */
    public function callApi($api, $payLoad, $timeout = 10)
    {
        $payLoad['pp_sign']      = $this->RSASign($payLoad);
        $payLoad['pp_sign_type'] = 'RSA';

        $client = new http\Client();
        $client->setTimeout($timeout);
        $client->post($this->getApiUrl($api), $payLoad);

        if (empty($client->getBody())) {
            throw new Exception('API: ' . $api . ', 接口请求超时,请重试');
        }

        $pay = json_decode($client->getBody(), true);
        // 接口未返回正常数据
        if (!is_array($pay)) {
            throw new Exception('API: ' . $api . ', 数据格式不正确,请联系Camera360官方解决');
        }

        // 验证签名
        if ($api == self::PAYGW_API_PAY_CREATE) {
            if (is_array($pay['data']) && !$this->verifyRSASign(array_merge($pay['data']['sdk'], $pay['data']['trade']))) {
                throw new Exception('API: ' . $api . ', 验证Camera360 Paygw签名失败');
            }
        } else {
            if (is_array($pay['data']) && !$this->verifyRSASign($pay['data'])) {
                throw new Exception('API: ' . $api . ', 验证Camera360 Paygw签名失败');
            }
        }

        // 系统异常
        if ($pay['errno']) {
            throw new Exception($pay['message']);
        }
        return $pay;
    }

    /**
     * 验证RSA签名（防伪）
     *
     * @param array $data 请求传递的数据
     * @return boolean
     */
    public function verifyRSASign(array $data)
    {
        if (empty($data['pp_sign'])) {
            return 0;
        }

        $sign = $data['pp_sign'];
        unset($data['pp_sign']);
        unset($data['pp_sign_type']);
        ksort($data);

        $message = '';
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $message .= $key . '=' . $value . '&';
        }
        $message     = substr($message, 0, -1);
        $publicKeyId = openssl_pkey_get_public(self::PAYGW_PUBLIC_KEY);
        $result      = openssl_verify($message, base64_decode($sign), $publicKeyId);
        openssl_free_key($publicKeyId);

        return $result;
    }

    /**
     * RSA签名数据
     *
     * @param array $data 待签名数据
     * @return string
     */
    public function RSASign(array $data)
    {
        ksort($data);

        $message = '';
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $message .= $key . '=' . $value . '&';
        }

        $message      = substr($message, 0, -1);
        $privateKeyId = openssl_pkey_get_private($this->bizPrivateKey);
        $signature    = '';
        openssl_sign($message, $signature, $privateKeyId);
        openssl_free_key($privateKeyId);

        return base64_encode($signature);
    }

    /**
     * 校验公共必要参数
     *
     * @param array $data 支付的订单信息
     * @return boolean
     * @throws Exception
     */
    public function checkNecessaryParams(array $data)
    {
        if (empty($data['biz_id'])) {
            throw new Exception('缺少必要参数（biz_id）');
        }

        if (empty($data['way'])) {
            throw new Exception('缺少必要参数（way）');
        }

        if (!isset($this->ways[$data['way']])) {
            throw new Exception('系统不支持该支付方式（way）');
        }

        if (empty($data['out_trade_no'])) {
            throw new Exception('缺少必要参数（out_trade_no）');
        }

        if (!ctype_alnum($data['out_trade_no'])) {
            throw new Exception('商户订单号无效（out_trade_no）[只能为字母和数字的组合]');
        }

        return true;
    }
}