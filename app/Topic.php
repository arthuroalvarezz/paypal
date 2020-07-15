<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'topic_id';

  /**
   * Función que crea relación 1:N con Subtopic.
   *
   * @return $this->hasMany('App\Subtopic','id_topic');
   */

   public function subtopics()
   {
     return $this->hasMany('App\Subtopic','id_topic');
   }

   public function workshops()
   {
     return $this->belongsTo('App\Workshop','id_workshop');
   }


}
