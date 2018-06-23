<?php

use yii\db\Migration;

/**
 * Class m180613_060443_add_column_about_to_shop_table
 */
class m180613_060443_add_column_about_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('shop','aboutus',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop','aboutus');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180613_060443_add_column_about_to_shop_table cannot be reverted.\n";

        return false;
    }
    */
}
