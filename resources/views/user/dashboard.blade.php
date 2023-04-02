@extends('user.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<h2>User Dashboard</h2>
			{{ auth()->user() }}
		</div>
	</div>


@endsection