<?php

use yii\db\Schema;
use yii\db\Migration;

class m250312_141019_criar_tabela_aux_rel_calibre_modelo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aux_rel_calibre_modelo', [
            'id' => Schema::TYPE_PK,
            'idcalibre' => Schema::TYPE_INTEGER. ' NOT NULL',
            'idmodelo' => schema::TYPE_INTEGER. ' NOT NULL',
        ]);

        $this->createIndex(
            '{{%idx-idcalibre}}',
            '{{%aux_rel_calibre_modelo}}',
            'idcalibre'
        );
        $this->addForeignKey(
            '{{%fk-idcalibre}}',
            '{{%aux_rel_calibre_modelo}}',
            'idcalibre',
            '{{%aux_calibre}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            '{{%idx-idmodelo}}',
            '{{%aux_rel_calibre_modelo}}',
            'idmodelo'
        );

        $this->addForeignKey(
            '{{%fk-idmodelo}}',
            '{{%aux_rel_calibre_modelo}}',
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


        $this->dropTable('aux_rel_calibre_modelo');


        $this->dropIndex(
            '{{%idx-idcalibre}}',
            '{{%aux_rel_calibre_modelo}}',
        );

        $this->dropForeignKey(
            '{{%fk-idcalibre}}',
            '{{%aux_rel_calibre_modelo}}',
        );

        $this->dropIndex(
            '{{%idx-idmodelo}}',
            '{{%aux_rel_calibre_modelo}}',
        );

        $this->dropForeignKey(
            '{{%fk-idmodelo}}',
            '{{%aux_rel_calibre_modelo}}',
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250312_141019_criar_tabela_aux_rel_calibre_modelo cannot be reverted.\n";

        return false;
    }
    */
}
