<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat004}}`.
 */
class m230523_090748_create_obat004_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat004}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'dtok_obat' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat004}}');
    }
}
