@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Tambah Booking</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/booking/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="booking_id">No Booking</label>
                                    <input name="booking_id"  id="booking_id" class="form-control" type="text" value=""> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="staff_id">Pilih Staff</label>
                                    <select class="form-control" id="staff_id" name="staff_id">
                                        @foreach($staff as $data)
                                        <option value="{{$data->staff_id}}">{{$data->namaDepan}} {{$data->namaBelakang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="kapasitas">Jumlah Tamu</label>
                                    <input name="kapasitas"  id="kapasitas" class="form-control" type="text" value="" oninput="filterTipeKamar()"> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="tipeKamar">Pilih Tipe Kamar</label>
                                    <select class="form-control" id="tipeKamar" name="tipeKamar">
                                        @foreach($kamar as $data)
                                            <option value="{{$data->nama}}">{{$data->nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit ml-2">Next</button>
                <button type="button" class="btn btn-primary buttonedit">Cancel</button>
            </form>
            <!-- <button type="button" class="btn btn-primary buttonedit">Tambah Kamar</button> -->
        </div>
    </div>

    @section('script')
    <script >
        function filterTipeKamar() {
        const kapasitasInput = document.getElementById("kapasitas").value;
        const tipeKamarSelect = document.getElementById("tipeKamar");

        // Ambil data tipe kamar yang tersedia
        const availableTipeKamar = @json($kamar);

        // Filter tipe kamar berdasarkan kapasitas maksimal
        const filteredTipeKamar = availableTipeKamar.filter(kamar => parseInt(kamar.kapasitas) >= parseInt(kapasitasInput));

        // Kosongkan option tipe kamar
        tipeKamarSelect.innerHTML = "";

        filteredTipeKamar.forEach(kamar => {
            const option = document.createElement("option");
            option.value = kamar.nama;
            option.text = kamar.nama;
            tipeKamarSelect.add(option);
        });
    }
    </script>
    @endsection
@endsection