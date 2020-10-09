<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solusi */

$this->title = 'Create Solusi';
$this->params['breadcrumbs'][] = ['label' => 'Solusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solusi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
