<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function generateTeams()
    {
        $teams = (new User())->buildTeams();
        return view("team-generator", ['teams' => $teams]);
    }
}
