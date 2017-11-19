@extends('admin.master')
	
		@section('sidemenu')

			@include('admin.layout.sidemenu')

		@endsection

		@section('content')
			<ol class="page-header breadcrumb breadcrumb-arrow">
				<li>
					<a href="/admin/dashboard">
						Administrator
					</a>
				</li>
				<li>
					<a href="/admin/categories">
						Categories
					</a>
				</li>
				<li>
					Create
				</li>
			</ol>
			<div class="sub-content">	
				<div class="col-sm-6">
					<div class="panel">
						
						<div class="panel-body">
							<form method="POST" action="save">
								{{ csrf_field() }}
								<div class="form-group has-success">
								  <label class="control-label" for="txtName">Title</label>
								  <input type="text" class="form-control" id="txtName" aria-describedby="helpBlock"
								  placeholder="Home" name="name">
								</div>
								<div class="form-group has-success">
								  <label class="control-label" for="txtIcon">Icon</label>
								  <input type="text" class="form-control" id="txtIcon" aria-describedby="helpBlock" placeholder="Please input Bootstrap glypicon class" name="icon">
								</div>
								<div class="form-group has-success">
								  <label class="control-label" for="parentCate">Parent</label>
								  <select class="form-control" id="parentCate" aria-describedby="helpBlock" name="parent">
								  		<option value="0">No Parent</option>
								  	@foreach($parentCate as $parent)
								  		<option value="{{ $parent->id }}">{{ $parent->name }}</option>
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
				@include('admin.layout.error')
			</div>
		@endsection
	

	@section('footer')
		<script type="text/javascript" src="/js/main.js"></script>
	@endsection
