@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                    Jobs
                </h2>
            </div>
            <div class="add-new-btn mb-4 float-end">
                <a href="/admin/add_new_job" class="btn btn-outline-dark btn-sm">Add New</a>
            </div>
            <table id="myTable" class="table table-striped table-hover table-borderless" data-info="false" >
                <thead>
                <tr>
                    <th class="th-sm">Job Title</th>
                    <th class="th-sm">Department/Company</th>
                    <th class="th-sm">Category</th>
                    <th class="th-sm">Posted on</th>
                    <th class="th-sm">Last Date</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->job_title }}</td>
                        <td>{{ $job->department }}</td>
                        <td>{{ $job->job_category }}</td>
                        <td>{{ $job->posted_on }}</td>
                        <td>{{ $job->last_date }}</td>
                        <td>
                            @if ($job->status=='Active')
                                <span class="badge rounded-pill bg-success">Active</span>
                            @elseif ($job->status=='InActive')
                                <span class="badge rounded-pill bg-danger">InActive</span></td>
                            @endif
                        </td>  
                        <td>
                            <a href="/admin/edit_job/{{ $job->id }}" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                            @if ($job->status=="Active")
                                <a href="/admin/inactive_job/{{ $job->id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                            @else
                                <a href="/admin/active_job/{{ $job->id  }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
		</div>
	</div>

@endsection