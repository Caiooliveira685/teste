<?php

use yii\db\Schema;
use yii\db\Migration;

class m250313_131219_criar_tabela_aux_rel_marca_modelo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aux_rel_marca_modelo', [
            'id' => schema::TYPE_PK,
            'idmarca' => schema::TYPE_INTEGER . ' NOT NULL',
            'idmodelo' => schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->createIndex(
            '{{%idx-idmarca}}',
            '{{%aux_rel_marca_modelo}}',
            'idmarca'
        );

        $this->addForeignKey(
            '{{%fk-idmarca}}',
            '{{%aux_rel_marca_modelo}}',
            'idmarca',
            '{{%aux_marca}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            '{{%idx-idmodelo}}',
            '{{%aux_rel_marca_modelo}}',
            'idmodelo'
        );

        $this->addForeignKey(
            '{{%fk-idmodelo}}',
            '{{%aux_rel_marca_modelo}}',
            'idmodelo',
            '{{%aux_modelo}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aux_rel_marca_modelo');

        $this->dropIndex(
            '{{%idx-idmarca}}',
            '{{%aux_rel_marca_modelo}}',
        );

        $this->dropForeignKey(
            '{{%fk-idmarca}}',
            '{{%aux_rel_marca_modelo}}',
        );

        $this->dropIndex(
            '{{%idx-idmodelo}}',
            '{{%aux_rel_marca_modelo}}',
        );

        $this->dropForeignKey(
            '{{%fk-idmodelo}}',
            '{{%aux_rel_marca_modelo}}',
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250313_131219_criar_tabela_aux_rel_marca_modelo cannot be reverted.\n";

        return false;
    }
    */
}
