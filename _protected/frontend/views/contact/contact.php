<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Yii::t('app', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'); ?>
    </p>

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'subject') ?>
        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>   

</div>