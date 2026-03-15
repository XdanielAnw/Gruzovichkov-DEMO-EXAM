<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Application $model */

$this->title = "Заявка №" . $model->id . " от " . Yii::$app->formatter->asDatetime($model->created_at) ;

\yii\web\YiiAsset::register($this);
?>
<div class="application-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'user_id',
                'value' => $model->user->full_name
            ],
            [
                'attribute' => 'box_type_id',
                'value' => $model->boxType->title,
            ],
            [
                'attribute' => 'box_date',
                'value' => Yii::$app->formatter->asDate($model->box_date, "php:Y.m.d"),
            ],
            'box_time',
            'box_ves',
            'box_gabarit',
            [
                'attribute' => 'address_from_id',
                'value' => $model->addressFrom->title,
            ],
            [
                'attribute' => 'address_to_id',
                'value' => $model->addressTo->title,
            ],
            [
                'attribute' => 'status_id',
                'value' => $model->status->title,
            ],
        ],
    ]) ?>

</div>
