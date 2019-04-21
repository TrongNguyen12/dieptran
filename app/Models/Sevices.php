<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sevices extends Model
{
    protected $table = 'detalsevice';
    protected $primaryKey = 'id';
    protected $guarede = [];
    public function Dichvu()
    {
    	return $this->belongsTo('App\Models\Dichvu', 'id_cateSevice', 'id');
    }
}
