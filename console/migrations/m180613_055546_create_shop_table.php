<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop`.
 */
class m180613_055546_create_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('shop', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'address'=> $this->text(),
            'tel'=>$this->string(),
            'email'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shop');
    }
}
