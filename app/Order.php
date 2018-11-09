<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'id', 'event_id', 'user_id'
  ];
  protected $table = 'order';
  public $timestamps = false;

  public function event(){
    return $this->belongsTo('App\Event');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
