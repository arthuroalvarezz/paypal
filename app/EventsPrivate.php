<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsPrivate extends Model
{
  protected $primaryKey = 'eventsprivate_id';
  protected $table = 'events_privates';

    public function instructor()
  {
    return $this->hasOne('App\Instructor','instructor_id','id_instructor');
  }

}
