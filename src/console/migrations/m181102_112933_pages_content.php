<?php

use yii\db\Migration;

/**
 * Class m181102_112933_pages_content
 */
class m181102_112933_pages_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{pages}}', 'content_en', $this->text()->null());
        $this->addColumn('{{pages}}', 'content_ro', $this->text()->null());
        $this->addColumn('{{pages}}', 'content_ru', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
