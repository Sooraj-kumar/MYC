@extends('user.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h3 class="mb-4">MCE Profile</h3>
            </div>
            <div class="add-new-btn float-end">
                <a href="/user/mce_form" class="btn btn-dark btn-sm">Apply</a>
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
            <table id="dt-vertical-scroll" class="table table-striped table-hover table-borderless" data-info="false" >
                <thead>
                <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Full Name</th>
                    <th class="th-sm">Designation</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Review</th>
                    <th class="th-sm">View Profile</th>
                    <th class="th-sm">Action</th>
                </tr>
                </thead>  
                <tbody>
                    <tr>
                        <td>
                            <img src="/image/client_img.png" class="img-fluid" width="35px">
                        </td>
                        <td>Sooraj Kumar</td>
                        <td>Web Developer</td>
                        <td>
                            <span class="badge rounded-pill bg-success">Active</span>
                                
                            <span class="badge rounded-pill bg-danger">InActive</span></td>
                        </td>  
                        <td>Looking Awesome</td>
                        <td><a href="/admin/view_mce_profile" class="btn btn-outline-dark btn-sm">View</a></td>
                        <td>
                            <a href="" class="btn btn-outline"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-outline"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>

@endsection