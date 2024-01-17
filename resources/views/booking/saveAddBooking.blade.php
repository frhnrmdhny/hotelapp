@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Tambah Booking</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/booking/saveBooking') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input name="booking_id"  id="booking_id" class="form-control" type="hidden" value="{{$booking_id}}"> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" name="staff_id" value="{{$staff_id}}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="room_id">Pilih Kamar</label>
                                    <select class="form-control" id="room_id" name="room_id">
                                        @foreach($kamar as $data)
                                        <option value="{{$data->room_id}}">{{$data->room_id}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                               <div class="col-md-8">
                                <div class="form-group">
                                  <label for="checkin">Tanggal Checkin</label>
                                  <input type="datetime-local" name="checkin" id="checkin" value="{{ date('Y-m-d') . 'T' . date('H:i:s') }}" readonly>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="lama">Lama Menginap</label>
                                  <input name="lama" id="lama" class="form-control" type="text" value=""> 
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="checkout">Tanggal Checkout</label>
                                  <input type="datetime-local" name="checkout" id="checkout" value="" readonly>
                                </div>
                              </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama_tamu">Nama Tamu</label>
                                     <input name="nama_tamu"  id="nama_tamu" class="form-control" type="text" value=""> 
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                   <input name="NIK"  id="NIK" class="form-control" type="text" value=""> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_phone">No Telepon</label>
                                     <input name="no_phone"  id="no_phone" class="form-control" type="text" value="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit ml-2">Save</button>
                <button type="button" class="btn btn-primary buttonedit">Cancel</button>
            </form>
            <!-- <button type="button" class="btn btn-primary buttonedit">Tambah Kamar</button> -->
        </div>
    </div>

    @section('script')
      <script>
        const checkinInput = document.getElementById("checkin");
        const lamaInput = document.getElementById("lama");
        const checkoutInput = document.getElementById("checkout");

        lamaInput.addEventListener("input", function() {
          const lama = parseInt(lamaInput.value);
          const checkin = new Date(checkinInput.value);
          const checkout = new Date(checkin.getTime() + (lama * 24 * 60 * 60 * 1000));
          checkoutInput.value = checkout.toISOString().slice(0, 10) + 'T' + checkout.toISOString().slice(11, 19);
        }, {
          immediate: true
        });
      </script>
    @endsection
@endsection