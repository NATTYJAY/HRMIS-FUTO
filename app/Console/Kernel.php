<?php

namespace App\Console;

use App\Staff_Leave;
use App\staff_work;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
//    protected $commands = [
//        //
//    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            $get_staffw = staff_work::get();
            foreach ($get_staffw as $gets){
                if($gets->status != 7){
                    $new_rank = ($gets->status) + 1;
                    $lastTime = $gets->PromotedYear;
                    $new_promotedYr = strtotime('+3 years',strtotime($lastTime));
                    staff_work::where('staff_id', '=', $gets->staff_id)
                        ->update(['status' =>$new_rank,'PromotedYear'=>$new_promotedYr ]);
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
