@extends('client.clientMasterPage')

@section('navMenu')
  @include('client.layout.navmenu')
@endsection
@section('content')
  @include('client.layout.slider')
  @include('client.layout.content')
  @include('client.layout.footer')
@endsection