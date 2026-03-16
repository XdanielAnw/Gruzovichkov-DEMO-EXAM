<?php 
use app\models\Status;
use yii\bootstrap5\Html;

?><div class="card">
  <div class="card-header">
    Заявка № <?= $model->id . " от " . Yii::$app->formatter->asDatetime($model->created_at, "php:Y.m.d H:i:s"); ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">ФИО: <?= $model->user->full_name ?></h5>
    <div class="mb-2">
        <strong>Статус:</strong> <?= $model->status->title ?> 
    </div>
    <div class="mb-2">
        <strong>Дата, время:</strong> <?= Yii::$app->formatter->asDate($model->box_date, "php:Y.m.d") ?>, <?= Yii::$app->formatter->asDate($model->box_time, "php:H.i.s") ?> 
    </div>
    <div class="mb-2">
        <strong >Тип груза:</strong> <?= $model->boxType->title ?> 
    </div>
    <div class="mb-2">
        <strong >Вес груза:</strong> <?= $model->box_ves ?> 
    </div>
    <div class="mb-2">
        <strong >Габарит груза:</strong> <?= $model->box_gabarit ?> 
    </div> 
    <div class="mb-2">
        <strong >Адрес отправки:</strong> <?= $model->addressFrom->title ?> 
    </div>
    <div class="mb-2">
        <strong >Адрес доставки:</strong> <?= $model->addressTo->title ?> 
    </div>

    <div class="form-group d-flex justify-content-end gap-3">
         <!-- $model->status_id === Status::getAliasStatusesId("new")
            ? Html::a('Отмена', ['cancel', "id" => $model->id], ['class' => 'btn btn-outline-danger']) 
            : ""
         -->
        <?= Html::a('Посмотреть', ['view', "id" => $model->id], ['class' => 'btn btn-outline-info']) ?>
    </div>
  </div>
</div>