<?php
namespace backend\controllers;

use Yii;

class TestController extends \deepziyu\yii\rest\Controller {

    /**
     * 示例接口
     * @param int $id 请求参数
     * @return string version api版本
     * @return int yourId 你的请求参数
     */
    public function actionIndex($id)
    {
        return ['version'=>'1.0.0','yourId'=>$id];
    }

}
