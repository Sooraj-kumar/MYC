@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                    MCE Profile Requests
                </h2>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table id="myTable" class="table table-striped table-hover table-borderless" data-info="false" >
                <thead>
                <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Full Name</th>
                    <th class="th-sm">Designation</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">View Profile</th>
                    <th class="th-sm">Review</th>
                    </tr>
                </thead>  
                <tbody>
                    @foreach ($mce_profiles as $mce_profile)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/mce_profiles/'.$mce_profile->mce_profile_image) }}" class="img-fluid" width="35px">
                        </td>
                        <td>{{ $mce_profile->full_name }}</td>
                        <td>{{ $mce_profile->designation_title }}</td>
                        <td>
                            @if ($mce_profile->status=='Approved')
                                <span class="badge rounded-pill bg-success">Approved</span>
                            @elseif ($mce_profile->status=='Rejected')
                                <span class="badge rounded-pill bg-danger">Rejected</span>
                            @elseif ($mce_profile->status=='Pending')
                                <span class="badge rounded-pill bg-warning">Pending</span>
                            @endif
                        </td>  
                        <td><a href="/admin/view_mce_profile/{{ $mce_profile->mce_profile_id }}" class="btn"><i class="fa-solid fa-user"></i></a></td>
                        <td>{{ $mce_profile->review }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
		</div>
	</div>

@endsection