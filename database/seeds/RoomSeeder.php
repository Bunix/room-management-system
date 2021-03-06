<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $floor) {
            foreach (range(1, 10) as $room) {
                DB::table('rooms')->insert(['room' => 100 * $floor + $room]);
            }
        }
    }
}
