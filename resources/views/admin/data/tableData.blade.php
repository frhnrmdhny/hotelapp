@extends('layout/page')
@section('content')
    <title>Admin - Table Data</title>

    @include('components/navigation')

    <div class="hero bg-base-200 ">
        <div class="overflow-x-auto">
            <table class="table text-xl text-center">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Type Unit</th>
                        <th>Room</th>
                        <th>Tool</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>100-200-300</td>
                        <td>Kanjut Badag</td>
                        <td></td>
                        <td></td>
                        <td>
                            <label for="my_modal_6" class="btn btn-error "> <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Delete</label>
                            <a href="{{url('admin/editTable')}}" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Edit</a>
                        </td>
                    </tr>

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
