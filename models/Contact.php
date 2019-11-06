<?php

namespace app\modules\contact\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $mobile_no
 * @property string $message
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['full_name', 'email', 'mobile_no'], 'string', 'max' => 255],
            [['full_name', 'email', 'mobile_no', 'message'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'mobile_no' => 'Mobile No',
            'message' => 'Message',
        ];
    }
}
