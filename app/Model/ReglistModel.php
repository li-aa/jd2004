<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReglistModel extends Model
{
   protected $table='reglist'; 
   protected $primaryKey = 'reg_id';
   public $timestamps = false;
   //黑名单
   protected $guarded = [];
   

}
