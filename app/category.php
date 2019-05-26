<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  public function content(){
    return $this->hasMany('App\content','category_id');
  }

}
