<?php

use yii\db\Migration;

/**
 * Class m181107_144018_clearTables
 */
class m181107_144018_clearTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('message');
        $this->delete('source_message');
        $this->delete('pages');
        $this->delete('news');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
