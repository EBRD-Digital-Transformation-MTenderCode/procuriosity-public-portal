<?php

use yii\db\Migration;

/**
 * Class m181031_091250_news
 */
class m181031_091250_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            '{{%news}}',
            [
                'id' => $this->primaryKey(),
                'slug' => $this->string(255)->notNull()->unique(),
                'date' => $this->date()->notNull(),
                'image' => $this->string(50)->null(),
                'title_en' => $this->string(255)->notNull(),
                'title_ro' => $this->string(255)->null(),
                'title_ru' => $this->string(255)->null(),
                'body_ro' => $this->text()->null(),
                'body_en' => $this->text()->null(),
                'body_ru' => $this->text()->null(),
                'meta_title_ro' => $this->string(255)->null(),
                'meta_title_en' => $this->string(255)->null(),
                'meta_title_ru' => $this->string(255)->null(),
                'meta_description_ro' => $this->string(255)->null(),
                'meta_description_en' => $this->string(255)->null(),
                'meta_description_ru' => $this->string(255)->null(),
            ]
        );

        $this->createIndex('idx_news_slug', '{{%news}}','slug');
        $this->createIndex('idx_news_date', '{{%news}}','date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
