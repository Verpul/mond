<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eds extends Model
{
	public $timestamps = false;

    protected $fillable = [
    	'purpose',
    	'employee_owner',
    	'company',
    	'token_id',
    	'created',
    	'expired',
    	'status'
    ];

    public static $purposes = ['1' => 'ГосЗакупки', '2' => 'ЭЛН', '3' => 'Контур',
                                '4' => 'СУФД', '5' => 'Свод-WEB', '6' => 'МДЛП',
                                '7' => 'Континент АП', '8' => 'SSL', '9' => 'Торговые площадки',
                                '10' => 'Электронный бюджет'];
    public static $companies = ['1' => 'УФК', '2' => 'Тензор',
                                '3' => 'Контур', '4' => 'Masterhost'];                            

    //Связь с таблицей Tokens
    public function tokens(){
    	return $this->belongsToMany('App\Tokens', 'eds_tokens', 'eds_id', 'token_id');
    }

    public function employees(){
    	return $this->belongsTo('App\Employees', 'employee_owner');
    }

    public function scopeActive($query){
    	return $query->where('status', true)
                    ->with('employees:id,surname')
                    ->orderBy('purpose')
                    ->orderBy('expired');
    }

    //Формат даты для вывода на страницу index eds
    public function formatDate($date){
        $date = \Carbon\Carbon::parse($date)->locale('ru')->isoFormat('D MMMM YYYY');
        
        return $date;
    }

    //Назначения ЭЦП
    public function getPurposesAttribute(){
        return self::$purposes[$this->purpose];
    }

    //Организации ЭЦП
    public function getCompaniesAttribute(){
        return self::$companies[$this->company];
    }
}
