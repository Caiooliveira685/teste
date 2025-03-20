<?php

use yii\db\Schema;
use yii\db\Migration;

class m250312_133428_criar_tabela_aux_calibre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aux_calibre', [
            'id' => schema::TYPE_PK,
            'calibre' => schema::TYPE_STRING,

        ]);

        $this->batchInsert('aux_calibre', ['calibre'], [
            ['.486'],
            ['.38'],
            ['.32'],
            ['.10'],
            ['.380'],
            ['.765'],
            ['.12'],
            ['.20'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aux_calibre');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250312_133428_criar_tabela_aux_calibre cannot be reverted.\n";

        return false;
    }
    */
}
