@extends('admin.master')
	    @section('sidemenu')

			@include('admin.layout.sidemenu')

		@endsection

		@section('content')
			@include('admin.dashboard')
		@endsection