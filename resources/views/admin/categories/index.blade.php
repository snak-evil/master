@extends('admin.master')
	

		
	@section('sidemenu')

		@include('admin.layout.sidemenu')

	@endsection
	@section('content')
					<ol class="page-header breadcrumb breadcrumb-arrow">
						<li><a href="/admin/dashboard">Administrator</a></li>
						<li>Categories</li>
						<li>List</li>
						<a href="/admin/categories/create" class="btn btn-primary pull-right">
							Add New
						</a>
					</ol>
				<div class="table-responsive">
					<table id="categories-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th><th>Name</th><th>Parent</th><th>Active</th>
								<th>Created At</th><th>Updated At</th><th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>
									{{ $category->id }}
								</td>
								<td>
									{{ $category->name }}
								</td>
								<td>
									@if($category->parent==1)
										No
									@else
										Yes
									@endif
								</td>
								<td>
									@if($category->active==1)
										Yes
									@else
										No
									@endif
								</td>
								<td>
									{{ $category->created_at }}
								</td>
								<td>
									{{ $category->updated_at }}
								</td>
								<td>
									<a href="/admin/categories/delete/{{ $category->id }}"><span class="glyphicon glyphicon-trash"></span></a> | <a href="/admin/categories/edit/{{ $category->id }}"><span class="glyphicon glyphicon-edit"></span></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
					    $('#categories-table').DataTable();
					} );
				</script>
		@endsection