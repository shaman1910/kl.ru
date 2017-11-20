<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profile`.
 */
class m171114_092354_create_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'surname'=>$this->string(),
            'patronymic'=>$this->string(),
            'date_bith'=>$this->date(),
            'image'=>$this->string(),
            'email'=>$this->string(),
            'status'=>$this->string(),
            'position'=>$this->string(),
            'user_id'=>$this->integer(),
            'department_id'=>$this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('profile');
    }
}
