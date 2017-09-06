<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\FileHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use common\helpers\ChinaAreaHelper;
use PhpAmqpLib\Message\AMQPMessage;


class ToolController extends Controller{
    public $is_test = false;
    public function actionDemo(){
        $string = ChinaAreaHelper::parseAreaIdAsString("19:1607:3155");
        $string2 = ChinaAreaHelper::validateAreaId("19:1607:3155");
        console($string, $string2);

    }
    public function options($actionID)
    {
        return array_merge(
            parent::options($actionID),
            ['is_test']
        );
    }
    public function actionOneConfig($app){
        $config = ArrayHelper::merge(
            require(Yii::getAlias('@common/config/merge_config.php')),
            require(Yii::getAlias("@{$app}/config/merge_config.php"))
        );
        ksort($config);
        file_put_contents(
            Yii::getAlias(sprintf("@{$app}/config/application%s.php", $this->is_test ? '-test' : '')),
            sprintf("<?php\nreturn %s;", VarDumper::export($config))
        );
    }
    public function actionDecode($string = '', $type = 'json'){
        echo json_decode('"' . $string . '"');
        echo "\n";
    }
    public function actionPublish(){
        $conn = Yii::$app->amqpConn;
        $channel = $conn->channel();
        $channel->queue_declare('email-job', false, true, false, false);
        $msg = new AMQPMessage(json_encode([
            'f_id' => 1
        ]), ['delivery_mode' => 2]);
        $channel->basic_publish($msg, '', 'email-job');
    }

}
