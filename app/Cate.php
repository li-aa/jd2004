<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
   protected $table='cates'; 
   protected $primaryKey = 'c_id';
   public $timestamps = false;
   //黑名单
   protected $guarded = [];
}
