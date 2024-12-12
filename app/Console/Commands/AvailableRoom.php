<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Dormitory\Room;
use Illuminate\Console\Command;

class AvailableRoom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:available-room';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Room::with('students')->get()->each(function ($room): void {
            $room->update([
                'available' => $room->capacity - $room->students->count(),
            ]);
        });
    }
}
