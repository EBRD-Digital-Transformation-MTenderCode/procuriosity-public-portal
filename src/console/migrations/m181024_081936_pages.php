<?php

use yii\db\Migration;

/**
 * Class m181024_081936_pages
 */
class m181024_081936_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            '{{%pages}}',
            [
                'id' => $this->primaryKey(),
                'slug' => $this->string(255)->notNull()->unique(),
                'title_ro' => $this->string(255)->null(),
                'title_en' => $this->string(255)->notNull(),
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

        $this->createIndex('idx_pages_slug', '{{%pages}}','slug');

        //***INSERT DATA

        $this->insert('{{%pages}}', [
            'slug' => 'view',
            'title_ro' => 'Ce este MTender',
            'title_en' => 'What is MTender',
            'title_ru' => 'Что такое MTender',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'about',
            'title_ro' => 'Despre MTender',
            'title_en' => 'About MTender',
            'title_ru' => 'Об MTender',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'register',
            'title_ro' => 'Înregistrare',
            'title_en' => 'Register',
            'title_ru' => 'Регистрация',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'legal-framework-view',
            'title_ro' => 'Legislația relevantă',
            'title_en' => 'Legal framework',
            'title_ru' => 'Соответствующее законодательство',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'security-view',
            'title_ro' => 'Securitatea și confidențialitatea',
            'title_en' => 'Security',
            'title_ru' => 'Безопасность и конфиденциальность',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'join-view',
            'title_ro' => 'Aderă la MTender',
            'title_en' => 'Join the MTender',
            'title_ru' => 'Присоединяйтесь к MTender',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'accreditation-view',
            'title_ro' => 'Comisia de acreditare',
            'title_en' => 'Accreditation Committee',
            'title_ru' => 'Комиссия по аккредитации',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'for-civil-view',
            'title_ro' => 'Pentru Societatea Civilă',
            'title_en' => 'For Civil Society',
            'title_ru' => 'Для гражданского общества',
        ]);
        $this->insert('{{%pages}}', [
            'slug' => 'faq-view',
            'title_ro' => 'Întrebări frecvente',
            'title_en' => 'FAQ',
            'title_ru' => 'Вопросы-ответы',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
