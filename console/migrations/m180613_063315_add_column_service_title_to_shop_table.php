<?php

use yii\db\Migration;

/**
 * Class m180613_063315_add_column_service_title_to_shop_table
 */
class m180613_063315_add_column_service_title_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shop','service_title',$this->text());
        $this->addColumn('shop','work_title',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop','work_title');
        $this->dropColumn('shop','service_title');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180613_063315_add_column_service_title_to_shop_table cannot be reverted.\n";

        return false;
    }
    */
}
