<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class content extends Model implements ViewableContract
{
  use Viewable;
  public function user(){
    return $this->belongsTo('App\User');
  }
  public function category(){
    return $this->belongsTo('App\category');
  }

}
