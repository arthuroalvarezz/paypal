@extends('layouts.app')

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('css/main_styles.css') }}">

@foreach($workshop as $ho)

@section('title', $ho->name.' | Innovatium®')
@section('image', $ho->img_main)

@endforeach

  @section('content')

  @include('tech_sheet.slide')
  @include('tech_sheet.description')
  @include('tech_sheet.download')

  @include('tech_sheet.linkcalendar')
  @include('tech_sheet.contact')


  
<!-- To DO -->
@endsection


