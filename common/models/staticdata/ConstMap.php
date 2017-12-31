<?php
namespace common\models\staticdata;

use Yii;
use yii\base\Object;
use yii\base\InvalidParamException;


/**
 *
 */
class ConstMap extends Object
{
	public static $map = [];
	public static function getConst($name = null, $onlyValue = false){
		if(empty(self::$map)){
			self::$map = require(Yii::getAlias("@common/models/staticdata/data/const_map.php"));
		}
		if(!$name){
			return self::$map;
		}
		if(!array_key_exists($name, self::$map)){
			throw new InvalidParamException("{$name} 不存在");
		}
		return $onlyValue ? array_keys(self::$map[$name]) : self::$map[$name];
	}
	public static function getLabels(){
		$data = require(Yii::getAlias('@common/models/staticdata/data/const_labels.php'));
		return $data;
	}
}
