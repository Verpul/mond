<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    protected $fillable = [
    	'type',
    	'serial',
    	'employee_id'
    ];

    //Типы носителей
    static $types = ['1'=>'Реестр', '2'=>'eToken', '3'=>'ruToken'];

	//Связь с таблицей Сотрудников    
    public function employees(){
    	return $this->belongsTo('App\Employees', 'employee_id');
    }

    //Связь с таблицей ЭЦП
    public function eds(){
    	return $this->belongsToMany('App\Eds', 'eds_tokens', 'token_id', 'eds_id');
    }

    //Типы носителей ЭЦП
    public function getTokenTypeAttribute(){
        return self::$types[$this->type];
    }
}
