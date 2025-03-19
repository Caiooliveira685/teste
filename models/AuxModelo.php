<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aux_modelo".
 *
 * @property int $id
 * @property string|null $modelo
 *
 * @property AuxRelCalibreModelo[] $auxRelCalibreModelos
 */
class AuxModelo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aux_modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modelo'], 'default', 'value' => null],
            [['modelo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelo' => 'Modelo',
        ];
    }

    /**
     * Gets query for [[AuxRelCalibreModelos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuxRelCalibreModelos()
    {
        return $this->hasMany(AuxRelCalibreModelo::class, ['idmodelo' => 'id']);
    }

}
