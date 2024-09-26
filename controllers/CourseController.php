<?php

namespace app\controllers;

use Yii;
// use yii\filters\AccessControl;
use yii\web\Controller;
// use yii\web\Response;
// use yii\filters\VerbFilter;
use app\models\{Registration,Course};
use app\models\{Student};

class CourseController extends Controller
{
    
    public function actionIndex(){

        $user = $_SESSION["user"];
        $registered_courses = $user->registrations;

       return $this->render("/course/index", ["registrations"=>$registered_courses]);
        // var_dump($registrations);
    }

    public function actionRegister($course_id=null){

       if(!is_null($course_id)){
            $registration = new Registration;

            $registration->student_id = $_SESSION["user"]->id;
            $registration->course_id = $course_id;

            $registration->save();
       }
        $allCourses = Course::find()->all();
        return $this->render("/course/register",["courses"=>$allCourses]);
    }

}
