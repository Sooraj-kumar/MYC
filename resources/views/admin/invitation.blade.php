@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                    Invitation
                </h2>
            </div>
            <div class="add-new-btn mb-4 float-end">
                <a href="/admin/add_new_invitation" class="btn btn-outline-dark btn-sm">Add New</a>
            </div>
            <table id="myTable" class="table table-striped table-hover table-borderless" data-info="false" >
                <thead>
                    <tr>
                        <th class="th-sm">Subject</th>
                        <th class="th-sm">Invited to</th>
                        <th class="th-sm">Date</th>
                        <th class="th-sm">Time</th>
                        <th class="th-sm">Address</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <span class="badge rounded-pill bg-dark">Teacher</span>
                            <span class="badge rounded-pill bg-dark">Doctors</span></td>
                        </td>
                        <td>20th September 2022</td>
                        <td>09:00 AM</td>
                        <td>Dad Road Daharki</td>
                        <td>
                            <span class="badge rounded-pill bg-success">Active</span>
                            <span class="badge rounded-pill bg-danger">InActive</span></td>
                        </td>  
                        <td>
                            <a href="#" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                            <a href="#" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>    
		</div>
	</div>

@endsection