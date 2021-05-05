<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $user_name
 * @property string|null $fullName
 * @property int|null $Tel_Number
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tel_Number'], 'integer'],
            [['email', 'user_name', 'fullName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'user_name' => 'User Name',
            'fullName' => 'Full Name',
            'Tel_Number' => 'Tel Number',
        ];
    }
}
