@extends('layouts.master')
@section('content')
	
	<!-- Content -->
	<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">All Rooms</h4>
                            <a href="{{ route('form/staff/add') }}" class="btn btn-primary float-right veiwbutton">Add Room</a> 
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
                                            <th>ID Staff</th>
                                            <th>Nama Lengkap</th>
                                            <th>Gaji </th>
                                            <th>Nomor Telepon</th>
                                            <th>email</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach($staff as $data)
                                  	<tbody>
                                  		
                                        <td>{{$data->staff_id}}</td>
                                        <td>{{$data->namaDepan}} {{$data->namaBelakang}}</td>
                                        <td>{{$data->gaji}}</td>
                                        <td>{{$data->no_phone}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>
                                            <a class="dropdown-item" href="{{ url('form/staff/edit/'.$data->staff_id) }}">
                                                <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                            </a>
                                            <a class="dropdown-item delete_asset" href="#" data-toggle="modal" data-target="#delete_asset">
                                                <i class="fas fa-trash-alt m-r-5"></i> Delete
                                            </a> 
                                        </td>
                                        
                                  	</tbody>
                                    @endforeach
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