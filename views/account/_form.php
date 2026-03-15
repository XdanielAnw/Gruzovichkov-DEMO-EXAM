<?php

use app\models\AddressFrom;
use app\models\AddressTo;
use app\models\BoxType;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

        <h3>Создание заявки</h3>

        <?= $form->field($model, 'box_type_id')->dropDownList(
            BoxType::getBoxType(), ['prompt' => 'Выберите тип груза']
        ) ?>

        <?= $form->field($model, 'box_date')->textInput(['type' => 'date']) ?>

        <?= $form->field($model, 'box_time')->textInput(['type' => 'time']) ?>

        <?= $form->field($model, 'box_ves')->textInput() ?>

        <?= $form->field($model, 'box_gabarit')->textInput() ?>

        <?= $form->field($model, 'address_from_id')->dropDownList([
            AddressTo::getAddressTo(), ['prompt' => 'Выберите адрес отправки']
        ]) ?>

        <?= $form->field($model, 'address_to_id')->dropDownList([
            AddressFrom::getAddressFrom(), ['prompt' => 'Выберите адрес доставки']
        ]) ?>

        <div class="form-group d-flex justify-content-end">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
