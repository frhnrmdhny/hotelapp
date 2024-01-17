@extends('layout.page')
@section('content')

<title>Admin - Type Room</title>
    @include('components/navigation')

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('form/booking/saveBooking') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                    <div class="text-center" >
                        <h1 class="text-5xl font-bold">Tambah Booking</h1>
                    </div>
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

                    <div class="form-control">
                        <label class="label" for="room_id">
                            <span class="label-text">Pilih Kamar</span>
                        </label>
                         <select class="form-control" id="room_id" name="room_id">
                            @foreach($kamar as $data)
                            <option value="{{$data->room_id}}">{{$data->room_id}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label" for="checkin">
                            <span class="label-text">Tanggal Checkin</span>
                        </label>
                        <input type="datetime-local" name="checkin" id="checkin" value="{{ date('Y-m-d') . 'T' . date('H:i:s') }}" readonly>
                    </div>
                    <div class="form-control">
                        <label class="label" for="lama">
                            <span class="label-text">Lama Menginap</span>
                        </label>
                        <input name="lama" id="lama" class="form-control" type="text" value="">  
                    </div>
                    <div class="form-control">
                        <label class="label" for="checkout">
                            <span class="label-text">Tanggal Checkout</span>
                        </label>
                        <input type="datetime-local" name="checkout" id="checkout" value="" readonly>
                    </div>

                    <div class="form-control">
                        <label class="label" for="nama_tamu">
                            <span class="label-text">Nama Tamu</span>
                        </label>
                        <input name="nama_tamu"  id="nama_tamu" class="form-control" type="text" value=""> 
                    </div>
                    <div class="form-control">
                        <label class="label" for="NIK">
                            <span class="label-text">Nomor Identitas</span>
                        </label>
                        <input name="NIK"  id="NIK" class="form-control" type="text" value=""> 
                    </div>
                    <div class="form-control">
                        <label class="label" for="no_phone">
                            <span class="label-text">Nomor Telepon</span>
                        </label>
                        <input name="no_phone"  id="no_phone" class="form-control" type="text" value="">
                    </div>
    
                    <div class="form-control mt-6">
                        <button class="btn btn-outline btn-primary">Add</button>
                    </div>
                </form>
            </div>
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