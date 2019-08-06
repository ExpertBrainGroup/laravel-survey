<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyOne extends Model
{
    //
    public $table = 'surveyone';
	public $fillable = ['name','email','message'];
}
