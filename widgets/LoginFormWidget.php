<?php

namespace app\widgets;


use app\models\LoginForm;
use app\models\SignupForm;
use Yii;
use yii\base\Widget;
use yii\web\Controller;
use yii\web\Response;




class LoginFormWidget extends Widget
{
    public function run() {
        if (Yii::$app->user->isGuest) {
            $model = new LoginForm();
            Yii::$app->assetManager->bundles = [
                'yii\bootstrap\BootstrapPluginAsset' => false,
                'yii\bootstrap\BootstrapAsset' => false,
                'yii\web\JqueryAsset' => false,
            ];
            return $this->render('loginFormWidget', compact('model'));
        } else {
            return false;
        }
    }
}