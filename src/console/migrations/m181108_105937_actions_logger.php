<?php

use yii\db\Migration;

/**
 * Class m181108_105937_actions_logger
 */
class m181108_105937_actions_logger extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            '{{%actions_logger}}',
            [
                'id' => $this->primaryKey(),
                'ip' => 'inet NOT NULL',
                'user_id' => $this->integer()->notNull(),
                'username' => $this->string(255)->notNull(),
                'type' => $this->string(50)->notNull(),
                'type_id' => $this->integer()->notNull(),
                'method' => $this->string(50)->notNull(),
                'data' => 'json NULL',
                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
            ]
        );

        $this->createIndex('idx_actions_logger_ip', '{{%actions_logger}}','ip');
        $this->createIndex('idx_actions_logger_user_id', '{{%actions_logger}}','user_id');
        $this->createIndex('idx_actions_logger_created_at', '{{%actions_logger}}','created_at');
        $this->createIndex('idx_actions_logger_type', '{{%actions_logger}}','type');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
