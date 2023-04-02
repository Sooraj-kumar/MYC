@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="row">
                <div class="col-md-6 col-sm-6 text-center">
                    <div class="event-banner">
                        <img src="/image/event.svg" class="img-fluid" style="width: 60%; margin-top: 35%;">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-wrap">
                        <div class="form-title mb-3">
                            <h4 class="text-center">Add New Invitation</h4>
                        </div>
                        <form action="/admin/add_invitation" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Invitation Subject</label>
                                <input type="text" autofocus name="subject" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Detail</label>
                                <textarea class="form-control" name="detail">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Invited To</label>
                                <input type="text" name="invited-to" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="invitation-date" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time</label>
                                <input type="time" name="invitation-time" class="form-control form-control-sm">
                            </div>  
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="invitation-address" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <button type="reset" class="btn btn-outline-dark btn-sm">Reset</button>
                                <button type="submit" class="btn btn-dark btn-sm" name="add-invitation-btn">Add</button>
                            </div>  
                        </form>
                    </div>  
                </div>
            </div>
		</div>
	</div>

@endsection