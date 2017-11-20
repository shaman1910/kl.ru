<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $date_bith
 * @property string $image
 * @property string $email
 * @property string $status
 * @property string $position
 * @property integer $user_id
 * @property integer $department_id
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_bith'], 'safe'],
            [['user_id'], 'required'],
            [['user_id', 'department_id'], 'integer'],
            [['name', 'surname', 'patronymic', 'image', 'email', 'status', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'date_bith' => 'Date Bith',
            'image' => 'Image',
            'email' => 'Email',
            'status' => 'Status',
            'position' => 'Position',
            'user_id' => 'User ID',
            'department_id' => 'Department ID',
        ];
    }
}
