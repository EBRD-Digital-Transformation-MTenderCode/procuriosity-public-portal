<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "actions_logger".
 *
 * @property int $id
 * @property string $ip
 * @property int $user_id
 * @property string $username
 * @property string $type
 * @property array $data
 * @property int $created_at
 * @property int $updated_at
 */
class ActionsLogger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actions_logger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ip', 'user_id', 'username', 'type', 'method', 'created_at'], 'required'],
            [['ip'], 'string'],
            [['user_id', 'created_at'], 'integer'],
            [['data'], 'safe'],
            [['username'], 'string', 'max' => 255],
            [['type', 'method'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'user_id' => 'User ID',
            'username' => 'Username',
            'type' => 'Type',
            'data' => 'Data',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
