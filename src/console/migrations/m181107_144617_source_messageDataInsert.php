<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_144617_source_messageDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%source_message}}',
                           ["id", "category", "message"],
                            [
    [
        'id' => 1,
        'category' => 'app/language',
        'message' => 'en',
    ],
    [
        'id' => 2,
        'category' => 'app/language',
        'message' => 'ro',
    ],
    [
        'id' => 3,
        'category' => 'app/language',
        'message' => 'ru',
    ],
    [
        'id' => 4,
        'category' => 'app/main',
        'message' => 'about-title',
    ],
    [
        'id' => 5,
        'category' => 'app/main',
        'message' => 'about-text',
    ],
    [
        'id' => 6,
        'category' => 'app/main',
        'message' => 'about-card-1',
    ],
    [
        'id' => 7,
        'category' => 'app/main',
        'message' => 'about-card-2',
    ],
    [
        'id' => 8,
        'category' => 'app/main',
        'message' => 'about-card-3',
    ],
    [
        'id' => 9,
        'category' => 'app/main',
        'message' => 'about-sub-title',
    ],
    [
        'id' => 10,
        'category' => 'app/main',
        'message' => 'about-sub-text',
    ],
    [
        'id' => 11,
        'category' => 'app/main',
        'message' => 'about-partners-title',
    ],
    [
        'id' => 12,
        'category' => 'app/main',
        'message' => 'news-title',
    ],
    [
        'id' => 13,
        'category' => 'app/main',
        'message' => 'title',
    ],
    [
        'id' => 16,
        'category' => 'app/main',
        'message' => 'slide-item1-text1',
    ],
    [
        'id' => 17,
        'category' => 'app/main',
        'message' => 'slide-item1-text2',
    ],
    [
        'id' => 18,
        'category' => 'app/main',
        'message' => 'slide-item2-text1',
    ],
    [
        'id' => 19,
        'category' => 'app/main',
        'message' => 'slide-item2-text2',
    ],
    [
        'id' => 20,
        'category' => 'app/main',
        'message' => 'slide-item3-text1',
    ],
    [
        'id' => 21,
        'category' => 'app/main',
        'message' => 'slide-item3-text2',
    ],
    [
        'id' => 22,
        'category' => 'app/main',
        'message' => 'slide-item4-text1',
    ],
    [
        'id' => 23,
        'category' => 'app/main',
        'message' => 'slide-item4-text2',
    ],
    [
        'id' => 24,
        'category' => 'app/main',
        'message' => 'slide-item5-text1',
    ],
    [
        'id' => 25,
        'category' => 'app/main',
        'message' => 'slide-item5-text2',
    ],
    [
        'id' => 26,
        'category' => 'app/main',
        'message' => 'join',
    ],
    [
        'id' => 27,
        'category' => 'app/header',
        'message' => 'nav-plans',
    ],
    [
        'id' => 28,
        'category' => 'app/header',
        'message' => 'nav-tenders',
    ],
    [
        'id' => 29,
        'category' => 'app/header',
        'message' => 'nav-contracts',
    ],
    [
        'id' => 30,
        'category' => 'app/footer',
        'message' => 'copyright',
    ],
    [
        'id' => 31,
        'category' => 'app/footer',
        'message' => 'info',
    ],
    [
        'id' => 32,
        'category' => 'app/header',
        'message' => 'info',
    ],
    [
        'id' => 35,
        'category' => 'app/header',
        'message' => 'menu',
    ],
    [
        'id' => 36,
        'category' => 'app/error',
        'message' => 'back',
    ],
    [
        'id' => 37,
        'category' => 'app/error',
        'message' => 'main',
    ],
]
        );

        $this->execute('ALTER SEQUENCE source_message_id_seq RESTART WITH 40;');
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%source_message}} CASCADE');
    }
}
