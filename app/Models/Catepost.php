<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catepost extends Model
{
    protected $table = 'catepost';
    protected $primaryKey = 'id';
    protected $guarede = [];


    public function PostNew()
    {
    	return $this->hasMany('App\Models\PostNew', 'id_catepost', 'id');
    }
}
