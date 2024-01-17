@extends('layout/page')
@section('content')
    <title>Admin - Management</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/staff/saveEdit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <h1 class="text-5xl font-bold">Management Data Mago Hotel</h1>
                    </div>
                    <div class="form-control" >
                        <label class="label" for="staff_id">
                            <span class="label-text">staff id</span>
                        </label>
                        <input name="staff_id" type="text" placeholder="Jhon Doe" class="input input-bordered" required value="{{$staff->staff_id}}" />
                    </div>
                    <div class="form-control" >
                        <label class="label" for="namaDepan">
                            <span class="label-text">First Name</span>
                        </label>
                        <input id="namaDepan" name="namaDepan" type="text" placeholder="Jhon Doe" class="input input-bordered" required value="{{$staff->namaDepan}}"/>
                    </div>
                    <div class="form-control" >
                        <label class="label" for="namaBelakang">
                            <span class="label-text">Last Name</span>
                        </label>
                        <input id="namaBelakang" name="namaBelakang" type="text" placeholder="Jhon Doe" class="input input-bordered" required value="{{$staff->namaBelakang}}"/>
                    </div>
                    <div class="form-control">
                        <label class="label" for="gaji">
                            <span class="label-text">Gaji Staff</span>
                        </label>
                        <input id="gaji" name="gaji" type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{$staff->gaji}}"/>
                    </div>
                    <div class="form-control">
                        <label class="label" for="ttl">
                            <span class="label-text">Tanggal Lahir</span>
                        </label>
                        <input id="ttl" name="ttl" type="date" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{$staff->ttl}}"/>
                    </div>
                    <div class="form-control">
                        <label class="label" for="no_phone">
                            <span class="label-text">No Telpon</span>
                        </label>
                        <input id="no_phone" name="no_phone" type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{$staff->no_phone}}"/>
                    </div>
                    <div class="form-control">
                        <label class="label" for="email">
                            <span class="label-text" >email</span>
                        </label>
                        <input id="email" name="email" type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required value="{{$staff->no_phone}}"/>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
