@if(count($errors))
	<div class="col-sm-6">
		<div class="panel panel-danger" >
			<div class="panel-heading">
				Message
			</div>
			<div class="panel-body">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endif