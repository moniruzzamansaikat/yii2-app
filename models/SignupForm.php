<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat'], 'required'],
            [['username', 'password'], 'string', 'min' => 3, 'max' => 15],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function signup()
    {
        $app                = Yii::$app;
        $user               = new User();
        $user->username     = $this->username;
        $user->password     = $app->security->generatePasswordHash($this->password);
        $user->auth_key     = $app->security->generateRandomString();
        $user->access_token = $app->security->generateRandomString();

        if ($user->save()) {
            return true;
        }

        \Yii::error('User was not saved. ' . VarDumper::dumpAsString($user->errors));

        return false;
    }
}
