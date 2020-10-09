<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solusi".
 *
 * @property int $id_solusi
 * @property int $id_penyakit
 * @property string $solusi
 *
 * @property Penyakit $penyakit
 */
class Solusi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solusi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penyakit', 'solusi'], 'required'],
            [['id_penyakit'], 'integer'],
            [['solusi'], 'string', 'max' => 100],
            [['id_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['id_penyakit' => 'id_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_solusi' => 'Id Solusi',
            'id_penyakit' => 'Id Penyakit',
            'solusi' => 'Solusi',
        ];
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
