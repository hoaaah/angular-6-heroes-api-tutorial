<?php

use yii\db\Migration;

/**
 * Handles the creation of table `heroes`.
 */
class m180526_063736_create_heroes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('heroes', [
            'id' => $this->primaryKey(),
            'id' => $this->integer(11),
            'name' => $this->string(32),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('heroes');
    }
}
