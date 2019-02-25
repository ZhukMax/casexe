<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Gift Controller API
 */
class GiftController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Gift';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];

        return $behaviors;
    }

    public function actionNew()
    {
        $type = rand(0, 2);

        switch ($type) {
            case 0:
                return ['type' => 'money', 'gift' => rand(100, 15000)];

            case 1:
                return ['type' => 'points', 'gift' => rand(100, 15000)];

            case 2:
                $gifts = [
                    "iphone", "macbook"
                ];
                $i = array_rand($gifts);
                return ['type' => 'object', 'gift' => $gifts[$i]];
        }
    }
}
