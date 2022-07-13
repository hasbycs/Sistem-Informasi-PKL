<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;   
    public $password;
    public $role;
    public $namaLengkap;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'No Bp atau NIP telah terdaftarkan, jika anda lupa lapor pada admin '],
            ['username', 'string', 'min' => 2, 'max' => 10],
            ['namaLengkap','required'],
        	['username', 'string', 'min' => 2, 'max' => 255],
        	['role', 'required'],        
        	['role', 'integer'],
        		

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }     
        $user = new User();
        $user->username = $this->username;
        $user->namaLengkap = $this->namaLengkap;
        
        $user->setPassword($this->password);
        $user->role=$this->role;
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
