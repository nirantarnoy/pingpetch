<?php

use yii\db\Migration;

/**
 * Class m180613_064817_add_column_contact_to_shop_table
 */
class m180613_064817_add_column_contact_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shop','contact_title',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop','contact_title');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180613_064817_add_column_contact_to_shop_table cannot be reverted.\n";

        return false;
    }
    */
}
