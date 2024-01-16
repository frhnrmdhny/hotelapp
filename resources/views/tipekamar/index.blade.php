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
                            <a href="{{ route('form/tpKamar/add') }}" class="btn btn-primary float-right veiwbutton">Add Room</a> 
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
                                            <th >TipeKamar ID</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga per Malam</th>
                                            <th>Kapasitas</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                  	<tbody>
                                  		@foreach ($tipeKamar as $data)
                                  		<tr>
                                  			<td class="roomType_id">{{$data->roomType_id }}</td>
                                  			<td>{{$data->nama}}</td>
                                  			<td>{{$data->deskripsi}}</td>
                                  			<td>{{$data->hargaPerMalam}}</td>
                                  			<td>{{$data->kapasitas}}</td>
                                  			<td>
                                                <a class="dropdown-item" href="{{ url('form/tpKamar/edit/'.$data->roomType_id) }}">
                                                    <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                </a>
                                                <a class="dropdown-item delete_asset" href="#" data-toggle="modal" data-target="#delete_asset">
                                                    <i class="fas fa-trash-alt m-r-5"></i> Delete
                                                </a> 
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
        
        {{-- delete model --}}
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <form action="{{ route('form/tpKamar/delete') }}" method="POST">
                            @csrf
                            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                            <div class="m-t-20">
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <input class="form-control" type="hidden" id="e_roomType_id" name="roomType_id" value="">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end delete model --}}
         @section('script')
        {{-- delete model --}}
        <script>
            $(document).on('click','.delete_asset',function()
            {
                var _this = $(this).parents('tr');
                $('#e_roomType_id').val(_this.find('.roomType_id').text());
            });
        </script>
    @endsection
    </div>
@endsection