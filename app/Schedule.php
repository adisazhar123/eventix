<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  protected $guarded = [''];
  protected $fillable = [
      'id', 'id_cinema', 'id_film', 'jam1', 'jam2', 'jam3', 'jam4', 'jam5'
  ];
  protected $table = 'schedules';
}
