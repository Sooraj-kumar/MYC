@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                     MCE Form
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
                
            @error('designation-title')    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            @error('city-title')    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            @error('degree-title')    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            <div class="">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Designation
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="add-new-btn float-end">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#designationModal">
                                        Add Designation
                                    </button>
                                </div>
                                <table id="dt-vertical-scroll" class="table table-striped table-hover table-borderless" data-info="false" >
                                    <thead>
                                    <tr>
                                        <th class="th-sm">Sr#</th>
                                        <th class="th-sm">Designation Title</th>
                                        <th class="th-sm">Status</th>
                                        <th class="th-sm">Action</th>
                                        </tr>
                                    </thead>  
                                    <tbody>
                                        @foreach ($designations as $designation)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $designation->designation_title }}</td>
                                            <td>
                                                @if( $designation->status=='Active')
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">InActive</span></td>
                                                @endif
                                            </td>  
                                            <td>
                                                <a href="/admin/edit_designation/{{ $designation->designation_id }}" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                                                @if ($designation->status=="Active")
                                                    <a href="/admin/inactive_designation/{{ $designation->designation_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                                                @else
                                                    <a href="/admin/active_designation/{{ $designation->designation_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                                                @endif
                                            </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            City
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="add-new-btn float-end">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#cityModal">
                                        Add City
                                    </button>
                                </div>
                                <table id="dt-vertical-scroll" class="table table-striped table-hover table-borderless" data-info="false" >
                                    <thead>
                                    <tr>
                                        <th class="th-sm">Sr#</th>
                                        <th class="th-sm">City Title</th>
                                        <th class="th-sm">Status</th>
                                        <th class="th-sm">Action</th>
                                        </tr>
                                    </thead>  
                                    <tbody>
                                        @foreach ($cities as $city)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $city->city_title }}</td>
                                            <td>
                                                @if ( $city->status=="Active")
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">InActive</span></td>
                                                @endif
                                                    
                                            </td>  
                                            <td>
                                                <a href="/admin/edit_city/{{ $city->city_id }}" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                                                @if ($city->status=="Active")
                                                    <a href="/admin/inactive_city/{{ $city->city_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                                                @else
                                                    <a href="/admin/active_city/{{ $city->city_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                                                @endif
                                            </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Degrees
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="add-new-btn float-end">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#degreeModal">
                                        Add Degree
                                    </button>
                                </div>
                                <table id="dt-vertical-scroll" class="table table-striped table-hover table-borderless" data-info="false" >
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Sr#</th>
                                            <th class="th-sm">Degree Title</th>
                                            <th class="th-sm">Status</th>
                                            <th class="th-sm">Action</th>
                                            </tr>
                                    </thead>  
                                    <tbody>
                                        @foreach ($degrees as $degree)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $degree->degree_title }}</td>
                                            <td>
                                                @if ( $degree->status=="Active")
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">InActive</span></td>
                                                @endif
                                                    
                                            </td>  
                                            <td>
                                                <a href="/admin/edit_degree/{{ $degree->degree_id }}" class="btn btn-outline btn-sm"><i class="fa fa-edit"></i></a>
                                                @if ($degree->status=="Active")
                                                    <a href="/admin/inactive_degree/{{ $degree->degree_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-on"></i></a>
                                                @else
                                                    <a href="/admin/active_degree/{{ $degree->degree_id }}" class="btn btn-outline btn-sm"><i class="fa fa-toggle-off"></i></a>
                                                @endif
                                            </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>


	    <!----designation modal------>
    <div class="modal fade" id="designationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Designation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/add-designation" method="POST">
                    @csrf
                    <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Designation Title</label>
                                <input type="text" name="designation-title" autofocus class="form-control" placeholder="Enter Designation Title" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add-designation-btn" class="btn btn-dark btn-sm" tabindex="1">Add</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!----end designation modal------>

    <!----city modal------>
    <div class="modal fade" id="cityModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/add-city" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">City Title</label>
                            <input type="text" name="city-title" class="form-control" placeholder="Enter City Title" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add-city-btn" class="btn btn-dark btn-sm">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----end city modal------>

    <!----degree modal------>
    <div class="modal fade" id="degreeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Degree</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/add-degree" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Degree Title</label>
                            <input type="text" name="degree-title" class="form-control" placeholder="Enter Degree Title" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add-degree-btn" class="btn btn-dark btn-sm">Add</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!----end degree modal------>
@endsection