<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Events_Workshops;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    $date_now = date('Y-m-d');
    $to2 = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
        $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('events', 'events.event_id', '=', 'events_workshops.id_event')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
           ->select('events_workshops.start_date','events_workshops.end_date','workshops.name','workshops.duration','addresses.maps','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.id_evt_wrk','events_workshops.status', 'workshops.slug', 'events.time', 'events.discount', 'events.pays', 'events.price', 'instructors.name AS nombre_instructor', 'instructors.last_name')
           
            ->whereBetween('end_date', [$date_now, $to2])
            ->where( 'workshops.slug' , $slug)
           
            ->orderBy('start_date','ASC')
           ->get();/***busqueda por slug calendario**/


     $workshop = \DB::table('workshops')
                ->join('partners', 'partners.partner_id', '=', 'workshops.id_partner')
                ->where( 'workshops.slug' , $slug)
               ->select('workshops.name','workshops.img_main','workshops.audience','workshops.modalidad','workshops.description','workshops.img','partners.logo','workshops.benefits','workshops.goals','workshops.agenda','workshops.what_include','workshops.slug')
               ->get();/***todas las variables para ficha tecnica**/
   
        return view('tech_sheet.index',compact('workshop','to2','date_now','evabierto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        //
    }

    public static function getCalendarInfo()
    {
      $evt_wrks = Events_Workshops::all();
      $events = [];
      foreach ($evt_wrks as $evt_wrk) {
        $address = $evt_wrk->address;;
        $location = $address['country']." ".$address['city']." ".$address['state'];
        $workshop = $evt_wrk->workshops;
        $event = array("workshop"=>$workshop['name'],
                  "duration"=>$workshop['duration'],
                  "start_date"=>$evt_wrk->start_date,
                  "location"=>$location,
                  "status"=>$evt_wrk->status,
                  "workshop_id"=>$workshop['workshop_id'],
                  "id_evt_wrk"=>$evt_wrk->id_evt_wrk);
        array_push($events,$event);
      }
      return $events;
    }
}
