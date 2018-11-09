<?php

use yii\db\Migration;

/**
 * Class m181031_134523_pages_menu
 */
class m181031_134523_pages_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{pages}}', 'menu', $this->integer(1)->notNull()->defaultValue(0));
        $this->update('{{pages}}', ['menu' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
