<?php

namespace micro\models;

use yii\db\ActiveRecord;

/*
 * Created on Thu Feb 22 2018
 * By Heru Arief Wijaya
 * Copyright (c) 2018 belajararief.com
 */

class Hero extends ActiveRecord
{ 
    public static function tableName()
    {
        return '{{heroes}}';
    }

    
    public static function primaryKey()
    {
        return ['id'];
    }

    public function rules()
    {
        return [
            [['id', 'name'], 'safe'],
        ];
    }
    
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($this->isNewRecord)
            {
                $latestRecord = self::find()->select('max(id) AS id')->one();
                $latestId = $latestRecord->id;
                $this->id = $latestId + 1;

                $request = \Yii::$app->request->post();
                var_dump($request);
                if(!$this->name){
                    // $jsonName = json_encode($request[0]);
                }
            }

            return parent::beforeSave($insert);
        }
    }
}