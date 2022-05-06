<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SanPhamSearche */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'San Phams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('thêm sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SanPhamID',
            'TenSanPham',
            'GiaBan',
            'LoaiSanPham',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
