<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aux_rel_calibre_modelo".
 *
 * @property int $id
 * @property int $idcalibre
 * @property int $idmodelo
 *
 * @property AuxCalibre $idcalibre0
 * @property AuxModelo $idmodelo0
 */
class AuxRelCalibreModelo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aux_rel_calibre_modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcalibre', 'idmodelo'], 'required'],
            [['idcalibre', 'idmodelo'], 'integer'],
            [['idcalibre'], 'exist', 'skipOnError' => true, 'targetClass' => AuxCalibre::class, 'targetAttribute' => ['idcalibre' => 'id']],
            [['idmodelo'], 'exist', 'skipOnError' => true, 'targetClass' => AuxModelo::class, 'targetAttribute' => ['idmodelo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idcalibre' => 'Idcalibre',
            'idmodelo' => 'Idmodelo',
        ];
    }

    /**
     * Gets query for [[Idcalibre0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcalibre0()
    {
        return $this->hasOne(AuxCalibre::class, ['id' => 'idcalibre']);
    }

    /**
     * Gets query for [[Idmodelo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodelo0()
    {
        return $this->hasOne(AuxModelo::class, ['id' => 'idmodelo']);
    }

}
