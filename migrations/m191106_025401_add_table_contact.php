<?php

use yii\db\Migration;

/**
 * Class m191106_025401_add_table_contact
 */
class m191106_025401_add_table_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'full_name' =>  $this->string(255),
            'email'     =>  $this->string(255),
            'mobile_no' =>  $this->string(255),
            'message'   =>  $this->text()
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
