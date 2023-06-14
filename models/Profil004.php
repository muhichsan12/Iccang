<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil004".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $foto_profil
 */
class Profil004 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil004';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'string', 'max' => 10],
            [['foto_profil'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
