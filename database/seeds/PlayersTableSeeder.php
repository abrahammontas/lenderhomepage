<?php

use App\Player;
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
        // Create three App\Player instances...
        $players = factory(Player::class, 5)->create();
    }
}
