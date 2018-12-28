<?php
namespace Payment\Common\Allin;

use Payment\Common\BaseStrategy;
use Payment\Common\PayException;
use Payment\Common\AllinConfig;
use Payment\Common\Allin\Data\ChargeData;

abstract class AliBaseStrategy implements BaseStrategy {
    /**
     * 支付宝的配置文件
     * @var AllinConfig $config
     */
    protected $config;

    /**
     * 用于支付数据
     * @var ChargeData $reqData
     */
    protected $chargeData;

    public function __construct(array $config)
    {
        try {
            $this->config = new AllinConfig($config);
        } catch (PayException $e) {
            throw $e;
        }
    }

    public function handle(array $data) {

    }
}