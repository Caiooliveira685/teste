<?php

use yii\db\Schema;
use yii\db\Migration;

class m250312_135650_criar_tabela_aux_modelo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aux_modelo', [
            'id' => schema::TYPE_PK,
            'modelo' => schema::TYPE_STRING,

        ]);
        $this->batchInsert('aux_modelo', ['modelo'], [
            ['PT100'],
            ['PT138'],
            ['PT640PRO'],
            ['PT638PRO'],
            ['PT840'],
            ['PT24/7'],
            ['PT24/7PRO'],
            ['SPL'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aux_modelo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250312_135650_criar_tabela_aux_modelo cannot be reverted.\n";

        return false;
    }
    */
}
