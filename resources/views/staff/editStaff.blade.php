@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Tambah Tipe Kamar</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/staff/saveEdit') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row formtype">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="staff_id">ID Staff</label>
                                    <input name="staff_id" class="form-control" type="text" value="{{ $staff->staff_id }}" required> 
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="namaDepan">Nama Depan</label>
                                    <input id="namaDepan" name="namaDepan" class="form-control" type="text" value="{{ $staff->namaDepan }}" required> 
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="namaBelakang">Nama Belakang</label>
                                    <input id="namaBelakang" name="namaBelakang" class="form-control" type="text" value="{{ $staff->namaBelakang }}" required> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="gaji">Gaji Staff</label>
                                    <input id="gaji" name="gaji" class="form-control" type="text" value="{{ $staff->gaji }}" required> 
                                </div>
                            </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                    <label for="ttl">Tanggal Lahir</label>
                                    <input id="ttl" name="ttl" class="form-control" type="date" value="{{ $staff->ttl }}" required> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_phone">No Telepon</label>
                                    <input id="no_phone" name="no_phone" class="form-control" type="text" value="{{ $staff->no_phone }}" required> 
                                </div>
                            </div>
                             
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" class="form-control" type="text" value="{{ $staff->email }}" required> 
                                </div>
                            </div>
                             
                             

                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit ml-2">Simpan</button>
                <button type="button" class="btn btn-primary buttonedit">Cancel</button>
            </form>
            <!-- <button type="button" class="btn btn-primary buttonedit">Tambah Kamar</button> -->
        </div>
    </div>
@endsection