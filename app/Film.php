<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
  protected $guarded = [''];
  protected $fillable = [
      'id', 'name', 'genre', 'duration', 'director'
  ];
  protected $table = 'films';
}
