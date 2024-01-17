@extends('layout/page')
@section('content')
    <title>Admin - Type Room</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/tpKamar/saveEdit') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                    <div class="text-center" >
                        <h1 class="text-5xl font-bold">Edit Tipe Kamar</h1>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No Kamar</span>
                        </label>
                        <input name="roomType_id" type="text" placeholder="RMT-1001" class="input input-bordered" required value="{{ $tpKamar->roomType_id }}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama</span>
                        </label>
                        <input id="nama" name="nama" type="text" placeholder="Nama Tipe Kamar" class="input input-bordered"
                            required value="{{ $tpKamar->nama }}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Deksripsi</span>
                        </label>
                        <input id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi Tipe Kamar" class="input input-bordered"
                            required value="{{ $tpKamar->deskripsi }}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Harga per Malam</span>
                        </label>
                        <input id="hargaPerMalam" name="hargaPerMalam" type="text" placeholder="Harga per Malam" class="input input-bordered"
                            required value="{{ $tpKamar->hargaPerMalam }}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kapasitas Kamar</span>
                        </label>
                        <input id="kapasitas" name="kapasitas" type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{ $tpKamar->kapasitas }}" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
