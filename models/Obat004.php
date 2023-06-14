<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat004".
 *
 * @property int $id
 * @property string $kode_obat
 * @property float $harga
 * @property int $dtok_obat
 */
class Obat004 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat004';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'harga', 'dtok_obat'], 'required'],
            [['harga'], 'number'],
            [['dtok_obat'], 'integer'],
            [['kode_obat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'dtok_obat' => 'Dtok Obat',
        ];
    }
}
