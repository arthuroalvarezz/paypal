<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'workshop_id';

  public function partner()
  {
    return $this->belongsTo('App\Partner','id_partner');
  }

  public function events()
  {
    // 1.- Modelo a relacionar
    // 2.- Tabla pivote
    // 3.- Llave foranea del modelo que realiza la relación
    // 4.- Llave foranea del modelo a relacionar
    return $this->belongsToMany('App\Event','events_workshops','id_workshop','id_event');
  }

  public function events_workshops()
  {
    return $this->belongsTo('App\Events_Workshops','id_workshop');
  }

  public function topics()
  {
    return $this->hasMany('App\Topic','id_workshop');
  }
}
