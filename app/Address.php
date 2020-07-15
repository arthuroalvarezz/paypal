<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'address_id';

  public function events_workshops()
  {
    return $this->belongsTo('App\Events_Workshops','id_address');
  }
}
