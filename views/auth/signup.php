<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-signup">
    <div class="container">
        <div class="col-md-offset-3 col-lg-6 form-signup">
            <?php if(Yii::$app->session->hasFlash('signup')): ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?= Yii::$app->session->getFlash('signup'); ?>
                </div>
            <?php endif; ?>
        <div class="col-lg-12">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <!--Hide button for login-modal show after signup -->
            <button class="btn btn-primary btn-lg" id="btnTrigger" data-toggle="modal" data-target="#login-modal">
        </div>
        <?php $form = ActiveForm::begin([
            'id' => 'signup-form',


        ]); ?>
        <?= $form->field($model, 'name')->textInput() ?>

        <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput()?>

        <?= $form->field($model, 'passwordConfirm')->passwordInput() ?>

        <?php if($model->flagShowLoginForm){
            echo "<script>
                    window.onload = function(){
                            document.getElementById('btnTrigger').click();
    }
                </script>";
        }?>

        <div class="form-group">

                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
    </div>
</div>
