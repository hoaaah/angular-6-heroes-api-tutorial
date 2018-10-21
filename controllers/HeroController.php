<?php

namespace micro\controllers;

use yii\rest\ActiveController;

class HeroController extends ActiveController
{
    public $modelClass = 'micro\models\Hero';

    public function behaviors()
    {
        // remove rateLimiter which requires an authenticated user to work
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors'  => [
                // restrict access to domains:
                'Origin'                           => [
                    // 'http://localhost:4200'
                    '*'
                ],
                'Access-Control-Request-Method'    => ['GET', 'POST', 'PUT', 'OPTIONS', 'DELETE', 'VIEW'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
            ],
        ];
        
        return $behaviors;
    }
}
