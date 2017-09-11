<?php
namespace common\models\order\event;

use yii\base\Event;

/**
 *
 */
class AfterPayedEvent extends Event
{
    /**
     * \common\models\user\ar\User;
     * @var [type]
     */
    public $belongUser = null;

    /**
     * \common\models\pay\ar\PayTrace;
     * @var [type]
     */
    public $payOrder = null;

    /**
     * \common\models\trans\ar\Transaction;
     * @var [type]
     */
    public $trans = null;


}
