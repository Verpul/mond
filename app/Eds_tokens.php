<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eds_tokens extends Model
{
    public $timestamps = false;

     protected $fillable = [
    	'eds_id',
    	'token_id',
    ];
}
