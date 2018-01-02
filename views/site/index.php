<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Крупнейший дистрибьютор в Южном регионе';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="banner nav-for-menu">
    <div class="container">
        <div class="banner-info wow fadeInLeft animated" data-wow-delay=".5s">
            <script src="<?php echo \yii\helpers\Url::to('/web/public/js/responsiveslides.min.js') ?>"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(document).ready(function() {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({

                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        timeout: 6000,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-text">
                            <h4>Крупнейший дистрибьютор в Южном регионе!</h4>
                            <p>В 2016 г. компания отпраздновала свой 25-летний юбилей. Ведущие позиции на рынке дистрибьюции в Николаевской и Херсонской областях.</p>
                            <!--<a href="single.html">Readmore</a>-->
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h4>Более 50 компаний которые выбрали наc</h4>
                            <p>Основной сферой деятельности является предоставление складских и логистических услуг по продвижению торговых марок на рынке Украины.</p>
                            <!--<a href="single.html">Readmore</a>-->
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h4>3 филиала (Николаев, Херсон, Первомайск)</h4>
                            <p>Обеспечение полного комплекса услуг дистрибьюции в Николаевской и Херсонской областях
                                100% покрытие торговых точек в городе и области по всем каналам сбыта.
                                Доставка товара клиентам в 24 часа</p>
                            <!--<a href="single.html">Readmore</a>-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <h3>Приветствуем Вас!</h3>
        <p>Официальный сайт компании ИРБИС.</p>
        <div class="bot-grids">
            <div class="col-md-4 bot-left wel-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="bot-img">
                    <h4>Контакты</h4>
                    <figure class="icon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 bot-left wel-grid wow fadeInDown animated" data-wow-delay=".5s">
                <div class="bot-img">
                    <h4>Партнерам</h4>
                    <figure class="icon">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 bot-left wel-grid wow fadeInRight animated" data-wow-delay=".5s">
                <div class="bot-img">
                    <h4>О нас</h4>
                    <figure class="icon">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </figure>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<div class="items">
    <div class="container">
        <div class="col-md-6 item-left wow fadeInRight animated" data-wow-delay=".5s">

            <h4>География филиалов</h4>
            <p>Обеспечение полного комплекса услуг дистрибьюции в Николаевской и Херсонской областях
                100% покрытие торговых точек в городе и области по всем каналам сбыта.
                Доставка товара клиентам в 24 часа</p>
        </div>
        <!--<div class="col-md-6 item-right wow fadeInLeft animated" data-wow-delay=".5s">-->
        <!--<div class="col-sm-6 item-left-img text-center">-->
        <!--<h4>Perspiciatis</h4>-->
        <!--<p>Nemo enim eaque ipsa -->
        <!--quae ab illo inventore -->
        <!--veritatis et quasi</p>-->
        <!--<a href="about.html">Readmore</a>-->
        <!--</div>-->
        <!--<div class="col-sm-6 item-left-img text-center">-->
        <!--<h4>Laudantium</h4>-->
        <!--<p>Nemo enim eaque ipsa -->
        <!--quae ab illo inventore -->
        <!--veritatis et quasi</p>-->
        <!--<a href="about.html">Readmore</a>-->
        <!--</div>-->
        <!--<div class="clearfix"></div>-->
        <!--</div>-->
        <div class="clearfix"></div>
    </div>
</div>
<!-- quality -->
<div class="quality">
    <div class="container">
<!--        <img src="--><?//= Yii::$app->user->identity['photo']?><!--" />-->
        <h3>Логистический центр</h3>
        <p class="bot-para">Современные склады категории А, общей площадью  боле 12 000 м2 , дистанционным контролем климатических параметров, также холодильные камеры общей площадью 1000 м2.
            Стеллажное паллетное хранение, партионный учет, список заявок на доставку и/или сбор грузов в электронном/бумажном виде с основными параметрами заказов клиентов. Высококвалифицированный обслуживающий персонал.
            Собственный автопарк из 66 грузовых автомобилей, оборудованных холодильными установками. Опытные водители-экспедиторы.
        </p>
        <div class="col-md-6 qua-left wow fadeInLeft animated" data-wow-delay=".5s">
            <a href="<?= Url::toRoute(['site/gallery']); ?>"><figure>
                    <img class="img-responsive" src="web/public/images/pic10.jpg" alt="lovely">
                    <figcaption>
                        <div class="fig-bor">
                            <h3>Галерея складов</h3>
                            <p>
                                Современные склады категории А, общей площадью боле 12 000 м2.
                            </p>
                        </div>
                    </figcaption>
                </figure></a>
        </div>
        <div class="col-md-6 qua-left wow fadeInRight animated" data-wow-delay=".5s">
            <a href="<?= Url::toRoute(['site/gallery']); ?>"><figure>
                    <img class="img-responsive" src="web/public/images/pic9.jpg" alt="lovely">
                    <figcaption>
                        <div class="fig-bor">
                            <h3>Галерея складов</h3>
                            <p>
                                Современные склады категории А, общей площадью боле 12 000 м2
                            </p>
                        </div>
                    </figcaption>
                </figure></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //quality -->
<!-- experts -->
<div class="experts">
    <div class="container">
        <h3>Команда</h3>
<!--        <p>Repellat earum rerum hic tenetur a sapiente delectus,-->
<!--            ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis-->
<!--            doloribus asperiores repellat.</p>-->
        <div class="col-md-4 bottom-grid wow fadeInRight animated" data-wow-delay=".5s">
            <div class="btm-right">
                <img src="web/public/images/team1.jpg" alt=" " />
                <div class="captn">
                    <h4>Виктория</h4>
                    <a href="#" class="icon_1"></a>
                    <a href="#" class="icon_2"></a>
                    <a href="#" class="icon_3"></a>
                    <a href="#" class="icon_4"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 bottom-grid wow fadeInDown animated" data-wow-delay=".5s">
            <div class="btm-right">
                <img src="web/public/images/team2.jpg" alt=" " />
                <div class="captn">
                    <h4>Андрей</h4>
                    <a href="#" class="icon_1"></a>
                    <a href="#" class="icon_2"></a>
                    <a href="#" class="icon_3"></a>
                    <a href="#" class="icon_4"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 bottom-grid wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="btm-right">
                <img src="web/public/images/team4.jpg" alt=" " />
                <div class="captn">
                    <h4>Инна</h4>
                    <a href="#" class="icon_1"></a>
                    <a href="#" class="icon_2"></a>
                    <a href="#" class="icon_3"></a>
                    <a href="#" class="icon_4"></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //experts -->
<!-- services -->
<div class="services">
    <div class="container  text-center">
        <h3>Наши партнеры</h3>
        <h4>Более 50 компаний которые выбрали нас</h4>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-md-3 services-gd text-center wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/01.png" alt=" " /></a>
                        </div>
                        <h4>Ferrero</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/02.png" alt=" " /></a>
                        </div>
                        <h4>АВК</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/03.png" alt=" " /></a>
                        </div>
                        <h4>ЖЛ</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/04.png" alt=" " /></a>
                        </div>
                        <h4>BIC</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/05.png" alt=" " /></a>
                        </div>
                        <h4>Роллтон</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/06.png" alt=" " /></a>
                        </div>
                        <h4>Помидора</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/07.png" alt=" " /></a>
                        </div>
                        <h4>Лукас</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/08.png" alt=" " /></a>
                        </div>
                        <h4>Hyleys</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/09.png" alt=" " /></a>
                        </div>
                        <h4>Грона</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/010.png" alt=" " /></a>
                        </div>
                        <h4>Золотое зерно</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/011.png" alt=" " /></a>
                        </div>
                        <h4>Приправка</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/012.png" alt=" " /></a>
                        </div>
                        <h4>Dominic</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/013.png" alt=" " /></a>
                        </div>
                        <h4>Форес</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/014.png" alt=" " /></a>
                        </div>
                        <h4>MacCoffee</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/015.png" alt=" " /></a>
                        </div>
                        <h4>АХА</h4>
                    </div>
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/016.png" alt=" " /></a>
                        </div>
                        <h4>Престиж</h4>
                    </div>
                </div>


                <div class="item">
                    <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <a href="#" onclick="return false;" class="hi-icon"><img src="web/public/images/partner/017.png" alt=" " /></a>
                        </div>
                        <h4>Онисс</h4>
                    </div>

                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //services -->
<!-- news -->
<div class="news">
    <div class="container">
        <div class="news-text">
            <h3>Последние новости компании</h3>
<!--            <p>Repellat earum rerum hic tenetur a sapiente delectus,-->
<!--                ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis-->
<!--                doloribus asperiores repellat.</p>-->
        </div>
        <div class="news-grids">
            <?php foreach ($articles as $article): ?>
            <div class="col-md-3 news-grid mask wow fadeInRight animated" data-wow-delay=".5s">
                <a href="<?=Url::toRoute(['site/single', 'id' => $article->id]) ?>" class="mask"><img src="<?= $article->getImage(); ?>" alt="image" class="img-responsive zoom-img"></a>
                <span><?= date('d-m-Y', strtotime($article->date)); ?></span>
                <div class="news-info">
                    <h4><a href="<?=Url::toRoute(['site/single', 'id' => $article->id]) ?>"><?= $article->title; ?></a></h4>
                    <p><?= $article->description; ?></p>
                    <a href="<?= Url::toRoute(['site/single', 'id' => $article->id]); ?>">Читать больше</a>
                </div>
            </div>
            <?php endforeach;?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>