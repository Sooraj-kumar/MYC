@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">Users</h2>
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
            <table id="myTable" class="table table-striped table-hover table-borderless display" data-info="false" >
                <thead>
                    <tr>
                        <th class="th-sm">Full Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Phone</th>
                        <th class="th-sm">Address</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ Str::ucfirst($user->full_name) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            @if ($user->status=="Active")
                                <span class="badge rounded-pill bg-success">Active</span>
                        @else
                                <span class="badge rounded-pill bg-danger">InActive</span></td>
                            @endif    
                        </td>  
                        <td>
                            @if ($user->status=="Active")
                                <a href="/admin/inactive_user/{{ $user->id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                            @else
                                <a href="/admin/active_user/{{ $user->id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                            @endif
                        <td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
		</div>
	</div>

@endsection