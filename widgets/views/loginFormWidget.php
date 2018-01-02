<?php

use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;
?>

<?php
Modal::begin([
    'header'=>'<h4>Вход</h4>',
    'id'=>'login-modal',
    'options' => ['class' => 'col-md-12']
]);
?>
    <div class="row">
        <div  class = "col-md-7">
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['auth/ajax-login'],

]); ?>

<?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email'),'autofocus' => true])->label(false) ?>

<?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>

<?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "{input} {label}\n{error}",
]) ?>

    <div class="form-group">

            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::button('Отмена', ['class' => 'btn btn-dismiss', 'data-dismiss' => 'modal', 'aria-hidden' => true]); ?>

    </div>
        </div>

    <div class="col-md-5">
        <p>Войти как пользователь</p><br />
        <?= AuthChoice::widget([
            'baseAuthUrl' => ['site/auth'],
            'options' => ['class' => 'text-center'],
        ]);

        ?>
        <a href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a>
    </div>
    </div>
<?php
ActiveForm::end();
?>

    </div>
<?php
Modal::end();