<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Booking;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\CheckBookingStatus::class,
        Commands\roomStatus::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
          $schedule->command('check-booking-status')->Hourly();;
          $schedule->command('roomStatus')->Hourly();;
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
