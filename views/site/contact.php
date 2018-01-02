<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- map -->
<div class="view-map">
	<h3 class="tittle">Карта</h3>
	<div class="map wow fadeInUp animated" data-wow-delay=".5s">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6112.45741157596!2d32.081688780671215!3d46.96581089256382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5caf7c1ba7283%3A0x47c801e53ce13b09!2z0J7Qv9GC0L7QstGL0Lkg0KHQutC70LDQtCAi0JjQoNCR0JjQoSI!5e0!3m2!1sru!2sua!4v1510674977644" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<div class="map-grids">
	<div class="container">
		<div class="col-md-3 map-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Информация</h3>
			<p>Крупнейший дистрибьютор в Южном регионе.</p>
		</div>
		<div class="col-md-6 map-middle wow fadeInUp animated" data-wow-delay=".5s">
			<h3>Обратная связь</h3>

            <?php $form = ActiveForm::begin([
                'id' => 'contact-form2',
            ]); ?>
            <?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('name')])->label(false) ?>

            <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label(false) ?>

            <?= $form->field($model, 'subject')->textInput(['placeholder' => $model->getAttributeLabel('subject')])->label(false) ?>

            <?= $form->field($model, 'body')->textarea(['rows' => '6', 'placeholder' => $model->getAttributeLabel('body')])->label(false) ?>
                    <?= Html::submitButton('Отправить', [ 'name' => 'contact-button']) ?>


        <?php ActiveForm::end(); ?>
<!--			<form>-->
<!--					<input type="text" name="text" />-->
<!--					<input type="email" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" />-->
<!--					<textarea name="massage" placeholder="Отправить..."></textarea>-->
<!--					<input type="submit" value="Отправить" >-->
<!--			</form>-->
		</div>
		<div class="col-md-3 map-left wow fadeInLeft animated" data-wow-delay=".5s">
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>тел. (0512)-58-11-00</li>
							<!--<li>+5356 890 679</li>-->
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>г. Николаев, ул. Космонавтов, 83а</li>
							<!--<li>Greece.</li>-->
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>

		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //map -->