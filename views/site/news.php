<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu news-vacancies"></div>
<?php Pjax::begin();?>
<?php  Pjax::end() ?>
 <div class="events-sec">
    <div class="container">

        <a name="category2"><h3 class="tittle" >Вакансии</h3></a>

         <?php Pjax::begin(); foreach ($vacancies as $vacancy): ?>
         <div class="event-grids">

            <div class="col-md-4 event-grid wow fadeInRight animated" data-wow-delay=".5s">
                <div class="date">
                    <h4><?= date('d', strtotime($vacancy->date)); ?></h4>
                    <span><?= date('m/Y', strtotime($vacancy->date)); ?></span>
                    <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true">  <?= (int)$vacancy->viewed; ?></span></p>
                </div>
                <div class="event-info">
                    <h4><a href="<?=\yii\helpers\Url::toRoute(['site/single', 'id' => $vacancy->id]) ?>"><?= $vacancy->title; ?></a></h4>
                    <p><?= $vacancy->description; ?></p>

                </div>
            </div>

        </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>

            <?php
                echo LinkPager::widget([
                'pagination' => $vacanciesPages,
            ]);
            Pjax::end();
            ?>

    </div>
</div>
<!-- //events -->
<!-- news -->
<div class="news">
    <div class="container">
        <div class="news-text">
            <a name="category1"><h3>Новости компании</h3></a>
        </div>
        <?php Pjax::begin(['enablePushState' => true]); $i = 0; foreach ($articles as $article): ?>
            <div class="news-grids">
                <div class="col-md-3 news-grid mask wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="<?=\yii\helpers\Url::to(['site/single', 'id' => $article->id]) ?>" class="mask"><img src="<?= $article->getImage();?>" alt="image" class="img-responsive zoom-img"></a>
                    <span><?= date('d-m-Y', strtotime($article->date)); ?></span>

                    <div class="news-info">
                        <h4><a href="<?=\yii\helpers\Url::toRoute(['site/single', 'id' => $article->id]) ?>"><?= $article->title; ?></a></h4>
                        <p><?= $article->description; ?></p>
                        <a href=<?=\yii\helpers\Url::toRoute(['site/single', 'id' => $article->id]) ?>">Читать больше
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true">  <?= $article->viewed; ?></span>
                        </a>

                    </div>
                </div>

            </div>
            <?php if($i == 3){
                     echo '<div class="clearfix"> </div>';
                }
            ?>
        <?php $i++; endforeach;?>
        <div class="clearfix"> </div>
        <?php

            echo LinkPager::widget([
                'pagination' => $pages,
             ]);
            Pjax::end();
        ?>
    </div>
</div>

<!-- //news -->