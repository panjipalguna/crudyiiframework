<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Relasi */

$this->title = 'Create Relasi';
$this->params['breadcrumbs'][] = ['label' => 'Relasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
