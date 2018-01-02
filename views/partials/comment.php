<div class="leave-a-comment wow fadeInUp animated" data-wow-delay=".5s">
    <?php use yii\helpers\Html;
 \yii\widgets\Pjax::begin(['enablePushState' => false]);
    if(!Yii::$app->user->isGuest): ?>
        <h3>Оставьте свой комментарий тут</h3>
        <?php if(Yii::$app->session->hasFlash('comment')): ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif; ?>

        <?php $form = \yii\widgets\ActiveForm::begin([
        'action' => ['site/comment', 'id' => $article->id],
        'options' => [ 'class' => 'form-horizontal','role'=>'form', 'data-pjax' => true]
    ])?>
        <?= $form->field($commentForm, 'comment')->textarea(['class' =>'form-control', 'placeholder' => 'Ваш комментарий'])->label(false)?>
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        <?php \yii\widgets\ActiveForm::end(); ?>

    <?php endif; ?>
    <div class="com">
        <h3 class="commant">Комментарии</h3>

        <?php if(!empty($comments)):?>
            <?php foreach ($comments as $comment):?>
                <ul class="media-list">
                    <li class="media wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="media-left">

                            <!--                                            <span class="glyphicon glyphicon-user"></span>-->
                            <img class="img-circle" src="<?= $comment->user['photo']?>" />
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?= $comment->user['name']?> <span>Дата: <?= $comment->getDate(); ?></span></h4>
                            <p><?= $comment->text?></p>

                        </div>
                    </li>
                </ul>
            <?php endforeach;?>
        <?php else: ?>
        <p>К данной статье комментариев пока нет.</p>
        <?php if(Yii::$app->user->isGuest):?>
               <p>
                   <a class="hvr-overline-from-left button2" data-toggle='modal' href="#login-modal">Войдите</a> или <?=Html::a(зарегистрируйтесь, '/auth/signup');  ?>, чтобы оставить комментарий.
               </p>
        <?php endif;?>
        <?php endif;?>
        <?php \yii\widgets\Pjax::end();?>
    </div>

</div>