<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Gallery -->
<div class="gallery">
    <div class="container">
        <h3 class="tittle">Галерея</h3>
        <script src="<?php echo \yii\helpers\Url::to('/web/public/js/hover_pack.js') ?>"></script>

        <div class="port-grid wow fadeInRight animated" data-wow-delay=".5s">
            <div class="portfolio-wrapper">
                <a href="#portfolioModal1" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">
                    <img src="/web/public/images/0.jpg" alt=" " />
                </a>
            </div>
            <div class="portfolio-wrapper">
                <a href="#portfolioModal2" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">
                    <img src="/web/public/images/3.jpg" alt=" " />
                </a>
            </div>
        </div>
        <div class="port-grid wow fadeInRight animated" data-wow-delay=".5s">
            <div class="portfolio-wrapper">
                <a href="#portfolioModal3" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">
                    <img src="/web/public/images/2.jpg" alt=" " />
                </a>
            </div>
            <div class="portfolio-wrapper">
                <a href="#portfolioModal4" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">
                    <img src="/web/public/images/1.jpg" alt=" " />
                </a>
            </div>
        </div>
        <!--<div class="port-grid wow fadeInLeft animated" data-wow-delay=".5s">-->
        <!--<div class="portfolio-wrapper">-->
        <!--<a href="#portfolioModal5" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">-->
        <!--<img src="/web/public/images/g4.jpg" alt=" " />	-->
        <!--</a>-->
        <!--</div>-->
        <!--<div class="portfolio-wrapper">-->
        <!--<a href="#portfolioModal6" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">-->
        <!--<img src="/web/public/images/g6.jpg" alt=" " />	-->
        <!--</a>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="port-grid wow fadeInLeft animated" data-wow-delay=".5s">-->
        <!--<div class="portfolio-wrapper">-->
        <!--<a href="#portfolioModal7" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">-->
        <!--<img src="/web/public/images/g3.jpg" alt=" " />	-->
        <!--</a>-->
        <!--</div>-->
        <!--<div class="portfolio-wrapper">-->
        <!--<a href="#portfolioModal8" class="portfolio-link b-link-stripe b-animate-go b-opacity-60" data-toggle="modal">-->
        <!--<img src="/web/public/images/g7.jpg" alt=" " />	-->
        <!--</a>-->
        <!--</div>-->
        <!--</div>-->

        <div class="clearfix"></div>
    </div>
</div>
<!-- //Gallery -->


<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Ирбис</h3>
                        <img src="/web/public/images//0.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Ирбис</h3>

                        <img src="/web/public/images//3.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Ирбис</h3>

                        <img src="/web/public/images//2.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Ирбис</h3>

                        <img src="/web/public/images//1.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-content port-modal">-->
<!--        <div class="close-modal" data-dismiss="modal">-->
<!--            <div class="lr">-->
<!--                <div class="rl"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-lg-offset-2 text-center">-->
<!--                    <div class="modal-body">-->
<!--                        <h3>Ирбис</h3>-->
<!---->
<!--                        <img src="/web/public/images//g41.jpg" class="img-responsive img-centered" alt="">-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-content port-modal">-->
<!--        <div class="close-modal" data-dismiss="modal">-->
<!--            <div class="lr">-->
<!--                <div class="rl"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-lg-offset-2 text-center">-->
<!--                    <div class="modal-body">-->
<!--                        <h3>Ultimate</h3>-->
<!---->
<!--                        <img src="/web/public/images//g61.jpg" class="img-responsive img-centered" alt="">-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-content port-modal">-->
<!--        <div class="close-modal" data-dismiss="modal">-->
<!--            <div class="lr">-->
<!--                <div class="rl"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-lg-offset-2 text-center">-->
<!--                    <div class="modal-body">-->
<!--                        <h3>Ultimate</h3>-->
<!---->
<!--                        <img src="/web/public/images//g31.jpg" class="img-responsive img-centered" alt="">-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-content port-modal">-->
<!--        <div class="close-modal" data-dismiss="modal">-->
<!--            <div class="lr">-->
<!--                <div class="rl"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-lg-offset-2 text-center">-->
<!--                    <div class="modal-body">-->
<!--                        <h3>Ultimate</h3>-->
<!---->
<!--                        <img src="/web/public/images//g71.jpg" class="img-responsive img-centered" alt="">-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- //gallery Modals -->
