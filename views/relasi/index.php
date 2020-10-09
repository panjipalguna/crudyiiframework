<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RelasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Relasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_relasi',
            'id_gejala',
            'id_penyakit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
