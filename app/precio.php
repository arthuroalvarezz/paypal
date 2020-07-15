<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class precio extends Model
{
        protected $table = "precios";
        protected $primaryKey = 'precios_id';

   public function events_workshops()
  {
    return $this->belongsTo('App\Events_Workshops', 'id_evt_wrk');
  }
   public static function getPrecio()
  {
    return Precio::
select('events_workshops.id_evt_wrk','precios.preciomx')  
->join('events_workshops', 'events_workshops.id_evt_wrk', '=', 'precios.fk_id_precios')
->where('events_workshops.id_evt_wrk', '17')
//->groupBy('precios.preciomx')
 ->get();
  }
    public function events()
  {
    // 1.- Modelo a relacionar
    // 2.- Tabla pivote
    // 3.- Llave foranea del modelo que realiza la relación
    // 4.- Llave foranea del modelo a relacionar
    return $this->belongsToMany('App\Event','events_workshops','id_workshop','id_event');
  }
  //App\Products.php
public function categories(){
    return $this->belongsToMany('App\Categories', 'product_id', 'id');
}

//App\Categories.php
public function products(){
    return $this->hasMany('App\Products', 'category_id', 'id');
}
}


