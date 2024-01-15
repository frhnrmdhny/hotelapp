@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Tambah Kamar</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/kamar/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No Kamar</label>
                                    <input name="room_id" class="form-control" type="text" value=""> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tipe">Tipe Kamar</label>
                                    <select class="form-control" id="tipe" name="roomType_id">
                                        @foreach($dataKamar as $tipe)
                                        <option value="{{$tipe->roomType_id}}">{{$tipe->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label> Fasilitas Kamar</label>
                            </div>
                            @foreach($fasilitas as $pill)
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-inputl" type="checkbox" value="{{$pill->facility_id}}" name="facility_id[]" id="facility_id-{{$pill->facility_id}}" multiple> 
                                    <label for="facility_id-{{$pill->facility_id}}">{{$pill->nama}}</label>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Fasilitas Kamar</label>
                                    <input class="form-control" type="text" value=""> </div>
                                </div>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit ml-2">Save</button>
                <button type="button" class="btn btn-primary buttonedit">Cancel</button>
            </form>
            <!-- <button type="button" class="btn btn-primary buttonedit">Tambah Kamar</button> -->
        </div>
    </div>
@endsection