<?php

namespace App\Http\Controllers\Team;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Http\Resources\TeamResource;
use App\Team;

class TeamController extends Controller
{
    protected $responseName = '';

    protected $area = 'Player';

    public function store(CreateTeamRequest $request)
    {
        $this->responseName = 'TeamStore';

        $player = Team::create($request->all());

        return $this->response( new TeamResource($player) );
    }

    public function players(Team $team)
    {
        $list = PlayerResource::collection($team->players);

        return $this->response( $list );
    }
}
