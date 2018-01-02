<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-login">
    <div class="container">
        <div class="col-lg-offset-1 col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>

        </div>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form2',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email'),'autofocus' => true])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-6\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

        </div>
        <div class="col-lg-offset-1 col-lg-12">
            <p><a href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a></p>
            <?= AuthChoice::widget([
                'baseAuthUrl' => ['site/auth'],
            ]);

            ?>
        </div>
        </div>
    <?php ActiveForm::end(); ?>

</div>
