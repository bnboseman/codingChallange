<?php

namespace Tests\Unit;

use App\Models\Player;
use App\User;
use Tests\TestCase;

class PlayersIntegrityTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGoaliePlayersExist ()
    {
/*
		Check there are players that have can_play_goalie set as 1
*/
		$result = User::where('user_type', 'player')->where('can_play_goalie', 1)->count();
		$this->assertTrue($result > 1);

    }
    public function testAtLeastOneGoaliePlayerPerTeam ()
    {
/*
	    calculate how many teams can be made so that there is an even number of teams and they each have between 18-22 players.
	    Then check that there are at least as many players who can play goalie as there are teams
*/

        $players = Player::isGoalie('false')->get();
        $goalies = Player::isGoalie()->get();
        $numberOfTeams = $players->count() / config('teams.min_team_size');
        $this->assertTrue(  $numberOfTeams <= $goalies->count());
    }
}
