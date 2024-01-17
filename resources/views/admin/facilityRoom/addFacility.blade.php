@extends('layout/page')
@section('content')
    <title>Admin - Facility</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/fasilitas/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center" >
                        <h1 class="text-5xl font-bold">Booking Data Mago Hotel</h1>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Facility Code</span>
                        </label>
                        <input type="text" placeholder="FC000" class="input input-bordered" name="facility_id" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Barang Fasilitas</span>
                        </label>
                        <input name="nama" id="nama" type="text" placeholder="Barang" name="nama" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Deksripsi</span>
                        </label>

                        <input type="text" name="deskripsi" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
