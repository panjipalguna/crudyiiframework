<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Solusi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solusi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penyakit')->textInput() ?>

    <?= $form->field($model, 'solusi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
