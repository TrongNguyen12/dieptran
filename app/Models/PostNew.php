<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostNew extends Model
{
    protected $table = 'postnew';
    protected $primaryKey = 'id';
    protected $guarede = [];

    public function Catepost()
    {
    	return $this->belongsTo('App\Models\Catepost', 'id_catepost', 'id');
    }
}
