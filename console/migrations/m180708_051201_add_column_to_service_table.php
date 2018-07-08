<?php

use yii\db\Migration;

/**
 * Class m180708_051201_add_column_to_service_table
 */
class m180708_051201_add_column_to_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
     $this->addColumn('services','title',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('services','title');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180708_051201_add_column_to_service_table cannot be reverted.\n";

        return false;
    }
    */
}
