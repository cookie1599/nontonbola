<?php

declare(strict_type=1);

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->truncate();
        
        $stadiums = [
            [
                'name'      => 'Standford Bridge',
                'capacity'  =>  40000,
                'address'   => 'Standford Bridge',
                'created_at'    => '2021-07-21 00:00:00',
                'update_at'    => '2021-07-21 00:00:00',
            ],
            [
                'name'      => 'Emirates Stadium',
                'capacity'  =>  50000,
                'address'   => 'Emirates',
                'created_at'    => '2021-07-21 00:00:00',
                'update_at'    => '2021-07-21 00:00:00',
            ]
        ]
    }
}
