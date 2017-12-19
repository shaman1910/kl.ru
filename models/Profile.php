<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;


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
class Profile extends ActiveRecord
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
            [['user_id', 'name', 'surname', 'patronymic', 'image', 'status', 'chief', 'position', 'date_bith', 'department_id'], 'required'],
        ];
    }

    /**
     * @inheritdocf
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'date_bith' => 'День рождения',
            'image' => 'Image',
            'status' => 'Статус',
            'chief' => 'Руководитель',
            'position' => 'Должность',
            'user_id' => 'User ID',
            'department_id' => 'department_id',
        ];
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function saveDepartment($department_id)
    {
        $department = Department::findOne($department_id);

        if($department != null)
        {
            $this->link('department', $department);
            return true;
        }

    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }

    private function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date_bith);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }


}
