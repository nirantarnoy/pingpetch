<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m180917_014338_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'photo' => $this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('client');
    }
}
