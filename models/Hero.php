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
}