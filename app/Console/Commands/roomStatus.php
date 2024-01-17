<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Models\Kamar;

class roomStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roomStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $bookings = Booking::where('status', '=', 'active')->get();
       foreach ($bookings as $booking) {
           $kamar = Kamar::where('room_id', '=', $booking->room_id)->update(['status' => 'terpakai']);
            
       }

        $beres = Booking::where('status', '=', 'expired')->get();
        foreach ($beres as $data){
            $kamar = Kamar::where('room_id', '=', $data->room_id)->update(['status' => 'tersedia']);
        }
    }
}
