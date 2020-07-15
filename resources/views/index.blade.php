@extends('layouts.app')
@section('title', 'Innovatium® | Capacitación y Coaching')
@section('image', '/images/innovatium.jpg')

@section('content')

  @include('index.main')
  @include('index.slogan')
  @include('index.workshops')
  @include('index.calendar')
  @include('index.team')
  @include('index.customers')
  @include('index.contact')

@endsection
