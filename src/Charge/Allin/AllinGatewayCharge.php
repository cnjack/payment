<?php
/**
 * Created by PhpStorm.
 * User: cnjack
 * Date: 2018-12-28
 * Time: 17:42
 */
namespace Payment\Charge\Allin;

use Payment\Common\BaseStrategy;
use Payment\Common\Allin\AliBaseStrategy;
use Payment\Common\Allin\Data\ChargeData;

class AllinGatewayCharge extends AliBaseStrategy {
    public function getBuildDataClass() {
        return ChargeData::class;
    }
}