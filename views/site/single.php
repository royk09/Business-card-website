<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Новость';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- single page -->
<!--blog-starts-->
<div class="blog-section">
    <div class="container">

        <!--single-page-->
        <div class="banner-bdy sig">
            <div class="single">
                <div class="sing-img-text">
                    <img class="wow fadeInUp animated" data-wow-delay=".5s" src="<?= $article->getImage(); ?>" alt=" ">

                    <div class="sing-img-text1">
                        <h3> <?= $article->title;  ?></h3>
                        <div class="admin-tag1">
                            <p>Дата: <?= $article->getDate(); ?></p>
                        </div>
                        <p class="est wow fadeInUp animated" data-wow-delay=".5s">
                            <?= $article->content; ?>
                        </p>

                        <?= $this->renderAjax('/partials/comment', compact('article', 'comments', 'commentForm'))?>

                    </div>
                </div>

                <div class="sing-img-text-left">
                    <div class="blog-right1">

                        <div class="categories wow fadeInDown animated" data-wow-delay=".5s">
                            <h3>Категории</h3>
                            <ul>
                                <?php foreach ($categories as $category): ?>
                                    <li><a href="<?=Url::toRoute(['site/news#category'.$category->id]); ?>"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><?= $category->title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="related-posts">
                            <h3>Последние новости</h3>
                            <?php foreach ($relatedPosts as $relatedPost): ?>
                                <div class="related-post wow fadeInDown animated" data-wow-delay=".5s">
                                <div class="related-post-left">
                                    <a href="<?= Url::toRoute(['site/single', 'id' => $relatedPost->id]); ?>"><img src="<?= $relatedPost->getImage(); ?>" alt=" " /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="<?= Url::toRoute(['site/single', 'id' => $relatedPost->id]); ?>"><?= $relatedPost->title; ?></a></h4>
                                    <p><?= $relatedPost->description; ?>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>



            </div>
        </div>

        <!-- /single -->
    </div>
</div>
<!-- //single -->
<!-- //single page -->