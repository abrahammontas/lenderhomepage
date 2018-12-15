<?php

namespace App\Http\Controllers\Player;

use App\Http\Requests\CreatePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Player;

class PlayerController extends Controller
{
    protected $responseName = '';

    protected $area = 'Player';


    public function store(CreatePlayerRequest $request)
    {
        $this->responseName = 'PlayerStore';

        $player = Player::create($request->all());

        return $this->response( new PlayerResource($player));
    }

    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $this->responseName = 'PlayerUpdate';

        $player->update($request->all());

        return $this->response($player);
    }
}
