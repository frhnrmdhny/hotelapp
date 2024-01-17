@extends('layouts.master')
@section('content')
	
	<!-- Content -->
	<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">Booking</h4>
                            <a href="{{ route('form/booking/add') }}" class="btn btn-primary float-right veiwbutton">Tambah Booking</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nomor Booking</th>
                                            <th>Nomor Kamar</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>Nama Tamu</th>
                                            <th>Nomor Telepon</th>
                                            <th>Status </th>
                                            <th class="">Actions</th>
                                        </tr>
                                    </thead>
                                  	<tbody>
                                        
                                  	</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- delete model --}}
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <form action="" method="POST">
                            @csrf
                            <img src="" alt="" width="50" height="46">
                            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                            <div class="m-t-20">
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <input class="form-control" type="hidden" id="e_id" name="id" value="">
                                <input class="form-control" type="hidden" id="e_fileupload" name="fileupload" value="">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end delete model --}}
    </div>
@endsection