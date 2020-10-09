<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyakit".
 *
 * @property int $id_penyakit
 * @property string $penyakit
 *
 * @property Relasi[] $relasis
 * @property Solusi[] $solusis
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penyakit'], 'required'],
            [['penyakit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penyakit' => 'Id Penyakit',
            'penyakit' => 'Penyakit',
        ];
    }

    /**
     * Gets query for [[Relasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelasis()
    {
        return $this->hasMany(Relasi::className(), ['id_penyakit' => 'id_penyakit']);
    }

    /**
     * Gets query for [[Solusis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSolusis()
    {
        return $this->hasMany(Solusi::className(), ['id_penyakit' => 'id_penyakit']);
    }
}
