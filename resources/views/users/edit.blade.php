@extends('layouts.app') @section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit User</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
		</div>
	</div>
</div>


@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br>
	<br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li> @endforeach
	</ul>
</div>
@endif

<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-2">
		<div class="nav flex-column" id="v-pills-tab" role="tablist"
			aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
				href="#v-pills-home" role="tab" aria-controls="v-pills-home"
				aria-selected="true">Home</a> <a class="nav-link"
				id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
				role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
				href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
				aria-selected="false">Messages</a> <a class="nav-link"
				id="v-pills-settings-tab" data-toggle="pill"
				href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
				aria-selected="false">Settings</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-10">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home"
				role="tabpanel" aria-labelledby="v-pills-home-tab">{!!
				Form::model($user, ['method' => 'PATCH','route' => ['users.update',
				$user->id]]) !!} @include('users.form') {!! Form::close() !!}</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
				aria-labelledby="v-pills-profile-tab">Tab profile</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
				aria-labelledby="v-pills-messages-tab">Tab message</div>
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
				aria-labelledby="v-pills-settings-tab">Tab settings</div>
		</div>
	</div>
</div>



@endsection
