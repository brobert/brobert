@extends('layouts.app') @section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Users Management</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('users.create') }}"> Create
				New User</a>
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
	<div class="col-md-12">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th><a
						href="{{ route('users.index', array_merge($urlQuery, ['sort' => 'name'])) }}">
							Name </a></th>
					<th><a
						href="{{ route('users.index', array_merge($urlQuery, ['sort' => 'email'])) }}">
							Email </a></th>
					<th><a
						href="{{ route('users.index', array_merge($urlQuery, ['sort' => 'created_at'])) }}">
							Created </a></th>
					<th>Roles</th>
					<th width="280px">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $key => $user)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->created_at }}</td>
					<td>@if(!empty($user->getRoleNames()))
						@foreach($user->getRoleNames() as $v) <label
						class="badge badge-success">{{ $v }}</label> @endforeach @endif
					</td>
					<td>{!! Form::open(['id' => 'user_delete_'.$user->id, 'method' =>
						'DELETE','route' => ['users.destroy',
						$user->id],'style'=>'display:none']) !!} {!!
						Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
						{!! Form::close() !!}

						<div class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
								role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" v-pre> Actions <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right"
								aria-labelledby="navbarDropdown">
								<a class="dropdown-item btn btn-sm btn-info"
									href="{{ route('users.show',$user->id) }}">Show</a> <a
									class="dropdown-item btn btn-sm btn-primary"
									href="{{ route('users.edit',$user->id) }}">Edit</a> <a
									class="dropdown-item"
									href="{{ route('users.destroy', ['user' => $user->id, 'scope'=>'public']) }}"
									onclick="event.preventDefault();document.getElementById('user_delete_{!!$user->id!!}').submit();">
									{{ __('Delete') }} </a>
							</div>
						</div>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


{!! $data->appends($urlQuery)->render() !!} @endsection
