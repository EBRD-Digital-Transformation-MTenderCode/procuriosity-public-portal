<?php

namespace frontend\models;

use yii\base\Model;
use yii\httpclient\Client;

/**
 * Class Complaints
 * @package frontend\models
 */
class Complaints extends Model
{
    const TYPE_CONTESTATII = 'contestatii';
    const TYPE_DECIZII = 'decizii';

    const TYPES = [self::TYPE_CONTESTATII, self::TYPE_DECIZII];

    /**
     * Send request to complaints API
     * @param $type
     * @param $offset
     * @return string
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\httpclient\Exception
     */
    public static function request($type, $offset)
    {
        $params = ['q' => '*:*', 'wt' => 'json', 'rows' => 30, 'sort' => 'timestamp asc'];

        if ($offset) {
            $params['fq'] = "timestamp:[{$offset} TO NOW]";
        }

        $client = new Client(['transport' => 'yii\httpclient\CurlTransport']);
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('http://solr.ansc.md/solr/' . $type . '/select')
            ->setData($params)
            ->setHeaders(['content-type' => 'application/json']);
        try {
            $result = $response->send();
        } catch (Exception $exception) {
            throw new ServiceException($exception->getMessage(), 500);
        }

        return $result->getContent();
    }
}