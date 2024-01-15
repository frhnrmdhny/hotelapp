@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Tambah Fasilitas Kamar</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/fasilitas/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row formtype">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="facility_id">No Fasilitas Kamar</label>
                                    <input name="facility_id" class="form-control" type="text" value="" required> 
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input id="nama" name="nama" class="form-control" type="text" value="" required> 
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>    
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    
                                   <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" required> 
                                    </textarea>
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