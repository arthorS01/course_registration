<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Registration extends ActiveRecord 
{
    public function rules(){

        return [
            [["student_id","course_id"], "required"]
        ];

    }

    
    public function getStudent(){
        return $this->hasOne(Student::class,["id"=>"student_id"]);
    }

    public function getCourse(){
        return $this->hasOne(Course::class,["id"=>"course_id"]);

    }
}



