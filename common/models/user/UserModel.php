<?php
namespace common\models\user;

use Yii;
use common\models\Model;
use common\models\user\ar\User;
use common\models\staticdata\Errno;
use yii\filters\auth\HttpBearerAuth;
use yii\web\ForbiddenHttpException;
use common\models\set\SetModel;
use Firebase\JWT\JWT;
use yii\helpers\ArrayHelper;
/**
 *
 */
class UserModel extends Model
{
    public function createUser($data){
        $user = new User();
        if(!$user->load($data, '') || !$user->validate()){
            $this->addError('', $this->getOneErrMsg($user));
            return false;
        }
        $user->u_auth_key = User::NOT_AUTH == $user->u_auth_status ?
                            static::buildAuthKey() : '';
        $user->u_status = User::NOT_AUTH == $user->u_auth_status ?
                            User::STATUS_NO_AUTH : $user->u_status;
        $user->u_password_hash = static::buildPasswordHash($user->password);
        $user->u_password_reset_token = '';
        $user->u_created_at = time();
        $user->u_updated_at = time();
        if(!$user->insert(false)){
            $this->addError('', Errno::DB_INSERT_FAIL);
            return false;
        }
        return $user;
    }
    public function validatePassword($user, $password){
        return Yii::$app->security->validatePassword($password, $user->u_password_hash);
    }

    // todo 出现多种的时候考虑分离成类来处理
    public static function parseAccessToken($token, $type){
        try {
            switch ($type) {
                case HttpBearerAuth::className():
                    $payload = JWT::decode($token, SetModel::get('jwt.secret_key'), SetModel::get('jwt.allow_algs'));
                    break;
                default:
                    throw new ForbiddenHttpException();
                    break;
            }
            return $payload;
        } catch (Exception $e) {
            throw $e;
        }
    }

    // todo 出现多种的时候考虑分离成类来处理
    public static function buildToken($data, $type){
        try {
            $token = null;
            switch ($type) {
                case HttpBearerAuth::className():
                    $issuedAt   = time();
                    $notBefore  = $issuedAt + 5;             //Adding 10 seconds
                    $expire     = ArrayHelper::getValue($data, 'token_info.expire', $notBefore + 7200);            // Adding 60 seconds
                    $serverName = ArrayHelper::getValue($data, 'token_info.server_name', Yii::$app->id); // Retrieve the server name from config file
                    $data = [
                        'iat'  => $issuedAt,         // Issued at: time when the token was generated
                        'jti'  => ArrayHelper::getValue($data, 'token_info.id', base64_encode(mcrypt_create_iv(32))),//base64_encode(mcrypt_create_iv(32)),          // Json Token Id: an unique identifier for the token
                        'iss'  => $serverName,       // Issuer
                        'nbf'  => $notBefore,        // Not before
                        'exp'  => $expire,           // Expire
                        'data' => $data
                    ];
                    $token = \Firebase\JWT\JWT::encode(
                            $data,      //Data to be encoded in the JWT
                            SetModel::get('jwt.secret_key'), // The signing key
                            SetModel::get('jwt.encode_alg')     // Algorithm used to sign the token, see https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40#section-3
                            );
                    break;
                default:
                    break;
            }
            return $token;
        } catch (\Exception $e) {
            Yii::error($e);
            return null;
        }
    }
    public static function handleAfterLogout($event){
        static::updateUserAccessToken($event->identity, '');
    }
    public function loginInSession($user, $remember = false){
        Yii::$app->user->login($user, $remember ? 3600 * 24 * 30 : 0);
        return true;
    }

    public function loginInAccessToken($user, $accessToken){
        static::updateUserAccessToken($user, $accessToken);
        Yii::$app->user->login($user);
        return true;
    }

    public static function updateUserAccessToken(User $user, $token){
        $user->u_access_token = $token;
        return $user->update(false);
    }

    protected static function buildPasswordHash($password){
        return Yii::$app->security->generatePasswordHash($password);;
    }
    public static function buildAccessToken(){
        return base64_encode(mcrypt_create_iv(32));
    }
    protected static function buildAuthKey(){
        return Yii::$app->security->generateRandomString();
    }


}