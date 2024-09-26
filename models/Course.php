<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Course extends ActiveRecord 
{

    public function rules(){

        return [
            [["code","title"], "required"]
        ];

    }

    public static function tableName(){
        return "courses";
    }

      
    public function getRegistrations(){

        return $this->hasMany(Registration::class,["course_id"=>"id"]);
    }
}



