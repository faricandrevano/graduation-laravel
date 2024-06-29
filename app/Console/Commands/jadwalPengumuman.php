<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Jadwal;
use Carbon\Carbon;

class jadwalPengumuman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:jadwal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Atur Otomatis Jadwal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = Jadwal::all();
        foreach ($data as $value) {
            $time = Carbon::parse($value->jadwal);
            if(!is_null($time) && $time->isCurrentMinute() && $value->status = 0) {
                $value->update([
                    'status' => 1
                ]);
            }
        }
    }
}
