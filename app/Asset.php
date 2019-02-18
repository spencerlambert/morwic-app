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
    'user_id','accured_date', 'present_value','accured_value', 'ownership', 'purchased_prior_marriage', 'property_item_name', 'item_location', 'serial_number' ,'make_model', 'notes','upload_image_property_receipts','other_ownership'
  ];

}
