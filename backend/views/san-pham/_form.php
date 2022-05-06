<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SanPham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="san-pham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tên sản phẩm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Giá bán')->textInput() ?>

    <?= $form->field($model, 'Loại sản phẩm')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
