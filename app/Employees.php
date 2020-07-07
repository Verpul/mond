<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	public $timestamps = false;

    protected $fillable = [
    	'first_name',
    	'surname',
    	'patronymic',
    	'email',
    	'work_phone',
    	'mob_phone',
    	'eds',
        'position'
    ];

    public function eds(){
        return $this->hasMany('App\Eds','employee_owner');
    }

    public function tokens(){
        return $this->hasMany('App\Tokens','employee_id');
    }

    public function scopeEdsEmployees($query){
        return $query->where('eds', true)->orderBy('surname');
    }

    public function getFullNameAttribute(){
        return $this->surname . ' ' . $this->first_name . ' ' . $this->patronymic;
    }
}
