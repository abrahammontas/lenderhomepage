<?php

use App\Player;
use App\Team;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Team::class)->create();

        // Create three App\Player instances...
        factory(Player::class, 5)->create();
    }
}
