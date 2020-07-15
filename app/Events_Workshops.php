<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events_Workshops extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'id_evt_wrk';
  protected $table = 'events_workshops';

  public function events()
  {
    return $this->belongsTo('App\Event','id_event');
  }

  public function address()
  {
    return $this->belongsTo('App\Address','id_address');
  }

  public function instructor()
  {
    return $this->belongsTo('App\Instructor','id_instructor');
  }

  public function workshops()
  {
    return $this->belongsTo('App\Workshop','id_workshop');
  }
  public function events_private()
  {
    return $this->belongsTo('App\EventsPrivate','eventsprivate_id');
  }
  // 1.- Modelo a relacionar
    // 2.- Tabla pivote
    // 3.- Llave foranea del modelo que realiza la relación
    // 4.- Llave foranea del modelo a relacionar
 public function precios()
  {
    return $this->hasMany('App\Precio', 'fk_id_precios');
  }



  public static function getCalendarInfo()
  {

    $date_now = date('Y-m-d');
       //$date_now = Carbon::now();

//  $date_now = date("Y-m-d",strtotime(date('%d %b %Y')."+ 1 day"));
   //$date_now = "2019-10-23";
  //  $from = date("2019-10-24",strtotime(date('%d %b %Y')."+ 1 day"));
   $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));

    /***$from = date('2019-10-04');
    $to = date('2059-10-23');***/

//    $evt_wrks = Events_Workshops::whereBetween('start_date', [$date_now, $to])->get(); /******filtro para los eventos del calendario************/
   $evt_wrks = Events_Workshops::whereBetween('end_date', [$date_now, $to])->orderBy('start_date','ASC')->get();  /**esto lo agrege para segundo filtro**/
    $events = [];
    foreach ($evt_wrks as $evt_wrk) {
      setlocale(LC_TIME, 'es_MX.UTF-8');
      $start_date = strftime("%d %b %Y", strtotime($evt_wrk->start_date));
       $end_date = strftime("%d %b %Y", strtotime($evt_wrk->end_date));/**esto lo agrege para segundo filtro**/
      $location = $evt_wrk->address->street." ".$evt_wrk->address->no_ext." ".$evt_wrk->address->region." ".$evt_wrk->address->cp." ".$evt_wrk->address->city." ".$evt_wrk->address->state." ".$evt_wrk->address->country;
        $instructor = $evt_wrk->instructor->name." ".$evt_wrk->instructor->last_name;
      $event = array("workshop"=>$evt_wrk->workshops->name,
                "duration"=>$evt_wrk->workshops->duration,
               "slug"=>$evt_wrk->workshops->slug,
               "Activo"=>$evt_wrk->workshops->Activo,
                "start_date"=>$start_date,
                "end_date"=>$end_date,/**esto lo agrege para segundo filtro**/
                "location"=>$location,
                "status"=>$evt_wrk->status,
                "horario"=>$evt_wrk->events->time,
                "precio"=>$evt_wrk->events->price,
                "descuento"=>$evt_wrk->events->discount,
                "instructor"=>$instructor,
                "ciudad"=>$evt_wrk->address->city,
                "calle"=>$evt_wrk->address->street,
                "estado"=>$evt_wrk->address->state,
                "pais"=>$evt_wrk->address->country,
                 "mapa"=>$evt_wrk->address->maps,
                "workshop_id"=>$evt_wrk->workshops->workshop_id,
                "id_evt_wrk"=>$evt_wrk->id_evt_wrk);

      array_push($events,$event);
    }
    return $events;
  }
}


/*************
  {
  $from = date("2019-10-24",strtotime(date('%d %b %Y')."- 1 day"));
   $to = date("2059-10-21",strtotime(date('%d %b %Y')."- 1 day"));

    /***$from = date('2019-10-04');
    $to = date('2059-10-23');***/

  //  $evt_wrks = Events_Workshops::whereBetween('start_date', [$from, $to])->get(); /******filtro para los eventos del calendario************/
  //  $events = [];
  //  foreach ($evt_wrks as $evt_wrk) {
  //    setlocale(LC_TIME, 'es_MX.UTF-8');
  //    $start_date = strftime("%d %b %Y", strtotime($evt_wrk->start_date));
  //    $location = $evt_wrk->address->street.", ".$evt_wrk->address->no_ext.", ".$evt_wrk->address->region.", ".$evt_wrk->address->cp.", ".$evt_wrk->address->city.", ".$evt_wrk->address->state.", ".$evt_wrk->address->country;
  //    $event = array("workshop"=>$evt_wrk->workshops->name,
  //              "duration"=>$evt_wrk->workshops->duration,
   //             "start_date"=>$start_date,
  //              "location"=>$location,
  //              "status"=>$evt_wrk->status,
   //             "workshop_id"=>$evt_wrk->workshops->workshop_id,
  //              "id_evt_wrk"=>$evt_wrk->id_evt_wrk);
  //    array_push($events,$event);
 //   }
  //  return $events;
 // }

