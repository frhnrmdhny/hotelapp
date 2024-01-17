<?php

namespace App\Observers;
use App\Models\Booking;
use App\Models\Kamar;

class BookingObserver
{
        public function created(Booking $booking)
        {
            $this->updateRoomStatus($booking);
        }

        public function updated(Booking $booking)
        {
            $this->updateRoomStatus($booking);
        }

        protected function updateRoomStatus(Booking $booking)
        {
            if ($booking->status == 'active') {
                $kamar = Kamar::find($booking->room_id);
                if ($kamar) {
                    $kamar->status = 'terpakai';
                    $kamar->save();
                }
            }
        }
}
