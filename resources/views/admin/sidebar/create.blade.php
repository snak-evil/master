@extends('master')
	
		@section('sidemenu')

			@include('layout.sidemenu')

		@endsection

		@section('content')
			@include('layout.navmenu')
			<div class="sub-content">	
				<div class="panel col-sm-5" >
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<h3>Create Side Menu</h3>
						<form method="POST" action="save">
							{{ csrf_field() }}
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess1">Title</label>
							  <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock"
							  placeholder="Home" name="title">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess1">Alias</label>
							  <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock"
							  placeholder="home" name="alias">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess1">URL</label>
							  <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock"
							  placeholder="/example/" name="url">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess1">Icon</label>
							  <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock" placeholder="Please input Bootstrap glypicon class" name="icon">
							</div>
							<div class="form-group has-success">
							  <label class="control-label" for="inputSuccess1">Parent</label>
							  <select class="form-control" id="inputSuccess1" aria-describedby="helpBlock" name="parent">
							  		<option value="0">No Parent</option>
							  	@foreach($sidebars as $sidebar)
							  		<option value="{{ $sidebar->id }}">{{ $sidebar->title }}</option>
							  	@endforeach
							  </select>
							</div>
							<div class="form-group has-success">
								<input type="submit" class="btn btn-primary pull-right" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
		@endsection
	

	@section('footer')
		<script type="text/javascript" src="/js/main.js"></script>
	@endsection
