<?php
use yii\helpers\Html;

$this->title = 'Активация';
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow'
]);

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container activation">
    <div class="row">
        <div class="col-lg-offset-1 col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="top_block white">
                <div class="content">
                    <?=$text?>
                </div>
            </div>
        </div>
    </div>
</div>