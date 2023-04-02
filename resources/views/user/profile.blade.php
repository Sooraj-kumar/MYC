@extends('user.layouts.app')
@section('content')

	<div class="profile-demo">
		<img src="/image/user.png" alt="" class="img-fluid" style="width: 15%">
	</div>
	<div class="row">
		<div class="col-sm-6">
			<h5 class=" mt-5 mb-3">Personal Detail</h5>
			<form action="/user/personal_detail" method="POST" class="mce_profile">
				<div class="mb-3">
					<label class="form-label">Full Name</label>
					<input type="text" name="full_name" class="form-control" value="{{ Auth()->user()->full_name }}" disabled>
				</div>
				<div class="mb-3">
					<label class="form-label">Home Town</label>
					<input type="text" name="home_town" class="form-control" value="">
				</div>
				<div class="mb-3">
					<label class="form-label">Phone Number</label>
					<input type="phone" name="phone" class="form-control" value="">
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-dark">Save</button>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<h5 class=" mt-5 mb-3">Account Detail</h5>
			<form action="/user/account_detail" method="POST" class="mce_profile">
				<div class="mb-3">
					<label class="form-label">Email Address</label>
					<input type="email" name="email" class="form-control" value="{{ Auth()->user()->email }}" disabled>
				</div>
				<div class="mb-3">
					<label class="form-label">Old Password</label>
					<input type="password" name="old_password" class="form-control" value="">
				</div>
				<div class="mb-3">
					<label class="form-label">New Password</label>
					<input type="password" name="new_password" class="form-control" value="">
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-dark">Save</button>
				</div>
			</form>
		</div>
	</div>


@endsection