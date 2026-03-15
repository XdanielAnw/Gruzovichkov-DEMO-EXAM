<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'box_type_id')->textInput() ?>

        <?= $form->field($model, 'box_date')->textInput() ?>

        <?= $form->field($model, 'box_time')->textInput() ?>

        <?= $form->field($model, 'box_ves')->textInput() ?>

        <?= $form->field($model, 'box_gabarit')->textInput() ?>

        <?= $form->field($model, 'address_from_id')->textInput() ?>

        <?= $form->field($model, 'address_to_id')->textInput() ?>

        <?= $form->field($model, 'status_id')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
