@extends('master')
	
		@section('sidemenu')

			@include('layout.sidemenu')

		@endsection

		@section('content')
			@include('layout.navmenu')
			<div class="sub-content">	
				Content Gose here
			</div>
		@endsection
	

	@section('footer')
		<script type="text/javascript" src="/js/main.js"></script>
	@endsection
