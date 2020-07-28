<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host={{environments_DB_HOST}};port={{environments_DB_PORT}};dbname={{environments_DB_NAME}}',
            'username' => '{{environments_DB_USERNAME}}',
            'password' => '{{environments_DB_PASSWORD}}',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];