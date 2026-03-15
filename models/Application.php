<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property int $user_id
 * @property string $created_at
 * @property int $box_type_id
 * @property string $box_date
 * @property string $box_time
 * @property int $box_ves
 * @property int $box_gabarit
 * @property int $address_from_id
 * @property int $address_to_id
 * @property int $status_id
 *
 * @property AddressFrom $addressFrom
 * @property AddressTo $addressTo
 * @property BoxType $boxType
 * @property Feedback[] $feedbacks
 * @property Status $status
 * @property User $user
 */
class Application extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'box_type_id', 'box_date', 'box_time', 'box_ves', 'box_gabarit', 'address_from_id', 'address_to_id', 'status_id'], 'required'],
            [['user_id', 'box_type_id', 'box_ves', 'box_gabarit', 'address_from_id', 'address_to_id', 'status_id'], 'integer'],
            [['created_at', 'box_date', 'box_time'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['box_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BoxType::class, 'targetAttribute' => ['box_type_id' => 'id']],
            [['address_from_id'], 'exist', 'skipOnError' => true, 'targetClass' => AddressFrom::class, 'targetAttribute' => ['address_from_id' => 'id']],
            [['address_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => AddressTo::class, 'targetAttribute' => ['address_to_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'box_type_id' => 'Box Type ID',
            'box_date' => 'Box Date',
            'box_time' => 'Box Time',
            'box_ves' => 'Box Ves',
            'box_gabarit' => 'Box Gabarit',
            'address_from_id' => 'Address From ID',
            'address_to_id' => 'Address To ID',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * Gets query for [[AddressFrom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddressFrom()
    {
        return $this->hasOne(AddressFrom::class, ['id' => 'address_from_id']);
    }

    /**
     * Gets query for [[AddressTo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddressTo()
    {
        return $this->hasOne(AddressTo::class, ['id' => 'address_to_id']);
    }

    /**
     * Gets query for [[BoxType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBoxType()
    {
        return $this->hasOne(BoxType::class, ['id' => 'box_type_id']);
    }

    /**
     * Gets query for [[Feedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::class, ['application_id' => 'id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

}
