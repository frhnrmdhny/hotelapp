@extends('layout/page')
@section('content')
    <title>Admin - Facility</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                 <form class="card-body" action="{{ route('form/fasilitas/saveEdit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center" >
                        <h1 class="text-5xl font-bold">Edit Data Fasilitas Kamar</h1>
                    </div>
                    <div class="form-control">
                        <label class="label" for="facility_id">
                            <span class="label-text">Nomor Fasilitas</span>
                        </label>
                        <input name="facility_id" id="facility_id" type="text" placeholder="Jhon Doe" class="input input-bordered" required value="{{$fasilitas->facility_id}}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input name="nama" id="nama" type="text" placeholder="Jhon Doe" class="input input-bordered" required value="{{$fasilitas->nama}}" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <input type="text" name="deskripsi" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{$fasilitas->deskripsi}}"/>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
