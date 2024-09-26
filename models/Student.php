<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class Student extends ActiveRecord implements \yii\web\IdentityInterface
{

    public function rules(){

        return [
            [["fname","lname"], "required"]
        ];

    }

    public static function tableName(){
        return "students";
    }

    public function findStudent($email, $pass){

        $student = self::findOne(["email"=>$email,"password"=>$pass]);

        return $student;

    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        // return $this->authKey;
    }

    public function getRegistrations(){

        return $this->hasMany(Registration::class,["student_id"=>"id"]);
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        // return $this->authKey === $authKey;
    }

    public static function findIdentity($id){

    }

    public static function findIdentityByAccessToken($token,$type=null){

    }

}

