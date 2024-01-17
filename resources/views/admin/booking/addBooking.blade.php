@extends('layout.page')
@section('content')

    <title>Admin - Type Room</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/booking/save') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                    <div class="text-center" >
                        <h1 class="text-5xl font-bold">Tambah Booking</h1>
                    </div>
                    <div class="form-control">
                        <label class="label" for="booking_id">
                            <span class="label-text">No Booking</span>
                        </label>
                        <input name="booking_id"  id="booking_id" class="input input-bordered" type="text" value="" required> 
                    </div>
                    <div class="form-control">
                        <label class="label" for="staff_id">
                            <span class="label-text">Pilih Staff</span> 
                        </label>
                            <select class="input input-bordered" id="staff_id" name="staff_id">
                                @foreach($staff as $data)
                                <option value="{{$data->staff_id}}">{{$data->namaDepan}} {{$data->namaBelakang}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-control">
                        <label class="label" for="kapasitas">
                            <span class="label-text">Jumlah Tamu</span>
                        </label>
                        <input name="kapasitas"  id="kapasitas" class="input input-bordered" type="text" value="" oninput="filterTipeKamar()" required> 
                    </div>
                    <div class="form-control">
                        <label class="label" for="tipeKamar">
                            <span class="label-text">Tipe Kamar</span>
                        </label>
                            <select class="input input-bordered" id="tipeKamar" name="tipeKamar">
                                @foreach($kamar as $data)
                                    <option value="{{$data->nama}}">{{$data->nama}} </option>
                                @endforeach
                            </select>
                    </div>
    
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
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