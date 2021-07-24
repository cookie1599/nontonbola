<?php

declare(strict_type=1);

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->truncate();
        
        $clubs = [
            [
                'stadium_id' => '1',
                'name'          => 'Chelsea FC',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url'               => 'chelseafc.com',
                'thropy'        =>19,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
            [
                'stadium_id' => '2',
                'name'          => 'Arsenal',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url'               => 'arsenal.com',
                'thropy'        =>9,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
            [
                'stadium_id' => '3',
                'name'          => 'Manchaster United',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url'               => 'manchesterunited.com',
                'thropy'        =>10,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
            [
                'stadium_id' => '4',
                'name'          => 'Manchester City',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url'               => 'manchestercity.com',
                'thropy'        =>20,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
            [
                'stadium_id' => '5',
                'name'          => 'Liverpool',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url'               => 'liverpool.com',
                'thropy'        =>12,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
            [
                'stadium_id' => '6',
                'name'          => 'Tottenham Hotipur',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url'               => 'totenhamtipur.com',
                'thropy'        =>5,
                'created_at'    => '2021-07-21 00:00:00',
                'updated_at'    => '2021-07-21 00:00:00',
            ],
        ];
        Clubs::insert($clubs);
    }
}
