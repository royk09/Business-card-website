<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;
use app\widgets\LoginFormWidget;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="_DRIqk1cKDd1_Mif_YnJ089ESYHFdqO-lfykyWaeCUc" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Обеспечение полного комплекса услуг дистрибьюции в Николаевской и Херсонской областях
                                        100% покрытие торговых точек в городе и области по всем каналам сбыта.
                                        Доставка товара клиентам в 24 часа">
    <meta name="keywords" content="Николаев, дистрибьюция Николаев, продукты, ЮЛК, Премиум, Южная Логистическая, АВК Николаев, ферреро, дистрибьютор, южный регион, миколаїв дистрибьютор">
    <link rel="shortcut icon" href="/web/public/images/logo.gif">
    <?= Html::csrfMetaTags() ?>
    <title>ИРБИС | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript" src="<?php echo \yii\helpers\Url::to('/web/public/js/jquery-2.1.4.min.js') ?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script src="<?php echo \yii\helpers\Url::to('/web/public/js/wow.min.js') ?>"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<!-- banner -->
<div class="banner-menu">
    <div class="container">
        <div class="header-nav wow fadeInDown animated" data-wow-delay=".5s">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand link link--yaku" href="/"><span>И</span><span>р</span><span>б</span><span>и</span><span>с</span>

                        </a>
                    </h1>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav ">
                            <li><a class="hvr-overline-from-left button2 nav-index" href="/">Главная</a></li>
                            <li><a class="hvr-overline-from-left button2 nav-about" href="/site/about">О нас</a></li>
                            <!--<li><a class="hvr-overline-from-left button2" href="shortcodes.html">Shortcodes</a></li>-->
                            <li><a class="hvr-overline-from-left button2 nav-gallery" href="/site/gallery">Галерея</a></li>
                            <li><a class="hvr-overline-from-left button2 nav-news-vacancies" href="/site/news">Новости</a></li>
                            <li><a class="hvr-overline-from-left button2 nav-contact" href="/site/contact">Контакты</a></li>
                            <?php if(Yii::$app->user->isGuest ): ?>
<!--                            <li><a class="hvr-overline-from-left button2" href="--><?//=Url::toRoute(['auth/login'])?><!--">Вход</a></li>-->
                                <li><a class="hvr-overline-from-left button2" data-toggle='modal' href="#login-modal">Вход</a></li>
                             <?php else: ?>
                            <li><a class="hvr-overline-from-left button2" href="<?=Url::toRoute(['auth/logout'])?>">Выход (<?= Yii::$app->user->identity['name']?>)</a></li>

                            <?php endif;?>
                        </ul>
                    </nav>
                </div><!-- /navbar-collapse -->
            </nav>
        </div>

    </div>
</div>

<?= $content ?>
<!-- //news -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="col-md-4 contact-left wow fadeInRight animated" data-wow-delay=".5s">
            <h3>Адрес</h3>
            <h2>ЮЛК</h2>
            <p>г. Николаев<br>
                ул. Космонавтов, 83а<br>
                тел. (0512)-58-11-00</p>
            <ul>
                <li>Понедельник - Пятница</li>
                <li>Суббота</li>
            </ul>
            <ul>
                <li>9:00 - 18:00</li>
                <li>10:00 - 15:00</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 contact-left wow fadeInUp animated" data-wow-delay=".5s">
            <h3>Информация</h3>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/site/about">О нас</a></li>
                <!--<li><a href="shortcodes.html">Shortcodes</a></li>-->
                <li><a href="/site/news">Новости</a></li>
                <li><a href="/site/contact">Контакты</a></li>
            </ul>

        </div>
        <div class="col-md-4 contact-left footer-bottom wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>Подпишитесь на рассылку</h3>
            <form>
                <input type="text" value="Введите свой email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}" required="">
                <input type="submit" value=" ">
            </form>
            <a href="#"><span>Facebook</span></a>
            <a href="#"><span>Pinterest</span></a>
            <a href="#"><span>LinkedIn </span></a>
            <a href="#"><span>Behance</span></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer wow fadeInDown animated" data-wow-delay=".5s">
    <div class="container">
        <p> &copy; 2017 ULC. All Rights Reserved | Design by  <a href="http://ulc/"> Vasya Polishchuk</a></p>
    </div                >
</div>

<!-- //for bootstrap working -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function($) {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

        
    });
    //navigation menu
    $(document).ready(function() {

            if($('div').hasClass('site-about')){
                $('ul.nav .nav-about').addClass('active');
            }
            else if($('div').hasClass('view-map')){
                $('ul.nav .nav-contact').addClass('active');
            }
            else if($('div').hasClass('gallery')){
                $('ul.nav .nav-gallery').addClass('active');
            }

            else if($('div').hasClass('nav-for-menu')){
                $('ul.nav .nav-index').addClass('active');
            }
            else if($('.menu').hasClass('news-vacancies')){
                $('ul.nav .nav-news-vacancies').addClass('active');
            }


    });

</script>
<?php if (Yii::$app->user->isGuest) { echo LoginFormWidget::widget([]); } ?>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- //smooth scrolling -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
