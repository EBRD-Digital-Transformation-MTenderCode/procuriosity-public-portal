<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_146617_source_messageDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->delete('{{%source_message}}', ['id' => [40, 41, 42, 43, 44]]);

        $this->batchInsert('{{%source_message}}',
            ["id", "category", "message"],
            [
                [
                    'id' => 40,
                    'category' => 'app/main',
                    'message' => 'slide-item1-number',
                ],
                [
                    'id' => 41,
                    'category' => 'app/main',
                    'message' => 'slide-item2-number',
                ],
                [
                    'id' => 42,
                    'category' => 'app/main',
                    'message' => 'slide-item3-number',
                ],
                [
                    'id' => 43,
                    'category' => 'app/main',
                    'message' => 'slide-item4-number',
                ],
                [
                    'id' => 44,
                    'category' => 'app/main',
                    'message' => 'slide-item5-number',
                ],
            ]
        );

        $this->execute('ALTER SEQUENCE source_message_id_seq RESTART WITH 45;');
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%source_message}} CASCADE');
    }
}
