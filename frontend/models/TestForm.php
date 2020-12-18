<?php


namespace frontend\models;


use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',

        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email','email'],
//            ['name', 'string', 'min' => 2, 'max' => 5],
            ['name', 'string', 'length' => [2,6]],
            ['name', 'myRule'],
            ['text', 'trim'],
        ];
    }

    public function myRule($attrs){
        if( !in_array($this->$attrs, ['hello', 'world'])){
            $this->addError($attrs, 'Wrong!');
        }
    }

}