@extends('layouts.app') @section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Role Management</h2>
		</div>
		<div class="pull-right">
			@can('role-create') <a class="btn btn-success"
				href="{{ route('roles.create') }}"> Create New Role</a> @endcan
		</div>
	</div>
</div>


<div class="row">
	@if ($message = Session::get('success'))
	<div class="col-lg-12 margin-tb">
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	</div>
	@endif
</div>

<div class="row justify-content-center">
	<div class="col-md-12 margin-tb">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th width="280px">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($roles as $key => $role)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $role->name }}</td>
					<td><a class="btn btn-sm btn-info"
						href="{{ route('roles.show',$role->id) }}">Show</a>
						@can('role-edit') <a class="btn btn-sm btn-primary"
						href="{{ route('roles.edit',$role->id) }}">Edit</a> @endcan
						@can('role-delete') {!! Form::open(['method' => 'DELETE','route'
						=> ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])
						!!} {!! Form::close() !!} @endcan</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

{!! $roles->render() !!} @endsection
