<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ApplicationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'box_type_id') ?>

    <?= $form->field($model, 'box_date') ?>

    <?php // echo $form->field($model, 'box_time') ?>

    <?php // echo $form->field($model, 'box_ves') ?>

    <?php // echo $form->field($model, 'box_gabarit') ?>

    <?php // echo $form->field($model, 'address_from_id') ?>

    <?php // echo $form->field($model, 'address_to_id') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
