@extends('layout/page')
@section('content')
    <title>Admin - Room</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/kamar/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <h1 class="text-5xl font-bold">Room Data Mago Hotel</h1>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No</span>
                        </label>
                        <input name="room_id" type="text" placeholder="R 000" maxlength="8" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Type Room</span>
                        </label>
                        <select class="input input-bordered" id="tipe" name="roomType_id" required>
                            @foreach ($dataKamar as $tipe)
                                <option value="{{ $tipe->roomType_id }}">{{ $tipe->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Facility</span>
                        </label>
                    </div>
                    @foreach ($fasilitas as $pill)
                        <div class="px-12">
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-success"
                                        value="{{ $pill->facility_id }}" name="facility_id[]"
                                        id="facility_id-{{ $pill->facility_id }}" multiple />
                                    <span class="label-text"
                                        for="facility_id-{{ $pill->facility_id }}">{{ $pill->nama }}</span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
