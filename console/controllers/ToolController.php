<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\FileHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use common\helpers\ChinaAreaHelper;
use PhpAmqpLib\Message\AMQPMessage;
use common\models\user\UserModel;


class ToolController extends Controller{
	public $is_test = false;
	public function actionGeneLabels(){
		$sql = "show tables";
		$result = Yii::$app->db->createCommand($sql)->queryAll();
		$labels = [];
		foreach($result as $item){
			$schema = Yii::$app->db->getTableSchema(array_pop($item));
			foreach($schema->columns as $column){
				if($column->comment){
					$labels[$column->name] = $column->comment;
				}else{
					$labels[$column->name] = $column->name;
				}
			}
		}
		$file = Yii::getAlias('@common/models/staticdata/data/const_labels.php');
		$content = sprintf("<?php\nreturn %s;", VarDumper::export($labels));
		file_put_contents($file, $content);
	}
	public function actionBulk(){
		// Yii::$app->db->beginTransaction();
		$max = 100;
		$default = [
			'u_username' => 'kitralzhong%s',
			'password' => 'philips',
			'password_confirm' => 'philips',
			'u_email' => 'kitralzhong%s@qq.com',
			'u_auth_status' => 'had_auth',
			'u_status' => 'active',

		];
		$i = 0;
		$uModel = new UserModel();
		while($i <= $max){
			$defaultData = $default;
			$defaultData['u_username'] = sprintf($defaultData['u_username'], $i);
			$defaultData['u_email'] = sprintf($defaultData['u_email'], $i);
			$uModel->createUser($defaultData);
			$i++;
			echo $defaultData['u_username'] . "\n";
		}
	}

	public function actionDemo(){
		$in = "/home/master/tmp/hse/animation01.mp4";
		$out = "/home/master/tmp/hse/01.mp4";
		$waterMark = "/home/master/tmp/hse/hse.png";
		$ffmpeg = \FFMpeg\FFMpeg::create();
		$video = $ffmpeg->open($in);
		$format = new \FFMpeg\Format\Video\X264();
		$format->on('progress', function ($video, $format, $percentage) {
			echo "$percentage % transcoded\n";
		});
		$format->setAudioCodec("aac")
			->setKiloBitrate(2496);

		$video->filters()
			// ->resize(new \FFMpeg\Coordinate\Dimension(1024, 768))
			->watermark($waterMark, array(
				'position' => 'relative',
				'bottom' => 50,
				'left' => 50,
			));
		$video->save($format, $out);
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
