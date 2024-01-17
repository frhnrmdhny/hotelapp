@extends('layout.page')
@section('content')

    <title>Admin - Type</title>

    @include('components/navigation')

    <div class="w-full bg-base-200 ">
        <div class="overflow-x-auto">
            <div class="py-4 px-4">
                <a class="btn btn-outline btn-success" href="{{ route('form/booking/add') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path
                            d="M2 3.5A1.5 1.5 0 0 1 3.5 2h2A1.5 1.5 0 0 1 7 3.5v2A1.5 1.5 0 0 1 5.5 7h-2A1.5 1.5 0 0 1 2 5.5v-2ZM2 10.5A1.5 1.5 0 0 1 3.5 9h2A1.5 1.5 0 0 1 7 10.5v2A1.5 1.5 0 0 1 5.5 14h-2A1.5 1.5 0 0 1 2 12.5v-2ZM10.5 2A1.5 1.5 0 0 0 9 3.5v2A1.5 1.5 0 0 0 10.5 7h2A1.5 1.5 0 0 0 14 5.5v-2A1.5 1.5 0 0 0 12.5 2h-2ZM11.5 9a.75.75 0 0 1 .75.75v1h1a.75.75 0 0 1 0 1.5h-1v1a.75.75 0 0 1-1.5 0v-1h-1a.75.75 0 0 1 0-1.5h1v-1A.75.75 0 0 1 11.5 9Z" />
                    </svg>
                    Add Data
                </a>
            </div>
            <table class="table text-xl text-center" compact>
                <!-- head -->
                <thead>
                         <tr>
                            <th>Nomor Booking</th>
                            <th>Nomor Kamar</th>
                            <th>Check in</th>
                            <th>Check out</th>
                            <th>Nama Tamu</th>
                            <th>Nomor Telepon</th>
                            <th>Status </th>
                            <th class="">Actions</th>
                        </tr>
                </thead>
                <tbody>
                           
                </tbody>
            </table>


            {{-- Modal --}}
            <input type="checkbox" id="my_modal_6" class="modal-toggle" />
            <div class="modal" role="dialog">
                <div class="modal-box">
                    <h3 class="font-bold text-lg text-red-500">Delete Data!</h3>
                    <p class="py-4 text-md">Are you sure delete this data ?</p>
                    <span class="py-2 text-md text-yellow-400">Data cant restore if admin delete</span>
                    <div class="modal-action">
                        <label for="my_modal_6" class="btn btn-info">Close</label>
                        <label for="my_modal_6" class="btn btn-error">Delete</label>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

