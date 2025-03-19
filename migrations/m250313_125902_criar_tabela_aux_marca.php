<?php

use yii\db\cubrid\Schema;
use yii\db\Migration;

class m250313_125902_criar_tabela_aux_marca extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aux_marca', [
            'id' => schema::TYPE_PK,
            'marca' => Schema::TYPE_STRING,
        ]);

        $this->batchInsert('aux_marca', ['marca'], [
            ['TAURUS'],
            ['ROSSI'],
            ['CBC'],
            ['GLOCK'],
            ['BERETTA'],
            ['BOITO'],
            ['COLT'],
            ['IMBEL'],


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aux_marca');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250313_125902_criar_tabela_aux_marca cannot be reverted.\n";

        return false;
    }
    */
}
