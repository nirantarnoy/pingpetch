<?php

use yii\db\Migration;

/**
 * Handles the creation of table `services`.
 */
class m180613_055637_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'shop_id'=>$this->integer(),
            'name'=>$this->integer(),
            'detail'=>$this->text(),
            'photo'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('services');
    }
}
