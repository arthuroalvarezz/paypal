<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'partner_id';

  public function workshops()
  {
    return $this->hasMany('App\Workshop','id_partner');
  }

  public static function getPartners()
  {
    return Partner::orderBy('order_partner', 'ASC')->get();
  }
}
