<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_146652_messageDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%message}}',
            ["id", "language", "translation"],
            [
                [
                    'id' => 40,
                    'language' => 'en',
                    'translation' => '1\'040',
                ],
                [
                    'id' => 40,
                    'language' => 'ru',
                    'translation' => '1\'040',
                ],
                [
                    'id' => 40,
                    'language' => 'ro',
                    'translation' => '1\'040',
                ],
                [
                    'id' => 41,
                    'language' => 'en',
                    'translation' => '3\'460',
                ],
                [
                    'id' => 41,
                    'language' => 'ru',
                    'translation' => '3\'460',
                ],
                [
                    'id' => 41,
                    'language' => 'ro',
                    'translation' => '3\'460',
                ],
                [
                    'id' => 42,
                    'language' => 'en',
                    'translation' => '1\'080',
                ],
                [
                    'id' => 42,
                    'language' => 'ru',
                    'translation' => '1\'080',
                ],
                [
                    'id' => 42,
                    'language' => 'ro',
                    'translation' => '1\'080',
                ],
                [
                    'id' => 43,
                    'language' => 'en',
                    'translation' => '2\'280',
                ],
                [
                    'id' => 43,
                    'language' => 'ru',
                    'translation' => '2\'280',
                ],
                [
                    'id' => 43,
                    'language' => 'ro',
                    'translation' => '2\'280',
                ],
                [
                    'id' => 44,
                    'language' => 'en',
                    'translation' => '16\'850\'000',
                ],
                [
                    'id' => 44,
                    'language' => 'ru',
                    'translation' => '16\'850\'000',
                ],
                [
                    'id' => 44,
                    'language' => 'ro',
                    'translation' => '16\'850\'000',
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%message}} CASCADE');
    }
}
