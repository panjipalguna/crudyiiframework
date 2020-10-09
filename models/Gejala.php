<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property int $id_gejala
 * @property string $gejala
 *
 * @property Relasi[] $relasis
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gejala'], 'required'],
            [['gejala'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gejala' => 'Id Gejala',
            'gejala' => 'Gejala',
        ];
    }

    /**
     * Gets query for [[Relasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelasis()
    {
        return $this->hasMany(Relasi::className(), ['id_gejala' => 'id_gejala']);
    }
}
