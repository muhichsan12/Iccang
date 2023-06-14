<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa004".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa004 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa004';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 11],
            [['nama'], 'string', 'max' => 25],
            [['kelas'], 'string', 'max' => 5],
            [['jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
    public function getProfil004(){
        return $this->hasOne(Profil004::class, ['id' => 'id']);
    }

}
