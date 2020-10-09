<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relasi".
 *
 * @property int $id_relasi
 * @property int $id_gejala
 * @property int $id_penyakit
 *
 * @property Gejala $gejala
 * @property Penyakit $penyakit
 */
class Relasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gejala', 'id_penyakit'], 'required'],
            [['id_gejala', 'id_penyakit'], 'integer'],
            [['id_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['id_gejala' => 'id_gejala']],
            [['id_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['id_penyakit' => 'id_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_relasi' => 'Id Relasi',
            'id_gejala' => 'Id Gejala',
            'id_penyakit' => 'Id Penyakit',
        ];
    }

    /**
     * Gets query for [[Gejala]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGejala()
    {
        return $this->hasOne(Gejala::className(), ['id_gejala' => 'id_gejala']);
    }

    /**
     * Gets query for [[Penyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakit()
    {
        return $this->hasOne(Penyakit::className(), ['id_penyakit' => 'id_penyakit']);
    }
}
