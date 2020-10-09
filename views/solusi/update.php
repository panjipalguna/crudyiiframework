<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solusi */

$this->title = 'Update Solusi: ' . $model->id_solusi;
$this->params['breadcrumbs'][] = ['label' => 'Solusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_solusi, 'url' => ['view', 'id' => $model->id_solusi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solusi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
