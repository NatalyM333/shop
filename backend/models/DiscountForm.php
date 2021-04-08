<?php

namespace backend\models;

use yii\base\Model;

class DiscountForm extends Model
{
    public $name;
    public $description;
    public $percent;

    public function rules()
    {
        return[
            [['name','description',], 'string', 'message' => 'не вірний тип поля'],
            
            [['percent'], 'double', 'min' => 0],
            [['name','description','percent'], 'required', 'message' => 'значення обов\'язкове'],
        ];     
    }
    public function attributeLabels()
    {
        return [
            'name' => 'Назва знижки',
        ];
    }
  

}
