<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m180623_131404_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'contact_name'=>$this->string(),
            'email'=>$this->string(),
            'title'=>$this->string(),
            'message'=>$this->text(),
            'social'=>$this->string(),
            'created_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
