<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'subtopic_id';

  public function topics()
  {
    return $this->belongsTo('App\Topic','id_topic');
  }
}
