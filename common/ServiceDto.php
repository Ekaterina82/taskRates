<?php

namespace app\common;

use yii\httpclient\Client;
use app\common\dto\LatestDTO;

final class ServiceDto
{
    private const HOST = 'https://openexchangerates.org/api/';
    private const AP_ID = '78ecb0ce6afe4341805f62a7625e467c';

    public function getData($path)
    {
        switch ($path) {
            case ('latest.json'):
                return $this->getLatest($path);
        };
    }

    private function getLatest($path)
    {
        $endPoint = self::HOST . $path;

        $response = $this->getRequestData($endPoint);
        if ($response->isOk) {
            return new LatestDTO(
                $response->data['disclaimer'],
                $response->data['license'],
                $response->data['timestamp'],
                $response->data['base'],
                $response->data['rates']
            );
        } else {
                $message = \Yii::t('Неуспешный ответ от апи. Код ответа {0}', [$response->getStatusCode()]);
                \Yii::warning($message);
        }
    }

    private function getRequestData($endPoint)
    {
        $client = new Client();
        return $client->createRequest()
            ->setMethod('get')
            ->setUrl($endPoint)
            ->setData(['app_id' => self::AP_ID])
            ->send();
    }
}
