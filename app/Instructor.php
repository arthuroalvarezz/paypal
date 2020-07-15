<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'instructor_id';

  public function events_workshops()
  {
    return $this->belongsTo('App\Events_Workshops','id_instructor');
  }
  public function eventsprivate()
  {
    return $this->hasOne('App\EventsPrivate','id_instructor');
  }
}
