@extends('layout/page')
@section('content')
    <title>Admin - Room</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body">
                    <div class="text-center">
                        <h1 class="text-5xl font-bold">Room Data Mago Hotel</h1>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Code</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Type Room</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Facility</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Max Capactiy</span>
                        </label>
                        <input type="text" placeholder="Jhon Doe Fellas Acumalaka" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Price</span>
                        </label>
                        <input type="text" placeholder="IDR" class="input input-bordered"
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
