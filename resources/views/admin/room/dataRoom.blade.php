@extends('layout/page')
@section('content')
    <title>Admin - Data Room</title>

    @include('components/navigation')

    <div class="hero bg-base-200 ">
        <div class="grid grid-cols-1 gap-4 py-4 md:grid-cols-4">
            @foreach ($kamar as $data)
                @foreach ($data->tipeKamar()->get() as $d)
                    <div class="card w-96 bg-base-100 shadow-md rounded-lg">
                        <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ $d->nama }}</h2>
                            <p>Lorem, ipsum.</p>
                            <div class="card-actions justify-end">
                                <!-- The button to open modal -->
                                <label for="modal" class="btn btn-secondary"> <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                        <path fill-rule="evenodd"
                                            d="M1.38 8.28a.87.87 0 0 1 0-.566 7.003 7.003 0 0 1 13.238.006.87.87 0 0 1 0 .566A7.003 7.003 0 0 1 1.379 8.28ZM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    View</label>

                                <!-- Put this part before </body> tag -->
                                <input type="checkbox" id="modal" class="modal-toggle" />
                                <div class="modal hero" role="dialog">
                                    <div class="modal-box">
                                        <h3 class="text-lg font-bold">Data</h3>
                                        <div class="hero">
                                            <label class="form-control w-full max-w-xs">
                                                <div class="label">
                                                    <span class="label-text">Nomor Kamar</span>

                                                </div>
                                                <input type="text" placeholder="Type here" value="{{ $data->room_id }}" name="room_id" id="room_id"
                                                    class="room_id input input-bordered w-full max-w-xs" disabled />
                                            </label>
                                        </div>
                                        <div class="hero">
                                            <label class="form-control w-full max-w-xs">
                                                <div class="label">
                                                    <span class="label-text">Tipe Kamar</span>

                                                </div>
                                                <input type="text" placeholder="Type here" value="{{ $d->nama }}"name="nama" id="nama"
                                                    class="input input-bordered w-full max-w-xs" disabled />
                                            </label>
                                        </div>

                                        <div class="hero">
                                            <label class="form-control w-full max-w-xs">
                                                <div class="label">
                                                    <span class="label-text">Kapasitas</span>

                                                </div>
                                                <input type="text" placeholder="Type here" value="{{ $d->kapasitas }}"name="kapasitas" id="kapasitas"
                                                    class="input input-bordered w-full max-w-xs" disabled />
                                            </label>
                                        </div>

                                        <div class="hero">
                                            <label class="form-control w-full max-w-xs">
                                                <div class="label">
                                                    <span class="label-text">Harga</span>

                                                </div>
                                                <input type="text" placeholder="Type here"
                                                    value="{{ $d->hargaPerMalam }}" name="hargaPerMalam" id="hargaPerMalam"
                                                    class="input input-bordered w-full max-w-xs" disabled />
                                            </label>
                                        </div>
                                        <div class="px-16">
                                            <span class="label-text">Fasilitas</span>
                                            @foreach ($fasilitas as $pill)
                                                <div class="form-control w-full max-w-xs">
                                                    <label class="label cursor-pointer">
                                                        <input type="checkbox" checked disabled
                                                            class="checkbox checkbox-success"
                                                            value="{{ $pill->facility_id }}" name="facility_id[]"
                                                            id="facility_id-{{ $pill->facility_id }}" multiple />
                                                        <span class="label-text"
                                                            for="facility_id-{{ $pill->facility_id }}">{{ $pill->nama }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label class="modal-backdrop" for="modal">Close</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
