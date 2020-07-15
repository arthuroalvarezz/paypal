@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main_styles.css') }}">

@section('content')
<!--<input type="text"  name="event_id" id="event_id" value="{{ $event->id_evt_wrk }}">-->
<!-- To DO -->
@include('events.slide')
@include('events.description')
@include('events.contact')
@include('events.inscription')
@include('events.instructor')


@endsection

