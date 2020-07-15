<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'event_id';

  public function workshops()
  {
    // 1.- Modelo a relacionar
    // 2.- Tabla pivote
    // 3.- Llave foranea del modelo que realiza la relación
    // 4.- Llave foranea del modelo a relacionar
    return $this->belongsToMany('App\Workshop','events_workshops','id_event','id_workshop');
  }

  public function events_workshops()
  {
    return $this->hasMany('App\Events_Workshops','id_event');
  }

  
}
