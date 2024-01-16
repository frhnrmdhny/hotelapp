@extends('layout/page')
@section('content')
    <title>Admin - Booking</title>
    @include('components/navigation')

    <div class="hero bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body">
                    <div class="text-center">
                        <h1 class="text-5xl font-bold">Booking Data Mago Hotel</h1>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Full Name</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Phone Number</span>
                        </label>
                        <input type="text" placeholder="123-456-789" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Addres</span>
                        </label>
                        <input type="text" placeholder="Jl.Country Road" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Type Unit</span>
                        </label>
                        <input type="text" placeholder="Room 4A" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Rooms</span>
                        </label>
                        <input type="text" placeholder="B24A" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
