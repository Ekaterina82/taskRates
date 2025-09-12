<?php

namespace app\commands;

use yii\console\Controller;
use app\common\ServiceDto;
use yii\helpers\VarDumper;
use yii\console\ExitCode;

class RateController extends Controller
{
    /**
     * Консольный вызов командой php yii rate latest.json
     * где последний параметр путь к resource path url
     * @param string $path
     * @return int Exit code
     */
    public function actionIndex($path)
    {
        $serviceDto = new ServiceDto();
        $result = $serviceDto->getData($path);
        VarDumper::dump($result);
        return ExitCode::OK;
    }
}