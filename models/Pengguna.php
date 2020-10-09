<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property int $role
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $tgl_lahir
 * @property string $password
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role', 'nama', 'email', 'alamat', 'tgl_lahir', 'password'], 'required'],
            [['role'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'role' => 'Role',
            'nama' => 'Nama',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'tgl_lahir' => 'Tgl Lahir',
            'password' => 'Password',
        ];
    }
}
