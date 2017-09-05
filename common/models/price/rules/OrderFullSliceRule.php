<?php
namespace common\models\price\rules;

use Yii;
use common\models\price\rules\OrderPriceRule;
use common\models\price\rules\PriceRuleInterface;
use yii\base\InvalidConfigException;

/**
 *
 */
class OrderFullSliceRule extends OrderPriceRule implements PriceRuleInterface
{
    public $fullValue = null;
    public $sliceValue = null;
    public $priceName = "元";
    public $existCouponSameTime = false;
    public function __construct($config = []){
        parent::__construct($config);
        $this->validate();
    }
    public function getId(){
        return "order_full_slice";
    }
    public function getNewPrice(){
        return $this->originPrice - $this->sliceValue;
    }
    public function getDescription(){
        return sprintf("满%s(%s)减%s(%s)%s",
            $this->fullValue/100,
            $this->priceName,
            $this->sliceValue/100,
            $this->priceName,
            !$this->existCouponSameTime ? ',不与优惠券同时使用' : ''
        );
    }
    public function getType(){
        return self::TYPE_GLOBAL_ORDER_PRICE_DISCOUNT;
    }
    public function checkCanUse(){
        return $this->originPrice >= $this->fullValue;
    }

    public function validate(){
        if(
            null === $this->fullValue ||
            null == $this->sliceValue
        ){
            throw new InvalidConfigException(Yii::t('app', "参数配置不正确"));
        }
    }
    public function fields(){
        return array_merge(parent::fields(), [
            'newPrice'
        ]);
    }
}
