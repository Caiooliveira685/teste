<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aux_rel_marca_modelo".
 *
 * @property int $id
 * @property int $idmarca
 * @property int $idmodelo
 *
 * @property AuxMarca $idmarca0
 */
class AuxRelMarcaModelo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aux_rel_marca_modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmarca', 'idmodelo'], 'required'],
            [['idmarca', 'idmodelo'], 'integer'],
            [['idmarca'], 'exist', 'skipOnError' => true, 'targetClass' => AuxMarca::class, 'targetAttribute' => ['idmarca' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idmarca' => 'Idmarca',
            'idmodelo' => 'Idmodelo',
        ];
    }

    /**
     * Gets query for [[Idmarca0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdmarca0()
    {
        return $this->hasOne(AuxMarca::class, ['id' => 'idmarca']);
    }

}
