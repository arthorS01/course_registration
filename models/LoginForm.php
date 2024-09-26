<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginForm extends Model
{
    public $password;
    public $email;
    public $rememberMe = true;
 

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            ["email","email"]
            // password is validated by validatePassword()
        ];
    }

    public function login(){
        $user = new Student;

        $user = $user->findStudent($this->email, $this->password);

       if(is_null($user)){
            return false;
       }else{
            
            Yii::$app->user->login($user);

            return $user;
        
    }
    }
   
}
