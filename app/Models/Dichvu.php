<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    protected $table = 'dichvu';
    protected $primaryKey = 'id';
    protected $guarede = [];
    public function Sevices()
    {
    	return $this->hasMany('App\Models\Sevices', 'id_cateSevice', 'id');
    }
}
