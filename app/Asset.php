<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
  protected $table = 'assets';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id','image_url', 'accured_date', 'present_value','accured_value', 'ownership', 'purchased_prior_marriage',
  ];

}
