<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReglistModel extends Model
{
   protected $table='p_users_github'; 
   protected $primaryKey = 'id';
   //黑名单
   protected $guarded = [];
   

}
