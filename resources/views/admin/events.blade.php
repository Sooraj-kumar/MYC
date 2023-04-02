@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                    Events / Seminors
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
            <div class="add-new-btn mb-4 float-end">
                <a href="/admin/add_new_event" class="btn btn-outline-dark btn-sm">Add New</a>
            </div>
            <table id="myTable" class="table table-striped table-hover table-borderless" data-info="false" >
                <thead>
                    <tr>
                        <th class="th-sm">Event Title</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Date</th>
                        <th class="th-sm">Time</th>
                        <th class="th-sm">Address</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->event_title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->event_time }}</td>
                            <td>{{ $event->event_address }}</td>
                            <td>
                                @if ($event->status=="Active")
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-danger">InActive</span>    
                                @endif
                            </td>  
                            <td>
                                <a href="/admin/edit_event/{{ $event->id }}" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                                @if ($event->status=="Active")
                                    <a href="/admin/inactive_event/{{ $event->id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                                @else
                                    <a href="/admin/active_event/{{ $event->id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                                @endif
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
		</div>
	</div>

@endsection